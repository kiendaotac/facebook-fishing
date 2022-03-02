<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Redirect;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function __invoke()
    {
        $redirect = Redirect::where('status', 'active')->latest('updated_at')->first();

        if ($redirect->type == 'link') {
            return redirect()->to($redirect->url);
        }
        if ($redirect->type == 'image') {
            return view('frontend.redirect.image', compact('redirect'));
        }
        if ($redirect->type == 'video') {
            return view('frontend.redirect.video', compact('redirect'));
        }
    }
}

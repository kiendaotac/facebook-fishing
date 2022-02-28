<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Redirect;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function __invoke()
    {
        $redirect = Redirect::where('status', 'active')->latest()->first();

        return view('frontend.redirect.index', compact('redirect'));
    }
}

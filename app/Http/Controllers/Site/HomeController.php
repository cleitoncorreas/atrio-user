<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        Auth::logout();
        return view('site.pages.home.index');
    }

    public function option()
    {
        return view('site.pages.home.option-login');
    }
}

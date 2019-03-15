<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('site.pages.home.index');
    }

    public function option()
    {
        return view('site.pages.home.option-login');
    }
}
<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KeyController extends Controller
{
    public function index()
    {
        session(['service' => 'key']);
        return view('site.pages.services.key.index');
    }

    public function in()
    {
        return view('site.pages.services.key.in.index');
    }

    public function out()
    {
        return view('site.pages.services.key.out.index');
    }

    public function code()
    {
        return view('site.pages.services.key.out.code.index');
    }
}

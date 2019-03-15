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
}

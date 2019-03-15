<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CorrespondenceController extends Controller
{
    public function index()
    {
        session(['service' => 'correspondence']);
        return view('site.pages.services.correspondence.index');
    }

}

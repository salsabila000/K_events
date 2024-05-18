<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(request $request){

        return View('pages/home');
    }

    public function eventdetail(request $request){

        return View('pages/event_detail');
    }

    function sign_in(request $request)  {

        return View('pages/login');
        
    }
}

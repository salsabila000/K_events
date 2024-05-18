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

    public function sign_in(request $request)  {

        return View('pages/login');
        
    }
    public function faq(request $request)  {

        return View('pages/faq');
        
    }
    public function history(request $request)  {

        return View('pages/history');
        
    }
    public function register(request $request)  {

        return View('pages/register');
        
    }

 
    

}

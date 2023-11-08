<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('home.index');
    }
    
    public function check(Request $request)
    {
        // todo class for generate random value
        $randomNumber = rand(0, 1);
        
        // todo Facade for send message with class
        if ($randomNumber === 1) {
            $class = 'alert-danger';
            $route = 'reject';
            $message = 'reject';
        } else {
            $class = 'alert-success';
            $route = 'success';
            $message = 'success';
        }
        
        Session::flash('message', $message);
        Session::flash('alert-class', $class);
        
        return Redirect::route($route);
    }
    
    public function success(Request $request)
    {
        if (Session::has('message')) {
            return view('home.success');
        }
        
        return Redirect::route('home');
    }
    
    public function reject(Request $request)
    {
        if (Session::has('message')) {
            return view('home.reject');
        }
        
        return Redirect::route('home');
    }
}

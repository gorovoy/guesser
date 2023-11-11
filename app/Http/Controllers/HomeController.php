<?php

namespace App\Http\Controllers;

use App\Services\RandomBooleanGeneratorService;
use App\Services\RandomQuestionGeneratorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

use function Termwind\render;

class HomeController extends Controller
{
    public function index(Request $request, RandomQuestionGeneratorService $randomQuestionGeneratorService)
    {
        $view = $randomQuestionGeneratorService->generate();
        
        $question = view($view)->render();
        
        return view('home.index', ['question' => $question]);
    }
    
    public function check(Request $request, RandomBooleanGeneratorService $randomBooleanGeneratorService)
    {
        $answer = $randomBooleanGeneratorService->generate();
        
        if ($answer) {
            $class = 'alert-success';
            $route = 'success';
            $message = 'success';
        } else {
            $class = 'alert-danger';
            $route = 'reject';
            $message = 'reject';
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

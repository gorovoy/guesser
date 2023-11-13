<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Models\Question;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // get all the sharks
        $questions = Question::all();
        
        
        
        return view('question.index', compact('questions'));
        
        // load the view and pass the sharks
//        return View::make('sharks.index')
//            ->with('sharks', $sharks);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('question.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuestionRequest $request)
    {
        Question::create([
            'name' => $request->name
        ]);
        
        Session::flash('message', 'Question Created');
        Session::flash('alert-class', 'alert-success');
        
        return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
        
        dd('show');
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
        return view('question.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        //
        
        $question->name = $request->name;
        $question->save();
        
        Session::flash('message', 'Question Updated');
        Session::flash('alert-class', 'alert-success');
        
        return redirect()->route('questions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();
        
        Session::flash('message', 'Question Deleted');
        Session::flash('alert-class', 'alert-success');
        
        return redirect()->route('questions.index');
    }
}

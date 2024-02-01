<?php

namespace App\Http\Controllers;

use App\Models\feedBack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('feedback');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedFeedback = $request->validate([
            'answer1'=>'required',
            'answer2'=>'required',
            'answer3'=>'required',
            'answer4'=>'required'
        ]);

        $feedBack = new Feedback();
        $feedBack->answer1=$validatedFeedback['answer1'];
        $feedBack->answer2=$validatedFeedback['answer2'];
        $feedBack->answer3=$validatedFeedback['answer3'];
        $feedBack->answer4=$validatedFeedback['answer4'];
        $feedBack->save();

        return view('feedBackSubmitPage');
    }

    /**
     * Display the specified resource.
     */
    public function show(feedBack $feedBack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(feedBack $feedBack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, feedBack $feedBack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(feedBack $feedBack)
    {
        //
    }
}

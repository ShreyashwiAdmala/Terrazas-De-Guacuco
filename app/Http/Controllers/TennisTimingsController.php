<?php

namespace App\Http\Controllers;

use App\Models\TennisTimings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TennisTimingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('TennisManagerServices.tennisTimings.tennisTimings');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('TennisManagerServices.tennisTimings.createTennisTimings');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedTennisTiming = $request->validate([
            'name'=>'required|unique:tennis_timings',
            'data'=>'required',
        ]);

        $tennisTimings = new TennisTimings();
        $tennisTimings->name=$validatedTennisTiming['name'];
        $tennisTimings->data=$validatedTennisTiming['data'];
        $tennisTimings->save();

        $tennisTimingsData = DB::select('select * from tennis_timings');
        return view('TennisManagerServices.tennisTimings.tennisTimings',['tennisTimings'=>$tennisTimingsData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(TennisTimings $tennisTimings)
    {
        $tennisTimings = DB::select('select * from tennis_timings');
        return view('TennisManagerServices.tennisTimings.tennisTimings',['tennisTimings'=>$tennisTimings]);
    }

    public function showTimingsResident(TennisTimings $tennisTimings){
        $tennisTimings = DB::select('select * from tennis_timings');
        return view('ResidentServices.tennisTimings',['tennisTimings'=>$tennisTimings]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $name =  $request->name;
        $data = $request->data;
        return view('TennisManagerServices.tennisTimings.editTennisTimings',['name'=>$name,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TennisTimings $tennisTimings)
    {
        $request->validate([
            'name'=>'required',
            'data'=>'required',
        ]);

        $name = $request->input('name');
        $data = $request->input('data');
    
        $query = DB::select('update tennis_timings set data = ? where name = ?',[$data,$name]);
        $tennisTimings = DB::select('select * from tennis_timings');
        return view('TennisManagerServices.tennisTimings.tennisTimings',['tennisTimings'=>$tennisTimings]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $name=$request->name;
        $query=DB::select('delete from tennis_timings where name = ?',[$name]);
        $tennisTimings = DB::select('select * from tennis_timings');
        return view('TennisManagerServices.tennisTimings.tennisTimings',['tennisTimings'=>$tennisTimings]);
    }
}

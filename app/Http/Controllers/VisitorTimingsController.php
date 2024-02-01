<?php

namespace App\Http\Controllers;

use App\Models\visitorTimings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorTimingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('VisitorManagerServices.visitorTimings.visitorTimings');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('VisitorManagerServices.visitorTimings.createVisitorTimings');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedVisitorTiming = $request->validate([
            'name'=>'required|unique:visitor_timings',
            'data'=>'required',
        ]);

        $visitorTimings = new VisitorTimings();
        $visitorTimings->name=$validatedVisitorTiming['name'];
        $visitorTimings->data=$validatedVisitorTiming['data'];
        $visitorTimings->save();

        $visitorTimingsData = DB::select('select * from visitor_timings');
        return view('VisitorManagerServices.visitorTimings.visitorTimings',['visitorTimings'=>$visitorTimingsData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(visitorTimings $visitorTimings)
    {
        $visitorTimings = DB::select('select * from visitor_timings');
        return view('VisitorManagerServices.visitorTimings.visitorTimings',['visitorTimings'=>$visitorTimings]);
    }

    public function showTimingsVisitor(VisitorTimings $visitorTimings){
        $visitorTimings = DB::select('select * from visitor_timings');
        return view('VisitorServices.visitorTimings',['visitorTimings'=>$visitorTimings]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $name =  $request->name;
        $data = $request->data;
        return view('VisitorManagerServices.visitorTimings.editVisitorTimings',['name'=>$name,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, visitorTimings $visitorTimings)
    {
        $request->validate([
            'name'=>'required',
            'data'=>'required',
        ]);

        $name = $request->input('name');
        $data = $request->input('data');
    
        $query = DB::select('update visitor_timings set data = ? where name = ?',[$data,$name]);
        $visitorTimings = DB::select('select * from visitor_timings');
        return view('VisitorManagerServices.visitorTimings.visitorTimings',['visitorTimings'=>$visitorTimings]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $name=$request->name;
        $query=DB::select('delete from visitor_timings where name = ?',[$name]);
        $visitorTimings = DB::select('select * from visitor_timings');
        return view('VisitorManagerServices.visitorTimings.visitorTimings',['visitorTimings'=>$visitorTimings]);
    }
}

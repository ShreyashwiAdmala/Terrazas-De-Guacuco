<?php

namespace App\Http\Controllers;

use App\Models\ManageTimings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageTimingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('SecurityManagerServices.manageTimings');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $timings = DB::select('select * from manage_timings');
        return view('SecurityManagerServices.createManageTimings',['timings'=>$timings]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedTiming = $request->validate([
            'name'=>'required',
            'emailId'=>'required|unique:manage_timings',
            'location'=>'required',
            'schedule'=>'required',
            'shift'=>'required',
        ]);

        $timings = new ManageTimings();
        $timings->name=$validatedTiming['name'];
        $timings->emailId=$validatedTiming['emailId'];
        $timings->location=$validatedTiming['location'];
        $timings->schedule=$validatedTiming['schedule'];
        $timings->shift=$validatedTiming['shift'];
        $timings->save();

        $timingsData = DB::select('select * from manage_timings');
        return view('SecurityManagerServices.manageTimings',['timings'=>$timingsData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ManageTimings $manageTimings)
    {
        $timingsData = DB::select('select * from manage_timings');
        return view('SecurityManagerServices.manageTimings',['timings'=>$timingsData]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $name =  $request->name;
        $emailId = $request->emailId;
        $location = $request->location;
        $schedule = $request->schedule;
        $shift = $request->shift;
        return view('SecurityManagerServices.editManageTimings',['name'=>$name,'emailId'=>$emailId,'location'=>$location,'schedule'=>$schedule,'shift'=>$shift]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ManageTimings $manageTimings)
    {
        $request->validate([
            'name'=>'required',
            'emailId'=>'required',
            'location'=>'required',
            'schedule'=>'required',
            'shift'=>'required'
        ]);

        $name = $request->input('name');
        $emailId = $request->input('emailId');
        $location = $request->input('location');
        $schedule = $request->input('schedule');
        $shift = $request->input('shift');
    
        $query = DB::select('update manage_timings set location = ?, schedule = ?, shift = ? where emailId = ?',[$location,$schedule,$shift,$emailId]);
        $timingsData = DB::select('select * from manage_timings');
        return view('SecurityManagerServices.manageTimings',['timings'=>$timingsData]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $name=$request->name;
        $emailId=$request->emailId;
        $location=$request->location;
        $schedule=$request->schedule;
        $shift=$request->shift;
        $query=DB::select('delete from manage_timings where emailId = ?',[$emailId]);
        $timingsData = DB::select('select * from manage_timings');
        return view('SecurityManagerServices.manageTimings',['timings'=>$timingsData]);
    }
}

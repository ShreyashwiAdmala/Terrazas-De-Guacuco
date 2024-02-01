<?php

namespace App\Http\Controllers;

use App\Models\TennisEvents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TennisEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('TennisManagerServices.tennisEvents.tennisEvents');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('TennisManagerServices.tennisEvents.createTennisEvents');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedTennisEvent = $request->validate([
            'tennisEvents'=>'required',
            'eventId'=>'required|unique:tennis_events',
            'matchDate'=>'required',
            'time'=>'required',
            'status'=>'required',
        ]);

        $TennisEvents = new TennisEvents();
        $TennisEvents->tennisEvents=$validatedTennisEvent['tennisEvents'];
        $TennisEvents->eventId=$validatedTennisEvent['eventId'];
        $TennisEvents->matchDate=$validatedTennisEvent['matchDate'];
        $TennisEvents->time=$validatedTennisEvent['time'];
        $TennisEvents->status=$validatedTennisEvent['status'];
        $TennisEvents->save();

        $TennisEventsData = DB::select('select * from tennis_events');
        return view('TennisManagerServices.tennisEvents.tennisEvents',['tennisEvents'=>$TennisEventsData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(TennisEvents $tennisEvents)
    {
        $tennisEvents = DB::select('select * from tennis_events');
        return view('TennisManagerServices.tennisEvents.tennisEvents',['tennisEvents'=>$tennisEvents]);
    }

    public function showReport(TennisEvents $tennisEvents)
    {
        $tennisEvents = DB::select('select * from tennis_events');
        return view('TennisManagerServices.tennisManagerReport',['tennisEvents'=>$tennisEvents]);
    }

    public function showResidentEvents(TennisEvents $tennisEvents)
    {
        $tennisEvents = DB::select('select * from tennis_events');
        return view('ResidentServices.tennisSubcriptions',['tennisEvents'=>$tennisEvents]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $tennisEvents =  $request->tennisEvents;
        $eventId = $request->eventId;
        $matchDate = $request->matchDate;
        $time = $request->time;
        $status = $request->status;
        return view('TennisManagerServices.tennisEvents.editTennisEvents',['tennisEvents'=>$tennisEvents,'eventId'=>$eventId,'matchDate'=>$matchDate,'time'=>$time,'status'=>$status]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TennisEvents $tennisEvents)
    {
        $request->validate([
            'tennisEvents'=>'required',
            'matchDate'=>'required',
            'time'=>'required',
            'status'=>'required'
        ]);

        $tennisEvents = $request->input('tennisEvents');
        $eventId = $request->input('eventId');
        $matchDate = $request->input('matchDate');
        $time = $request->input('time');
        $status = $request->input('status');
    
        $query = DB::select('update tennis_events set tennisEvents = ?, matchDate = ?, time = ?, status = ? where eventId = ?',[$tennisEvents,$matchDate,$time,$status,$eventId]);
        $tennisEvents = DB::select('select * from tennis_events');
        return view('TennisManagerServices.tennisEvents.tennisEvents',['tennisEvents'=>$tennisEvents]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $eventId=$request->eventId;
        $query=DB::select('delete from tennis_events where eventId = ?',[$eventId]);
        $tennisEvents = DB::select('select * from tennis_events');
        return view('TennisManagerServices.tennisEvents.tennisEvents',['tennisEvents'=>$tennisEvents]);
    }
}

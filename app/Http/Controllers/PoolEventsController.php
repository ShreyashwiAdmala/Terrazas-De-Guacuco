<?php

namespace App\Http\Controllers;

use App\Models\PoolEvents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoolEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('PoolManagerServices.poolEvents.poolEvents');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('PoolManagerServices.poolEvents.createPoolEvents');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedPoolEvent = $request->validate([
            'poolEvents'=>'required',
            'eventId'=>'required|unique:pool_events',
            'matchDate'=>'required',
            'time'=>'required',
            'status'=>'required',
        ]);

        $PoolEvents = new PoolEvents();
        $PoolEvents->poolEvents=$validatedPoolEvent['poolEvents'];
        $PoolEvents->eventId=$validatedPoolEvent['eventId'];
        $PoolEvents->matchDate=$validatedPoolEvent['matchDate'];
        $PoolEvents->time=$validatedPoolEvent['time'];
        $PoolEvents->status=$validatedPoolEvent['status'];
        $PoolEvents->save();

        $poolEventsData = DB::select('select * from pool_events');
        return view('PoolManagerServices.poolEvents.poolEvents',['poolEvents'=>$poolEventsData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PoolEvents $poolEvents)
    {
        $poolEvents = DB::select('select * from pool_events');
        return view('PoolManagerServices.poolEvents.poolEvents',['poolEvents'=>$poolEvents]);
    }

    public function showReport(PoolEvents $poolEvents)
    {
        $poolEvents = DB::select('select * from pool_events');
        return view('PoolManagerServices.poolManagerReport',['poolEvents'=>$poolEvents]);
    }

    public function showResidentEvents(PoolEvents $poolEvents)
    {
        $poolEvents = DB::select('select * from pool_events');
        return view('ResidentServices.poolSubcription',['poolEvents'=>$poolEvents]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $poolEvents =  $request->poolEvents;
        $eventId = $request->eventId;
        $matchDate = $request->matchDate;
        $time = $request->time;
        $status = $request->status;
        return view('PoolManagerServices.poolEvents.editPoolEvents',['poolEvents'=>$poolEvents,'eventId'=>$eventId,'matchDate'=>$matchDate,'time'=>$time,'status'=>$status]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'poolEvents'=>'required',
            'matchDate'=>'required',
            'time'=>'required',
            'status'=>'required'
        ]);

        $poolEvents = $request->input('poolEvents');
        $eventId = $request->input('eventId');
        $matchDate = $request->input('matchDate');
        $time = $request->input('time');
        $status = $request->input('status');
    
        $query = DB::select('update pool_events set poolEvents = ?, matchDate = ?, time = ?, status = ? where eventId = ?',[$poolEvents,$matchDate,$time,$status,$eventId]);
        $poolEvents = DB::select('select * from pool_events');
        return view('PoolManagerServices.poolEvents.poolEvents',['poolEvents'=>$poolEvents]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $eventId=$request->eventId;
        $query=DB::select('delete from pool_events where eventId = ?',[$eventId]);
        $poolEvents = DB::select('select * from pool_events');
        return view('PoolManagerServices.poolEvents.poolEvents',['poolEvents'=>$poolEvents]);
    }
}

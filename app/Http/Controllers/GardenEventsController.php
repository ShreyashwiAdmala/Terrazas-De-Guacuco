<?php

namespace App\Http\Controllers;

use App\Models\GardenEvents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GardenEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('GardenManagerServices.gardenEvents.gardenEvents');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('GardenManagerServices.gardenEvents.createGardenEvents');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedGardenEvent = $request->validate([
            'gardenEvents'=>'required',
            'eventId'=>'required|unique:garden_events',
            'matchDate'=>'required',
            'time'=>'required',
            'status'=>'required',
        ]);

        $GardenEvents = new GardenEvents();
        $GardenEvents->gardenEvents=$validatedGardenEvent['gardenEvents'];
        $GardenEvents->eventId=$validatedGardenEvent['eventId'];
        $GardenEvents->matchDate=$validatedGardenEvent['matchDate'];
        $GardenEvents->time=$validatedGardenEvent['time'];
        $GardenEvents->status=$validatedGardenEvent['status'];
        $GardenEvents->save();

        $gardenEventsData = DB::select('select * from garden_events');
        return view('GardenManagerServices.gardenEvents.gardenEvents',['gardenEvents'=>$gardenEventsData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(GardenEvents $gardenEvents)
    {
        $gardenEvents = DB::select('select * from garden_events');
        return view('GardenManagerServices.gardenEvents.gardenEvents',['gardenEvents'=>$gardenEvents]);
    }

    public function showResidentEvents(GardenEvents $gardenEvents)
    {
        $gardenEvents = DB::select('select * from garden_events');
        return view('ResidentServices.gardenSubcription',['gardenEvents'=>$gardenEvents]);
    }

    public function showReport()
    {
        $gardenEvents = DB::select('select * from garden_events');
        return view('GardenManagerServices.gardenManagerReport',['gardenEvents'=>$gardenEvents]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $gardenEvents =  $request->gardenEvents;
        $eventId = $request->eventId;
        $matchDate = $request->matchDate;
        $time = $request->time;
        $status = $request->status;
        return view('GardenManagerServices.gardenEvents.editGardenEvents',['gardenEvents'=>$gardenEvents,'eventId'=>$eventId,'matchDate'=>$matchDate,'time'=>$time,'status'=>$status]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GardenEvents $gardenEvents)
    {
        $request->validate([
            'gardenEvents'=>'required',
            'matchDate'=>'required',
            'time'=>'required',
            'status'=>'required'
        ]);

        $gardenEvents = $request->input('gardenEvents');
        $eventId = $request->input('eventId');
        $matchDate = $request->input('matchDate');
        $time = $request->input('time');
        $status = $request->input('status');
    
        $query = DB::select('update garden_events set gardenEvents = ?, matchDate = ?, time = ?, status = ? where eventId = ?',[$gardenEvents,$matchDate,$time,$status,$eventId]);
        $gardenEvents = DB::select('select * from garden_events');
        return view('GardenManagerServices.gardenEvents.gardenEvents',['gardenEvents'=>$gardenEvents]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $eventId=$request->eventId;
        $query=DB::select('delete from garden_events where eventId = ?',[$eventId]);
        $gardenEvents = DB::select('select * from garden_events');
        return view('GardenManagerServices.gardenEvents.gardenEvents',['gardenEvents'=>$gardenEvents]);
    }
}

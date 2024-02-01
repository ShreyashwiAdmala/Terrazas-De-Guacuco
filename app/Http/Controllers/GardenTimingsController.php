<?php

namespace App\Http\Controllers;

use App\Models\GardenTimings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GardenTimingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('GardenManagerServices.gardenTimings.gardenTimings');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('GardenManagerServices.gardenTimings.createGardenTimings');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedGardenTiming = $request->validate([
            'name'=>'required|unique:garden_timings',
            'data'=>'required',
        ]);

        $gardenTimings = new GardenTimings();
        $gardenTimings->name=$validatedGardenTiming['name'];
        $gardenTimings->data=$validatedGardenTiming['data'];
        $gardenTimings->save();

        $gardenTimingsData = DB::select('select * from garden_timings');
        return view('GardenManagerServices.gardenTimings.gardenTimings',['gardenTimings'=>$gardenTimingsData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(GardenTimings $gardenTimings)
    {
        $gardenTimings = DB::select('select * from garden_timings');
        return view('GardenManagerServices.gardenTimings.gardenTimings',['gardenTimings'=>$gardenTimings]);
    }

    public function showTimingsResident(GardenTimings $gardenTimings){
        $gardenTimings = DB::select('select * from garden_timings');
        return view('ResidentServices.gardenTimings',['gardenTimings'=>$gardenTimings]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $name =  $request->name;
        $data = $request->data;
        return view('GardenManagerServices.gardenTimings.editGardenTimings',['name'=>$name,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GardenTimings $gardenTimings)
    {
        $request->validate([
            'name'=>'required',
            'data'=>'required',
        ]);

        $name = $request->input('name');
        $data = $request->input('data');
    
        $query = DB::select('update garden_timings set data = ? where name = ?',[$data,$name]);
        $gardenTimings = DB::select('select * from garden_timings');
        return view('GardenManagerServices.gardenTimings.gardenTimings',['gardenTimings'=>$gardenTimings]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $name=$request->name;
        $query=DB::select('delete from garden_timings where name = ?',[$name]);
        $gardenTimings = DB::select('select * from garden_timings');
        return view('GardenManagerServices.gardenTimings.gardenTimings',['gardenTimings'=>$gardenTimings]);
    }
}

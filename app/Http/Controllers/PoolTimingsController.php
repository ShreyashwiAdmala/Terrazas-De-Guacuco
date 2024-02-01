<?php

namespace App\Http\Controllers;

use App\Models\PoolTimings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoolTimingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('PoolManagerServices.poolTimings.poolTimings');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('PoolManagerServices.poolTimings.createPoolTimings');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedPoolTiming = $request->validate([
            'name'=>'required|unique:pool_timings',
            'data'=>'required',
        ]);

        $poolTimings = new PoolTimings();
        $poolTimings->name=$validatedPoolTiming['name'];
        $poolTimings->data=$validatedPoolTiming['data'];
        $poolTimings->save();

        $poolTimingsData = DB::select('select * from pool_timings');
        return view('PoolManagerServices.poolTimings.poolTimings',['poolTimings'=>$poolTimingsData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PoolTimings $poolTimings)
    {
        $poolTimings = DB::select('select * from pool_timings');
        return view('PoolManagerServices.poolTimings.poolTimings',['poolTimings'=>$poolTimings]);
    }

    public function showTimingsResident(PoolTimings $poolTimings){
        $poolTimings = DB::select('select * from pool_timings');
        return view('ResidentServices.poolTimings',['poolTimings'=>$poolTimings]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $name =  $request->name;
        $data = $request->data;
        return view('PoolManagerServices.poolTimings.editPoolTimings',['name'=>$name,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PoolTimings $poolTimings)
    {
        $request->validate([
            'name'=>'required',
            'data'=>'required',
        ]);

        $name = $request->input('name');
        $data = $request->input('data');
    
        $query = DB::select('update pool_timings set data = ? where name = ?',[$data,$name]);
        $poolTimings = DB::select('select * from pool_timings');
        return view('PoolManagerServices.poolTimings.poolTimings',['poolTimings'=>$poolTimings]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $name=$request->name;
        $query=DB::select('delete from pool_timings where name = ?',[$name]);
        $poolTimings = DB::select('select * from pool_timings');
        return view('PoolManagerServices.poolTimings.poolTimings',['poolTimings'=>$poolTimings]);
    }
}

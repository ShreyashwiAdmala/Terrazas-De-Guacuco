<?php

namespace App\Http\Controllers;

use App\Models\TownHouseServicesRequested;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TownHouseServicesRequestedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $TownHouseServicesRequestedData = DB::select('select * from town_house_services_requesteds');
        return view('ApartmentManagerServices.TownHouse.servicesRequested',['TownHouseServicesRequested'=>$TownHouseServicesRequestedData]);
        // return view('ApartmentManagerServices.TownHouse.servicesRequested');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ApartmentManagerServices.TownHouse.createServicesRequested');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedTownHouseServicesRequested = $request->validate([
            'servicesRequested'=>'required',
            'residentName'=>'required',
            'emailId'=>'required|unique:town_house_services_requesteds', 
            'apartmentNumber'=>'required',
            'status'=>'required'
        ]);

        $TownHouseServicesRequested = new TownHouseServicesRequested();
        $TownHouseServicesRequested->servicesRequested=$validatedTownHouseServicesRequested['servicesRequested'];
        $TownHouseServicesRequested->residentName=$validatedTownHouseServicesRequested['residentName'];
        $TownHouseServicesRequested->emailId=$validatedTownHouseServicesRequested['emailId'];
        $TownHouseServicesRequested->apartmentNumber=$validatedTownHouseServicesRequested['apartmentNumber'];
        $TownHouseServicesRequested->status=$validatedTownHouseServicesRequested['status'];
        $TownHouseServicesRequested->save();

        $TownHouseServicesRequestedData = DB::select('select * from town_house_services_requesteds');
        return view('ApartmentManagerServices.TownHouse.servicesRequested',['TownHouseServicesRequested'=>$TownHouseServicesRequestedData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(TownHouseServicesRequested $TownHouseServicesRequested)
    {
        $TownHouseServicesRequested = DB::select('select * from town_house_services_requesteds');
        return view('ApartnemtManagerServices.TownHouse.servicesRequested',['TownHouseServicesRequested'=>$TownHouseServicesRequested]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $servicesRequested= $request->servicesRequested;
        $residentName = $request->residentName;
        $emailId = $request->emailId;
        $apartmentNumber = $request->apartmentNumber;
        $status = $request->status;
        
        return view('ApartmentManagerServices.TownHouse.editServicesRequested',['servicesRequested'=>$servicesRequested,'residentName'=>$residentName,'emailId'=>$emailId,'apartmentNumber'=>$apartmentNumber,'status'=>$status]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TownHouseServicesRequested $TownHouseServicesRequested)
    {
        $request->validate([
            'servicesRequested'=>'required',
            'residentName'=>'required',
            'emailId'=>'required',
            'apartmentNumber'=>'required',
            'status'=>'required'
        ]);
        $servicesRequested= $request->input('servicesRequested');
        $residentName = $request->input('residentName');
        $emailId = $request->input('emailId');
        $apartmentNumber = $request->input('apartmentNumber');
        $status = $request->input('status');
       
        $query = DB::select('update town_house_services_requesteds set servicesRequested=?, residentName = ?, apartmentNumber= ?, status= ? where emailId = ?',[$servicesRequested,$residentName,$apartmentNumber,$status,$emailId]);
        $TownHouseServicesRequested = DB::select('select * from town_house_services_requesteds');
        return view('ApartmentManagerServices.TownHouse.servicesRequested',['TownHouseServicesRequested'=>$TownHouseServicesRequested]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $emailId = $request->emailId;
        $query=DB::select('delete from town_house_services_requesteds where emailId = ?',[$emailId]);
        $TownHouseServicesRequested = DB::select('select * from town_house_services_requesteds');
        return view('ApartmentManagerServices.TownHouse.servicesRequested',['TownHouseServicesRequested'=>$TownHouseServicesRequested]);
    }
}


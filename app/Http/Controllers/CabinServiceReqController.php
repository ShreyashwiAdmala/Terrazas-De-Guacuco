<?php

namespace App\Http\Controllers;

use App\Models\cabinServicesReq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CabinServiceReqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $TownHouseServicesRequestedData = DB::select('select * from cabin_services_reqs');
        return view('ApartmentManagerServices.Cabin.servicesRequested',['CabinServicesRequested'=>$TownHouseServicesRequestedData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ApartmentManagerServices.Cabin.createServicesReq');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedTownHouseServicesRequested = $request->validate([
            'servicesRequested'=>'required',
            'residentName'=>'required',
            'emailId'=>'required|unique:cabin_services_reqs', 
            'apartmentNumber'=>'required',
            'status'=>'required'
        ]);

        $TownHouseServicesRequested = new CabinServicesReq();
        $TownHouseServicesRequested->servicesRequested=$validatedTownHouseServicesRequested['servicesRequested'];
        $TownHouseServicesRequested->residentName=$validatedTownHouseServicesRequested['residentName'];
        $TownHouseServicesRequested->emailId=$validatedTownHouseServicesRequested['emailId'];
        $TownHouseServicesRequested->apartmentNumber=$validatedTownHouseServicesRequested['apartmentNumber'];
        $TownHouseServicesRequested->status=$validatedTownHouseServicesRequested['status'];
        $TownHouseServicesRequested->save();

        $TownHouseServicesRequestedData = DB::select('select * from cabin_services_reqs');
        return view('ApartmentManagerServices.Cabin.servicesRequested',['CabinServicesRequested'=>$TownHouseServicesRequestedData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(cabinServicesReq $cabinServicesReq)
    {
        $TownHouseServicesRequested = DB::select('select * from cabin_services_reqs');
        return view('ApartmentManagerServices.Cabin.servicesRequested',['CabinServicesRequested'=>$TownHouseServicesRequested]);
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
        
        return view('ApartmentManagerServices.Cabin.editServicesReq',['servicesRequested'=>$servicesRequested,'residentName'=>$residentName,'emailId'=>$emailId,'apartmentNumber'=>$apartmentNumber,'status'=>$status]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cabinServicesReq $cabinServicesReq)
    {
        $request->validate([
            'servicesRequested'=>'required',
            'residentName'=>'required',
            'apartmentNumber'=>'required',
            'status'=>'required'
        ]);
        $emailId = $request->emailId;
        $servicesRequested= $request->input('servicesRequested');
        $residentName = $request->input('residentName');
        $apartmentNumber = $request->input('apartmentNumber');
        $status = $request->input('status');
       
        $query = DB::select('update cabin_services_reqs set servicesRequested=?, residentName = ?, apartmentNumber= ?, status= ? where emailId = ?',[$servicesRequested,$residentName,$apartmentNumber,$status,$emailId]);
        $TownHouseServicesRequested = DB::select('select * from cabin_services_reqs');
        return view('ApartmentManagerServices.Cabin.servicesRequested',['CabinServicesRequested'=>$TownHouseServicesRequested]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $emailId = $request->emailId;
        $query=DB::select('delete from cabin_services_reqs where emailId = ?',[$emailId]);
        $TownHouseServicesRequested = DB::select('select * from cabin_services_reqs');
        return view('ApartmentManagerServices.Cabin.servicesRequested',['CabinServicesRequested'=>$TownHouseServicesRequested]);
    }
}

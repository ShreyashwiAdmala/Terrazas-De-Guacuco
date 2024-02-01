<?php

namespace App\Http\Controllers;

use App\Models\studioServicesReq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudioServicesReqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $TownHouseServicesRequestedData = DB::select('select * from studio_services_reqs');
        return view('ApartmentManagerServices.Studio.servicesRequested',['TownHouseServicesRequested'=>$TownHouseServicesRequestedData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ApartmentManagerServices.Studio.createServicesRequested');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedTownHouseServicesRequested = $request->validate([
            'servicesRequested'=>'required',
            'residentName'=>'required',
            'emailId'=>'required|unique:studio_services_reqs', 
            'apartmentNumber'=>'required',
            'status'=>'required'
        ]);

        $TownHouseServicesRequested = new StudioServicesReq();
        $TownHouseServicesRequested->servicesRequested=$validatedTownHouseServicesRequested['servicesRequested'];
        $TownHouseServicesRequested->residentName=$validatedTownHouseServicesRequested['residentName'];
        $TownHouseServicesRequested->emailId=$validatedTownHouseServicesRequested['emailId'];
        $TownHouseServicesRequested->apartmentNumber=$validatedTownHouseServicesRequested['apartmentNumber'];
        $TownHouseServicesRequested->status=$validatedTownHouseServicesRequested['status'];
        $TownHouseServicesRequested->save();

        $TownHouseServicesRequestedData = DB::select('select * from studio_services_reqs');
        return view('ApartmentManagerServices.Studio.servicesRequested',['TownHouseServicesRequested'=>$TownHouseServicesRequestedData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(studioServicesReq $studioServicesReq)
    {
        $TownHouseServicesRequested = DB::select('select * from studio_services_reqs');
        return view('ApartnemtManagerServices.Studio.servicesRequested',['TownHouseServicesRequested'=>$TownHouseServicesRequested]);
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
        
        return view('ApartmentManagerServices.Studio.editServicesRequested',['servicesRequested'=>$servicesRequested,'residentName'=>$residentName,'emailId'=>$emailId,'apartmentNumber'=>$apartmentNumber,'status'=>$status]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, studioServicesReq $studioServicesReq)
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
       
        $query = DB::select('update studio_services_reqs set servicesRequested=?, residentName = ?, apartmentNumber= ?, status= ? where emailId = ?',[$servicesRequested,$residentName,$apartmentNumber,$status,$emailId]);
        $TownHouseServicesRequested = DB::select('select * from studio_services_reqs');
        return view('ApartmentManagerServices.Studio.servicesRequested',['TownHouseServicesRequested'=>$TownHouseServicesRequested]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $emailId = $request->emailId;
        $query=DB::select('delete from studio_services_reqs where emailId = ?',[$emailId]);
        $TownHouseServicesRequested = DB::select('select * from studio_services_reqs');
        return view('ApartmentManagerServices.Studio.servicesRequested',['TownHouseServicesRequested'=>$TownHouseServicesRequested]);
    }
}

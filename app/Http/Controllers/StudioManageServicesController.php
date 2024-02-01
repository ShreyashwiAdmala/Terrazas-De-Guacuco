<?php

namespace App\Http\Controllers;

use App\Models\studioManageServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudioManageServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $TownHouseManageServicesData = DB::select('select * from studio_manage_services');
        return view('ApartmentManagerServices.Studio.manageServices',['TownHouseManageServices'=>$TownHouseManageServicesData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ApartmentManagerServices.Studio.createManageServices');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedTownHouseManageServices = $request->validate([
            'serviceType'=>'required',
            'serviceHandlerName'=>'required',
            'emailId'=>'required|unique:studio_manage_services', 
            
        ]);

        $TownHouseManageServices = new StudioManageServices();
        $TownHouseManageServices->serviceType=$validatedTownHouseManageServices['serviceType'];
        $TownHouseManageServices->serviceHandlerName=$validatedTownHouseManageServices['serviceHandlerName'];
        $TownHouseManageServices->emailId=$validatedTownHouseManageServices['emailId'];
        $TownHouseManageServices->save();

        $TownHouseManageServicesData = DB::select('select * from studio_manage_services');
        return view('ApartmentManagerServices.Studio.manageServices',['TownHouseManageServices'=>$TownHouseManageServicesData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(studioManageServices $studioManageServices)
    {
        $TownHouseManageServices = DB::select('select * from studio_manage_services');
        return view('ApartnemtManagerServices.Studio.manageServices',['TownHouseManageServices'=>$TownHouseManageServices]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $serviceType= $request->serviceType;
        $serviceHandlerName = $request->serviceHandlerName;
        $emailId = $request->emailId;
        
        return view('ApartmentManagerServices.Studio.editManageServices',['serviceType'=>$serviceType,'serviceHandlerName'=>$serviceHandlerName,'emailId'=>$emailId]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, studioManageServices $studioManageServices)
    {
        $request->validate([
            'serviceType'=>'required',
            'serviceHandler'=>'required',
            'emailId'=>'required',
        ]);
        $serviceType= $request->input('serviceType');
        $serviceHandlerName = $request->input('serviceHandlerName');
        $emailId = $request->input('emailId');
       
        $query = DB::select('update studio_manage_services set serviceType=?, serviceHandlerName = ? where emailId = ?',[$serviceType,$serviceHandlerName,$emailId]);
        $TownHouseManageServices = DB::select('select * from studio_manage_services');
        return view('ApartmentManagerServices.Studio.manageServices',['TownHouseManageServices'=>$TownHouseManageServices]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $emailId = $request->emailId;
        $query=DB::select('delete from studio_manage_services where emailId = ?',[$emailId]);
        $TownHouseManageServices = DB::select('select * from studio_manage_services');
        return view('ApartmentManagerServices.Studio.manageServices',['TownHouseManageServices'=>$TownHouseManageServices]);
    }
}

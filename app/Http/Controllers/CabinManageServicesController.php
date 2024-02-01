<?php

namespace App\Http\Controllers;

use App\Models\cabinManageServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CabinManageServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $TownHouseManageServicesData = DB::select('select * from cabin_manage_services');
        return view('ApartmentManagerServices.Cabin.manageServices',['CabinManageServices'=>$TownHouseManageServicesData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ApartmentManagerServices.Cabin.createManageServices');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedTownHouseManageServices = $request->validate([
            'serviceType'=>'required',
            'serviceHandlerName'=>'required',
            'emailId'=>'required|unique:cabin_manage_services', 
            
        ]);

        $TownHouseManageServices = new CabinManageServices();
        $TownHouseManageServices->serviceType=$validatedTownHouseManageServices['serviceType'];
        $TownHouseManageServices->serviceHandlerName=$validatedTownHouseManageServices['serviceHandlerName'];
        $TownHouseManageServices->emailId=$validatedTownHouseManageServices['emailId'];
        $TownHouseManageServices->save();

        $TownHouseManageServicesData = DB::select('select * from cabin_manage_services');
        return view('ApartmentManagerServices.Cabin.manageServices',['CabinManageServices'=>$TownHouseManageServicesData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(cabinManageServices $cabinManageServices)
    {
        $TownHouseManageServices = DB::select('select * from cabin_manage_services');
        return view('ApartmentManagerServices.Cabin.manageServices',['CabinManageServices'=>$TownHouseManageServices]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $serviceType= $request->serviceType;
        $serviceHandlerName = $request->serviceHandlerName;
        $emailId = $request->emailId;
        
        return view('ApartmentManagerServices.Cabin.editManageServices',['serviceType'=>$serviceType,'serviceHandlerName'=>$serviceHandlerName,'emailId'=>$emailId]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cabinManageServices $cabinManageServices)
    {
        $request->validate([
            'serviceType'=>'required',
            'serviceHandler'=>'required',
            'emailId'=>'required',
        ]);
        $serviceType= $request->input('serviceType');
        $serviceHandlerName = $request->input('serviceHandlerName');
        $emailId = $request->input('emailId');
       
        $query = DB::select('update cabin_manage_services set serviceType=?, serviceHandlerName = ? where emailId = ?',[$serviceType,$serviceHandlerName,$emailId]);
        $TownHouseManageServices = DB::select('select * from cabin_manage_services');
        return view('ApartmentManagerServices.Cabin.manageServices',['CabinManageServices'=>$TownHouseManageServices]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $emailId = $request->emailId;
        $query=DB::select('delete from cabin_manage_services where emailId = ?',[$emailId]);
        $TownHouseManageServices = DB::select('select * from cabin_manage_services');
        return view('ApartmentManagerServices.Cabin.manageServices',['CabinManageServices'=>$TownHouseManageServices]);
    }
}

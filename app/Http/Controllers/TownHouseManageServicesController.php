<?php

namespace App\Http\Controllers;
use App\Models\TownHouseManageServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TownHouseManageServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $TownHouseManageServicesData = DB::select('select * from town_house_manage_services');
        return view('ApartmentManagerServices.TownHouse.manageServices',['TownHouseManageServices'=>$TownHouseManageServicesData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ApartmentManagerServices.TownHouse.createManageServices');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedTownHouseManageServices = $request->validate([
            'serviceType'=>'required',
            'serviceHandlerName'=>'required',
            'emailId'=>'required|unique:town_house_manage_services', 
            
        ]);

        $TownHouseManageServices = new TownHouseManageServices();
        $TownHouseManageServices->serviceType=$validatedTownHouseManageServices['serviceType'];
        $TownHouseManageServices->serviceHandlerName=$validatedTownHouseManageServices['serviceHandlerName'];
        $TownHouseManageServices->emailId=$validatedTownHouseManageServices['emailId'];
        $TownHouseManageServices->save();

        $TownHouseManageServicesData = DB::select('select * from town_house_manage_services');
        return view('ApartmentManagerServices.TownHouse.manageServices',['TownHouseManageServices'=>$TownHouseManageServicesData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(TownHouseManageServices $TownHouseManageServices)
    {
        $TownHouseManageServices = DB::select('select * from town_house_manage_services');
        return view('ApartnemtManagerServices.TownHouse.manageServices',['TownHouseManageServices'=>$TownHouseManageServices]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $serviceType= $request->serviceType;
        $serviceHandlerName = $request->serviceHandlerName;
        $emailId = $request->emailId;
        
        return view('ApartmentManagerServices.TownHouse.editManageServices',['serviceType'=>$serviceType,'serviceHandlerName'=>$serviceHandlerName,'emailId'=>$emailId]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TownHouseManageServices $TownHouseManageServices)
    {
        $request->validate([
            'serviceType'=>'required',
            'serviceHandler'=>'required',
            'emailId'=>'required',
        ]);
        $serviceType= $request->input('serviceType');
        $serviceHandlerName = $request->input('serviceHandlerName');
        $emailId = $request->input('emailId');
       
        $query = DB::select('update town_house_manage_services set serviceType=?, serviceHandlerName = ? where emailId = ?',[$serviceType,$serviceHandlerName,$emailId]);
        $TownHouseManageServices = DB::select('select * from town_house_manage_services');
        return view('ApartmentManagerServices.TownHouse.manageServices',['TownHouseManageServices'=>$TownHouseManageServices]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $emailId = $request->emailId;
        $query=DB::select('delete from town_house_manage_services where emailId = ?',[$emailId]);
        $TownHouseManageServices = DB::select('select * from town_house_manage_services');
        return view('ApartmentManagerServices.TownHouse.manageServices',['TownHouseManageServices'=>$TownHouseManageServices]);
    }
}

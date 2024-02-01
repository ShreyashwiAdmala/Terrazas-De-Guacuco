<?php

namespace App\Http\Controllers;
use App\Models\visitorVehicleReg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorVehicleRegController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('VisitorServices.vehicleRegistration.vehicleRegistration');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('VisitorServices.vehicleRegistration.createVehicleRegistration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedRegVehicle = $request->validate([
            'make'=>'required',
            'model'=>'required',
            'licensePlate'=>'required|unique:visitor_vehicle_regs'
        ]);

        $emailId = session('user_email');
        $name = session('user_name');

        $regVehicle = new VisitorVehicleReg();
        $regVehicle->name= $name;
        $regVehicle->emailId=$emailId;
        $regVehicle->make=$validatedRegVehicle['make'];
        $regVehicle->model=$validatedRegVehicle['model'];
        $regVehicle->licensePlate=$validatedRegVehicle['licensePlate'];
        $regVehicle->save();

        
        $regVehicle = DB::select('select * from visitor_vehicle_regs where emailId = ?',[$emailId]);
        return view('VisitorServices.vehicleRegistration.vehicleRegistration',['regVehicle'=>$regVehicle]);
    }

    /**
     * Display the specified resource.
     */
    public function show(visitorVehicleReg $visitorVehicleReg)
    {
        $emailId = session('user_email');
        $regVehicle = DB::select('select * from visitor_vehicle_regs where emailId = ?',[$emailId]);
        return view('VisitorServices.vehicleRegistration.vehicleRegistration',['regVehicle'=>$regVehicle]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $make =  $request->make;
        $model = $request->model;
        $licensePlate = $request->licensePlate;
        return view('VisitorServices.vehicleRegistration.editVehicleRegistration',['make'=>$make,'model'=>$model,'licensePlate'=>$licensePlate]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, visitorVehicleReg $visitorVehicleReg)
    {
        $request->validate([
            'make'=>'required',
            'model'=>'required',
            'licensePlate'=>'required'
        ]);

        $make = $request->input('make');
        $model = $request->input('model');
        $licensePlate = $request->input('licensePlate');
    
        $query = DB::select('update visitor_vehicle_regs set make = ?, model = ? where licensePlate = ?',[$make,$model,$licensePlate]);
        $emailId = session('user_email');
        $regVehicle = DB::select('select * from visitor_vehicle_regs where emailId = ?',[$emailId]);
        return view('VisitorServices.vehicleRegistration.vehicleRegistration',['regVehicle'=>$regVehicle]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $licensePlate=$request->licensePlate;
        $query=DB::select('delete from visitor_vehicle_regs where licensePlate = ?',[$licensePlate]);

        $emailId = session('user_email');
        $regVehicle = DB::select('select * from visitor_vehicle_regs where emailId = ?',[$emailId]);
        
        return view('VisitorServices.vehicleRegistration.vehicleRegistration',['regVehicle'=>$regVehicle]);
    }
}

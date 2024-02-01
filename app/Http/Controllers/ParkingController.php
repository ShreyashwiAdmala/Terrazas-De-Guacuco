<?php

namespace App\Http\Controllers;

use App\Models\Parking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('BuildingManagerServices.parking');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('BuildingManagerServices.createParking');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedParking = $request->validate([
            'apartmentType'=>'required',
            'ownerName'=>'required',
            'email'=>'required', 
            'slotId'=>'required',
            'occupied'=>'required',
            'managerName'=>'required'
        ]);

        $Parking = new Parking();
        $Parking->apartmentType=$validatedParking['apartmentType'];
        $Parking->ownerName=$validatedParking['ownerName'];
        $Parking->email=$validatedParking['email'];
        $Parking->slotId=$validatedParking['slotId'];
        $Parking->occupied=$validatedParking['occupied'];
        $Parking->managerName=$validatedParking['managerName'];
        $Parking->save();

        $ParkingData = DB::select('select * from parkings');
        return view('BuildingManagerServices.parking',['Parking'=>$ParkingData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Parking $Parking)
    {
        $Parking = DB::select('select * from parkings');
        return view('BuildingManagerServices.parking',['Parking'=>$Parking]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $apartmentType = $request->apartmentType;
        $ownerName = $request->ownerName;
        $email=$request->email;
        $slotId=$request->slotId;
        $occupied=$request->occupied;
        $managerName=$request->managerName;
        return view('BuildingManagerServices.editParking',['apartmentType'=>$apartmentType,'ownerName'=>$ownerName,'email'=>$email,'slotId'=>$slotId,'occupied'=>$occupied,'managerName'=>$managerName]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Parking $Parking)
    {
        $request->validate([
            'apartmentType'=>'required',
            'ownerName'=>'required',
            'email'=>'required',
            'slotId'=>'required',
            'occupied'=>'required',
            'managerName'=>'required'
        ]);
        $apartmentType = $request->input('apartmentType');
        $ownerName = $request->input('ownerName');
        $email = $request->input('email');
        $slotId = $request->input('slotId');
        $occupied = $request->input('occupied');
        $managerName = $request->input('managerName');
       
        $query = DB::select('update parkings set apartmentType=?, ownerName = ?, slotId= ?, occupied = ?, managerName = ? where email = ?',[$apartmentType,$ownerName,$email,$slotId,$occupied,$managerName]);
        $Parking = DB::select('select * from parkings');
        return view('BuildingManagerServices.parking',['Parking'=>$Parking]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $email = $request->email;
        $query=DB::select('delete from parkings where email = ?',[$email]);
        $Parking = DB::select('select * from parkings');
        return view('BuildingManagerServices.parking',['Parking'=>$Parking]);
    }
}

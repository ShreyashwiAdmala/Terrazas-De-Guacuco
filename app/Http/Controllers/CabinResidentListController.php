<?php

namespace App\Http\Controllers;

use App\Models\CabinResidentList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CabinResidentListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $CabinResidentListData = DB::select('select * from cabin_resident_lists');
        return view('ApartmentManagerServices.Cabin.residentList',['CabinResidentList'=>$CabinResidentListData]);
        // return view('ApartmentManagerServices.Cabin.residentList');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ApartmentManagerServices.Cabin.createResidentList');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedCabinResidentList = $request->validate([
            'cabinNumber'=>'required',
            'roomNumber'=>'required',
            'occupied'=>'required',
            'residentName'=>'required',
            'emailId'=>'required|unique:cabin_resident_lists', 
            'leaseStartDate'=>'required',
            'leaseEndDate'=>'required'
        ]);

        $CabinResidentList = new CabinResidentList();
        $CabinResidentList->cabinNumber=$validatedCabinResidentList['cabinNumber'];
        $CabinResidentList->roomNumber=$validatedCabinResidentList['roomNumber'];
        $CabinResidentList->occupied=$validatedCabinResidentList['occupied'];
        $CabinResidentList->residentName=$validatedCabinResidentList['residentName'];
        $CabinResidentList->emailId=$validatedCabinResidentList['emailId'];
        $CabinResidentList->leaseStartDate=$validatedCabinResidentList['leaseStartDate'];
        $CabinResidentList->leaseEndDate=$validatedCabinResidentList['leaseEndDate'];
        $CabinResidentList->save();

        $CabinResidentListData = DB::select('select * from cabin_resident_lists');
        return view('ApartmentManagerServices.Cabin.residentList',['CabinResidentList'=>$CabinResidentListData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(CabinResidentList $CabinResidentList)
    {
        $CabinResidentList = DB::select('select * from Cabin_resident_lists');
        return view('ApartnemtManagerServices.Cabin.residentList',['CabinResidentList'=>$CabinResidentList]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $cabinNumber= $request->cabinNumber;
        $roomNumber = $request->roomNumber;
        $occupied=$request->occupied;
        $residentName=$request->residentName;
        $emailId=$request->emailId;
        $leaseStartDate=$request->leaseStartDate;
        $leaseEndDate=$request->leaseEndDate;
        
        return view('ApartmentManagerServices.Cabin.editResidentList',['cabinNumber'=>$cabinNumber,'roomNumber'=>$roomNumber,'occupied'=>$occupied,'residentName'=>$residentName,'emailId'=>$emailId,'leaseStartDate'=>$leaseStartDate,'leaseEndDate'=>$leaseEndDate]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CabinResidentList $CabinResidentList)
    {
        $request->validate([
            'cabinNumber'=>'required',
            'roomNumber'=> 'required',
            'occupied'=>'required',
            'residentName'=>'required',
            'emailId'=>'required',
            'leaseStartDate'=>'required',
            'leaseEndDate'=>'required'
        ]);
        $cabinNumber= $request->input('cabinNumber');
        $roomNumber = $request->input('roomNumber');
        $occupied=$request->input('occupied');
        $residentName=$request->input('residentName');
        $emailId=$request->input('emailId');
        $leaseStartDate=$request->input('leaseStartDate');
        $leaseEndDate=$request->input('leaseEndDate');
       
        $query = DB::select('update cabin_resident_lists set cabinNumber=?, roomNumber = ?, occupied = ?, residentName = ?, leaseStartDate= ?, leaseEndDate= ? where emailId = ?',[$cabinNumber,$roomNumber,$occupied,$residentName,$leaseStartDate,$leaseEndDate,$emailId]);
        $CabinResidentList = DB::select('select * from cabin_resident_lists');
        return view('ApartmentManagerServices.Cabin.residentList',['CabinResidentList'=>$CabinResidentList]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $emailId = $request->emailId;
        $query=DB::select('delete from cabin_resident_Lists where emailId = ?',[$emailId]);
        $CabinResidentList = DB::select('select * from cabin_resident_Lists');
        return view('ApartmentManagerServices.Cabin.residentList',['CabinResidentList'=>$CabinResidentList]);
    }
}

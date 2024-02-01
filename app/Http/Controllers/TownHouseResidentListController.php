<?php

namespace App\Http\Controllers;

use App\Models\TownHouseResidentList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TownHouseResidentListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $TownHouseResidentListData = DB::select('select * from town_house_resident_lists');
        return view('ApartmentManagerServices.TownHouse.residentList',['TownHouseResidentList'=>$TownHouseResidentListData]);
        // return view('ApartmentManagerServices.TownHouse.residentList');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ApartmentManagerServices.TownHouse.createResidentList');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedTownHouseResidentList = $request->validate([
            'townHouseNumber'=>'required',
            'roomNumber'=>'required',
            'occupied'=>'required',
            'residentName'=>'required',
            'emailId'=>'required|unique:town_house_resident_lists', 
            'leaseStartDate'=>'required',
            'leaseEndDate'=>'required'
        ]);

        $TownHouseResidentList = new TownHouseResidentList();
        $TownHouseResidentList->townHouseNumber=$validatedTownHouseResidentList['townHouseNumber'];
        $TownHouseResidentList->roomNumber=$validatedTownHouseResidentList['roomNumber'];
        $TownHouseResidentList->occupied=$validatedTownHouseResidentList['occupied'];
        $TownHouseResidentList->residentName=$validatedTownHouseResidentList['residentName'];
        $TownHouseResidentList->emailId=$validatedTownHouseResidentList['emailId'];
        $TownHouseResidentList->leaseStartDate=$validatedTownHouseResidentList['leaseStartDate'];
        $TownHouseResidentList->leaseEndDate=$validatedTownHouseResidentList['leaseEndDate'];
        $TownHouseResidentList->save();

        $TownHouseResidentListData = DB::select('select * from town_house_resident_lists');
        return view('ApartmentManagerServices.TownHouse.residentList',['TownHouseResidentList'=>$TownHouseResidentListData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(TownHouseResidentList $TownHouseResidentList)
    {
        $TownHouseResidentList = DB::select('select * from town_house_resident_lists');
        return view('ApartnemtManagerServices.TownHouse.residentList',['TownHouseResidentList'=>$TownHouseResidentList]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $townHouseNumber= $request->townHouseNumber;
        $roomNumber = $request->roomNumber;
        $occupied = $request->occupied;
        $residentName = $request->residentName;
        $emailId = $request->emailId;
        $leaseStartDate = $request->leaseStartDate;
        $leaseEndDate = $request->leaseEndDate;
        
        return view('ApartmentManagerServices.TownHouse.editResidentList',['townHouseNumber'=>$townHouseNumber,'roomNumber'=>$roomNumber,'occupied'=>$occupied,'residentName'=>$residentName,'emailId'=>$emailId,'leaseStartDate'=>$leaseStartDate,'leaseEndDate'=>$leaseEndDate]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TownHouseResidentList $TownHouseResidentList)
    {
        $request->validate([
            'townHouseNumber'=>'required',
            'roomNumber'=> 'required',
            'occupied'=>'required',
            'residentName'=>'required',
            'emailId'=>'required',
            'leaseStartDate'=>'required',
            'leaseEndDate'=>'required'
        ]);
        $townHouseNumber= $request->input('townHouseNumber');
        $roomNumber = $request->input('roomNumber');
        $occupied = $request->input('occupied');
        $residentName = $request->input('residentName');
        $emailId = $request->input('emailId');
        $leaseStartDate = $request->input('leaseStartDate');
        $leaseEndDate = $request->input('leaseEndDate');
       
        $query = DB::select('update town_house_resident_lists set townHouseNumber=?, roomNumber = ?, occupied = ?, residentName = ?, leaseStartDate= ?, leaseEndDate= ? where emailId = ?',[$townHouseNumber,$roomNumber,$occupied,$residentName,$leaseStartDate,$leaseEndDate,$emailId]);
        $TownHouseResidentList = DB::select('select * from town_house_resident_lists');
        return view('ApartmentManagerServices.TownHouse.residentList',['TownHouseResidentList'=>$TownHouseResidentList]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $emailId = $request->emailId;
        $query=DB::select('delete from town_house_resident_Lists where emailId = ?',[$emailId]);
        $TownHouseResidentList = DB::select('select * from town_house_resident_Lists');
        return view('ApartmentManagerServices.TownHouse.residentList',['TownHouseResidentList'=>$TownHouseResidentList]);
    }
}

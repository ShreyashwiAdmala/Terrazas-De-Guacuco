<?php

namespace App\Http\Controllers;

use App\Models\StudioResidentList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudioResidentListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $StudioResidentListData = DB::select('select * from studio_resident_lists');
        return view('ApartmentManagerServices.Studio.residentList',['StudioResidentList'=>$StudioResidentListData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ApartmentManagerServices.Studio.createResidentList');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedStudioResidentList = $request->validate([
            'studioNumber'=>'required',
            'roomNumber'=>'required',
            'occupied'=>'required',
            'residentName'=>'required',
            'emailId'=>'required|unique:studio_resident_lists', 
            'leaseStartDate'=>'required',
            'leaseEndDate'=>'required'
        ]);

        $StudioResidentList = new StudioResidentList();
        $StudioResidentList->studioNumber=$validatedStudioResidentList['studioNumber'];
        $StudioResidentList->roomNumber=$validatedStudioResidentList['roomNumber'];
        $StudioResidentList->occupied=$validatedStudioResidentList['occupied'];
        $StudioResidentList->residentName=$validatedStudioResidentList['residentName'];
        $StudioResidentList->emailId=$validatedStudioResidentList['emailId'];
        $StudioResidentList->leaseStartDate=$validatedStudioResidentList['leaseStartDate'];
        $StudioResidentList->leaseEndDate=$validatedStudioResidentList['leaseEndDate'];
        $StudioResidentList->save();

        $StudioResidentListData = DB::select('select * from studio_resident_lists');
        return view('ApartmentManagerServices.Studio.residentList',['StudioResidentList'=>$StudioResidentListData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(StudioResidentList $StudioResidentList)
    {
        $StudioResidentList = DB::select('select * from studio_resident_lists');
        return view('ApartnemtManagerServices.Studio.residentList',['StudioResidentList'=>$StudioResidentList]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $studioNumber= $request->studioNumber;
        $roomNumber = $request->roomNumber;
        $occupied=$request->occupied;
        $residentName=$request->residentName;
        $emailId=$request->emailId;
        $leaseStartDate=$request->leaseStartDate;
        $leaseEndDate=$request->leaseEndDate;
        
        return view('ApartmentManagerServices.Studio.editResidentList',['studioNumber'=>$studioNumber,'roomNumber'=>$roomNumber,'occupied'=>$occupied,'residentName'=>$residentName,'emailId'=>$emailId,'leaseStartDate'=>$leaseStartDate,'leaseEndDate'=>$leaseEndDate]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudioResidentList $StudioResidentList)
    {
        $request->validate([
            'studioNumber'=>'required',
            'roomNumber'=> 'required',
            'occupied'=>'required',
            'residentName'=>'required',
            'emailId'=>'required',
            'leaseStartDate'=>'required',
            'leaseEndDate'=>'required'
        ]);
        $studioNumber= $request->input('studioNumber');
        $roomNumber = $request->input('roomNumber');
        $occupied=$request->input('occupied');
        $residentName=$request->input('residentName');
        $emailId=$request->input('emailId');
        $leaseStartDate=$request->input('leaseStartDate');
        $leaseEndDate=$request->input('leaseEndDate');
       
        $query = DB::select('update studio_resident_lists set studioNumber=?, roomNumber = ?, occupied = ?, residentName = ?, leaseStartDate= ?, leaseEndDate= ? where emailId = ?',[$studioNumber,$roomNumber,$occupied,$residentName,$leaseStartDate,$leaseEndDate,$emailId]);
        $StudioResidentList = DB::select('select * from studio_resident_lists');
        return view('ApartmentManagerServices.Studio.residentList',['StudioResidentList'=>$StudioResidentList]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $emailId = $request->emailId;
        $query=DB::select('delete from studio_resident_Lists where emailId = ?',[$emailId]);
        $StudioResidentList = DB::select('select * from studio_resident_Lists');
        return view('ApartmentManagerServices.Studio.residentList',['StudioResidentList'=>$StudioResidentList]);
    }
}

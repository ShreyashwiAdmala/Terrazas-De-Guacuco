<?php

namespace App\Http\Controllers;

use App\Models\AptStaffList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AptStaffListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('BuildingManagerServices.apartmentManagerStaffList');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('BuildingManagerServices.createAptStaffList');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedGardenStaffList = $request->validate([
            'name'=>'required',
            'emailId'=>'required|unique:apt_staff_lists',
            'aptType'=>'required',
        ]);

        $GardenStaffList = new AptStaffList();
        $GardenStaffList->name=$validatedGardenStaffList['name'];
        $GardenStaffList->emailId=$validatedGardenStaffList['emailId'];
        $GardenStaffList->aptType=$validatedGardenStaffList['aptType'];
        $GardenStaffList->save();

        $list = DB::select('select * from apt_staff_lists');
        return view('BuildingManagerServices.apartmentManagerStaffList',['list'=>$list]);
    }

    /**
     * Display the specified resource.
     */
    public function show(AptStaffList $aptStaffList)
    {
        $list = DB::select('select * from apt_staff_lists');
        return view('BuildingManagerServices.apartmentManagerStaffList',['list'=>$list]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $name =  $request->name;
        $emailId = $request->emailId;
        $aptType = $request->aptType;
        return view('BuildingManagerServices.editAptStaffList',['name'=>$name,'emailId'=>$emailId,'aptType'=>$aptType]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AptStaffList $aptStaffList)
    {
        $request->validate([
            'name'=>'required',
            'emailId'=>'required',
            'aptType'=>'required',
        ]);

        $name = $request->input('name');
        $emailId = $request->input('emailId');
        $aptType = $request->input('aptType');
    
        $query = DB::select('update apt_staff_lists set  aptType = ? where emailId = ?',[$aptType,$emailId]);
        $list = DB::select('select * from apt_staff_lists');
        return view('BuildingManagerServices.apartmentManagerStaffList',['list'=>$list]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $emailId=$request->emailId;
        $query=DB::select('delete from apt_staff_lists where emailId = ?',[$emailId]);
        $list = DB::select('select * from apt_staff_lists');
        return view('BuildingManagerServices.apartmentManagerStaffList',['list'=>$list]);
    }
}

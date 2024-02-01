<?php

namespace App\Http\Controllers;

use App\Models\VisitorStaffList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorStaffListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('BuildingManagerServices.visitorManagerStaffList');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('BuildingManagerServices.createVisitorStaffList');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedGardenStaffList = $request->validate([
            'name'=>'required',
            'email'=>'required|unique:visitor_staff_lists',
            'workerType'=>'required',
            'schedule'=>'required'
        ]);

        $GardenStaffList = new VisitorStaffList();
        $GardenStaffList->name=$validatedGardenStaffList['name'];
        $GardenStaffList->email=$validatedGardenStaffList['email'];
        $GardenStaffList->workerType=$validatedGardenStaffList['workerType'];
        $GardenStaffList->schedule=$validatedGardenStaffList['schedule'];
        $GardenStaffList->save();

        $list = DB::select('select * from visitor_staff_lists');
        return view('BuildingManagerServices.visitorManagerStaffList',['list'=>$list]);
    }

    /**
     * Display the specified resource.
     */
    public function show(VisitorStaffList $visitorStaffList)
    {
        $list = DB::select('select * from visitor_staff_lists');
        return view('BuildingManagerServices.visitorManagerStaffList',['list'=>$list]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $name =  $request->name;
        $email = $request->email;
        $workerType = $request->workerType;
        $schedule = $request->schedule;
        return view('BuildingManagerServices.editVisitorStaffList',['name'=>$name,'email'=>$email,'workerType'=>$workerType,'schedule'=>$schedule]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VisitorStaffList $visitorStaffList)
    {
        $request->validate([
            'name'=>'required',
            'emailId'=>'required',
            'aptType'=>'required',
        ]);

        $name = $request->input('name');
        $emailId = $request->input('emailId');
        $aptType = $request->input('aptType');
    
        $query = DB::select('update visitor_staff_lists set  aptType = ? where emailId = ?',[$aptType,$emailId]);
        $list = DB::select('select * from apt_staff_lists');
        return view('BuildingManagerServices.visitorManagerStaffList',['list'=>$list]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $email=$request->email;
        $query=DB::select('delete from visitor_staff_lists where email = ?',[$email]);
        $list = DB::select('select * from visitor_staff_lists');
        return view('BuildingManagerServices.visitorManagerStaffList',['list'=>$list]);
    }
}

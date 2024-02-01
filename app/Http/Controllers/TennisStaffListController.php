<?php

namespace App\Http\Controllers;

use App\Models\TennisStaffList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TennisStaffListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('TennisManagerServices.staffList.staffList');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('TennisManagerServices.staffList.createStaffList');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedTennisStaffList = $request->validate([
            'name'=>'required',
            'email'=>'required|unique:tennis_staff_lists',
            'workerType'=>'required',
            'tennisName'=>'required',
            'schedule'=>'required',
        ]);

        $TennisStaffList = new TennisStaffList();
        $TennisStaffList->name=$validatedTennisStaffList['name'];
        $TennisStaffList->email=$validatedTennisStaffList['email'];
        $TennisStaffList->workerType=$validatedTennisStaffList['workerType'];
        $TennisStaffList->tennisName=$validatedTennisStaffList['tennisName'];
        $TennisStaffList->schedule=$validatedTennisStaffList['schedule'];
        $TennisStaffList->save();

        $TennisStaffListData = DB::select('select * from tennis_staff_lists');
        return view('TennisManagerServices.staffList.staffList',['tennisStaffList'=>$TennisStaffListData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(TennisStaffList $tennisStaffList)
    {
        $tennisStaffList = DB::select('select * from tennis_staff_lists');
        return view('TennisManagerServices.staffList.staffList',['tennisStaffList'=>$tennisStaffList]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $name =  $request->name;
        $email = $request->email;
        $workerType = $request->workerType;
        $tennisName = $request->tennisName;
        $schedule = $request->schedule;
        return view('TennisManagerServices.staffList.editStaffList',['name'=>$name,'email'=>$email,'workerType'=>$workerType,'tennisName'=>$tennisName,'schedule'=>$schedule]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TennisStaffList $tennisStaffList)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'workerType'=>'required',
            'tennisName'=>'required',
            'schedule'=>'required'
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $workerType = $request->input('workerType');
        $tennisName = $request->input('tennisName');
        $schedule = $request->input('schedule');
    
        $query = DB::select('update tennis_staff_lists set name = ?, workerType = ?, tennisName = ?, schedule = ? where email = ?',[$name,$workerType,$tennisName,$schedule,$email]);
        $tennisStaffList = DB::select('select * from tennis_staff_lists');
        return view('TennisManagerServices.staffList.staffList',['tennisStaffList'=>$tennisStaffList]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $email=$request->email;
        $query=DB::select('delete from tennis_staff_lists where email = ?',[$email]);
        $tennisStaffList = DB::select('select * from tennis_staff_lists');
        return view('TennisManagerServices.staffList.staffList',['tennisStaffList'=>$tennisStaffList]);
    }
}

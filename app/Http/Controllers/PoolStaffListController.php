<?php

namespace App\Http\Controllers;

use App\Models\PoolStaffList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoolStaffListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('PoolManagerServices.staffList.staffList');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('PoolManagerServices.staffList.createStaffList');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedPoolStaffList = $request->validate([
            'name'=>'required',
            'email'=>'required|unique:pool_staff_lists',
            'workerType'=>'required',
            'poolName'=>'required',
            'schedule'=>'required',
        ]);

        $PoolStaffList = new PoolStaffList();
        $PoolStaffList->name=$validatedPoolStaffList['name'];
        $PoolStaffList->email=$validatedPoolStaffList['email'];
        $PoolStaffList->workerType=$validatedPoolStaffList['workerType'];
        $PoolStaffList->poolName=$validatedPoolStaffList['poolName'];
        $PoolStaffList->schedule=$validatedPoolStaffList['schedule'];
        $PoolStaffList->save();

        $PoolStaffListData = DB::select('select * from pool_staff_lists');
        return view('PoolManagerServices.staffList.staffList',['poolStaffList'=>$PoolStaffListData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PoolStaffList $poolStaffList)
    {
        $poolStaffList = DB::select('select * from pool_staff_lists');
        return view('PoolManagerServices.staffList.staffList',['poolStaffList'=>$poolStaffList]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $name =  $request->name;
        $email = $request->email;
        $workerType = $request->workerType;
        $poolName = $request->poolName;
        $schedule = $request->schedule;
        return view('PoolManagerServices.staffList.editStaffList',['name'=>$name,'email'=>$email,'workerType'=>$workerType,'poolName'=>$poolName,'schedule'=>$schedule]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PoolStaffList $poolStaffList)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'workerType'=>'required',
            'poolName'=>'required',
            'schedule'=>'required'
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $workerType = $request->input('workerType');
        $poolName = $request->input('poolName');
        $schedule = $request->input('schedule');
    
        $query = DB::select('update pool_staff_lists set name = ?, workerType = ?, poolName = ?, schedule = ? where email = ?',[$name,$workerType,$poolName,$schedule,$email]);
        $poolStaffList = DB::select('select * from pool_staff_lists');
        return view('PoolManagerServices.staffList.staffList',['poolStaffList'=>$poolStaffList]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $email=$request->email;
        $query=DB::select('delete from pool_staff_lists where email = ?',[$email]);
        $poolStaffList = DB::select('select * from pool_staff_lists');
        return view('PoolManagerServices.staffList.staffList',['poolStaffList'=>$poolStaffList]);
    }
}

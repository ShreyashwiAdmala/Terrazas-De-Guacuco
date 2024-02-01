<?php

namespace App\Http\Controllers;

use App\Models\GardenStaffList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GardenStaffListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('GardenManagerServices.staffList.staffList');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('GardenManagerServices.staffList.createStaffList');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedGardenStaffList = $request->validate([
            'name'=>'required',
            'email'=>'required|unique:garden_staff_lists',
            'workerType'=>'required',
            'gardenName'=>'required',
            'schedule'=>'required',
        ]);

        $GardenStaffList = new GardenStaffList();
        $GardenStaffList->name=$validatedGardenStaffList['name'];
        $GardenStaffList->email=$validatedGardenStaffList['email'];
        $GardenStaffList->workerType=$validatedGardenStaffList['workerType'];
        $GardenStaffList->gardenName=$validatedGardenStaffList['gardenName'];
        $GardenStaffList->schedule=$validatedGardenStaffList['schedule'];
        $GardenStaffList->save();

        $GardenStaffListData = DB::select('select * from garden_staff_lists');
        return view('GardenManagerServices.staffList.staffList',['gardenStaffList'=>$GardenStaffListData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(GardenStaffList $gardenStaffList)
    {
        $gardenStaffList = DB::select('select * from garden_staff_lists');
        return view('GardenManagerServices.staffList.staffList',['gardenStaffList'=>$gardenStaffList]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $name =  $request->name;
        $email = $request->email;
        $workerType = $request->workerType;
        $gardenName = $request->gardenName;
        $schedule = $request->schedule;
        return view('GardenManagerServices.staffList.editStaffList',['name'=>$name,'email'=>$email,'workerType'=>$workerType,'gardenName'=>$gardenName,'schedule'=>$schedule]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GardenStaffList $gardenStaffList)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'workerType'=>'required',
            'gardenName'=>'required',
            'schedule'=>'required'
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $workerType = $request->input('workerType');
        $gardenName = $request->input('gardenName');
        $schedule = $request->input('schedule');
    
        $query = DB::select('update garden_staff_lists set name = ?, workerType = ?, gardenName = ?, schedule = ? where email = ?',[$name,$workerType,$gardenName,$schedule,$email]);
        $gardenStaffList = DB::select('select * from garden_staff_lists');
        return view('GardenManagerServices.staffList.staffList',['gardenStaffList'=>$gardenStaffList]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $email=$request->email;
        $query=DB::select('delete from garden_staff_lists where email = ?',[$email]);
        $gardenStaffList = DB::select('select * from garden_staff_lists');
        return view('GardenManagerServices.staffList.staffList',['gardenStaffList'=>$gardenStaffList]);
    }
}

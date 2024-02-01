<?php

namespace App\Http\Controllers;

use App\Models\residentSubcriptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResidentSubcriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ResidentServices.subcriptions');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subResidentData = DB::select('select * from resident_subcriptions');
        return view('SuperAdminServices.SuperAdminResidentSubscriptions',['subResident'=>$subResidentData]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(residentSubcriptions $residentSubcriptions)
    {
        $role = 'Resident';
        $email = session('user_email');
        $name = session('user_name');
        $resProf = DB::select('insert into resident_subcriptions (name, emailId) SELECT name, emailId FROM registers WHERE role = ? AND emailId NOT IN (select emailId from resident_subcriptions)',[$role]);
        $subResidentData = DB::select('select * from resident_subcriptions where emailId = ? AND name =?',[$email,$name]);
        return view('ResidentServices.subcriptions',['subResident'=>$subResidentData]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(residentSubcriptions $residentSubcriptions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, residentSubcriptions $residentSubcriptions)
    {
        $request->validate([
            'poolSubcription'=>'required',
            'gardenSubcription'=>'required',
            'tennisSubcription'=>'required'
        ]);

        $poolSubcription = $request->poolSubcription;
        $gardenSubcription = $request->gardenSubcription;
        $tennisSubcription = $request->tennisSubcription;
        $name = session('user_name');
        $emailId = session('user_email');
    
        $query = DB::select('update resident_subcriptions set poolSubcription = ?,gardenSubcription = ?,tennisSubcription = ? where emailId = ?',[$poolSubcription,$gardenSubcription,$tennisSubcription,$emailId]);
        $subResidentData = DB::select('select * from resident_subcriptions where emailId = ? AND name =?',[$emailId,$name]);
        return view('ResidentServices.subcriptions',['subResident'=>$subResidentData]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(residentSubcriptions $residentSubcriptions)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\residentProfiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResidentProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $residentProfileData = DB::select('select * from resident_profiles');
        return view('SuperAdminServices.SuperAdminResidentProfile',['residentProfile'=>$residentProfileData]);
    }

    public function indexReport()
    {
        $residentProfileData = DB::select('select * from resident_profiles');
        return view('ApartmentManagerServices.apartmentManagerReport',['residentProfile'=>$residentProfileData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(residentProfiles $residentProfiles)
    {
        $role = 'Resident';
        $email = session('user_email');
        $name = session('user_name');
        $residentProfile = DB::select('insert into resident_profiles (name, emailId) SELECT name, emailId FROM registers WHERE role = ? AND emailId NOT IN (select emailId from resident_profiles)',[$role]);
        $residentProfileData = DB::select('select * from resident_profiles where emailId = ? AND name =?',[$email,$name]);
        return view('ResidentServices.myProfile',['residentProfile'=>$residentProfileData]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $name =  session('user_name');
        $emailId = session('user_email');
        $phnumber = $request->phnumber;
        $dlnumber = $request->dlnumber;
        $carnumplate = $request->carnumplate;
        return view('ResidentServices.myProfileEdit',['name'=>$name,'emailId'=>$emailId,'phnumber'=>$phnumber,'dlnumber'=>$dlnumber,'carnumplate'=>$carnumplate]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, residentProfiles $residentProfiles)
    {
        $request->validate([
            'phnumber'=>'required|min:10|max:10',
            'dlnumber'=>'required',
            'carnumplate'=>'required',
        ]);

        $phnumber = $request->input('phnumber');
        $dlnumber = $request->input('dlnumber');
        $carnumplate = $request->input('carnumplate');
        $name = session('user_name');
        $emailId = session('user_email');
    
        $query = DB::select('update resident_profiles set phnumber = ?, dlnumber = ?, carnumplate = ? where emailId = ?',[$phnumber,$dlnumber,$carnumplate,$emailId]);
        $residentProfileData = DB::select('select * from resident_profiles where emailId = ? AND name =?',[$emailId,$name]);
        return view('ResidentServices.myProfile',['residentProfile'=>$residentProfileData]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(residentProfiles $residentProfiles)
    {
        //
    }
}

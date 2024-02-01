<?php

namespace App\Http\Controllers;

use App\Models\visitorProfiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class VisitorProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('VisitorManagerServices.visitorList');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $visitorProfileData = DB::select('select * from visitor_profiles');
        return view('VisitorManagerServices.visitorList',['visitorList'=>$visitorProfileData]);
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
    public function show(visitorProfiles $visitorProfiles)
    {
        $role = 'Visitor';
        $email = session('user_email');
        $name = session('user_name');
        $visitorProfile = DB::select('insert into visitor_profiles (name, emailId) SELECT name, emailId FROM registers WHERE role = ? AND emailId NOT IN (select emailId from visitor_profiles)',[$role]);
        $visitorProfileData = DB::select('select * from visitor_profiles where emailId = ? AND name =?',[$email,$name]);
        return view('VisitorServices.myProfile',['visitorProfile'=>$visitorProfileData]);
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
        return view('VisitorServices.myProfileEdit',['name'=>$name,'emailId'=>$emailId,'phnumber'=>$phnumber,'dlnumber'=>$dlnumber,'carnumplate'=>$carnumplate]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, visitorProfiles $visitorProfiles)
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
    
        $query = DB::select('update visitor_profiles set phnumber = ?, dlnumber = ?, carnumplate = ? where emailId = ?',[$phnumber,$dlnumber,$carnumplate,$emailId]);
        $visitorProfileData = DB::select('select * from visitor_profiles where emailId = ? AND name =?',[$emailId,$name]);
        return view('VisitorServices.myProfile',['visitorProfile'=>$visitorProfileData]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(visitorProfiles $visitorProfiles)
    {
        //
    }
}

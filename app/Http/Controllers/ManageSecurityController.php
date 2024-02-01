<?php

namespace App\Http\Controllers;

use App\Models\ManageSecurity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageSecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('SecurityManagerServices.manageSecurity');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $securityData = DB::select('select * from manage_securities');
        return view('SecurityManagerServices.createManageSecurity',['security'=>$securityData]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedSecurityEvent = $request->validate([
            'name'=>'required',
            'emailId'=>'required|unique:manage_securities',
            'age'=>'required',
            'location'=>'required',
        ]);

        $security = new ManageSecurity();
        $security->name=$validatedSecurityEvent['name'];
        $security->emailId=$validatedSecurityEvent['emailId'];
        $security->age=$validatedSecurityEvent['age'];
        $security->location=$validatedSecurityEvent['location'];
        $security->save();

        $securityData = DB::select('select * from manage_securities');
        return view('SecurityManagerServices.manageSecurity',['security'=>$securityData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ManageSecurity $manageSecurity)
    {
        $securityData = DB::select('select * from manage_securities');
        return view('SecurityManagerServices.manageSecurity',['security'=>$securityData]);
    }

    public function showReport(ManageSecurity $manageSecurity)
    {
        $securityData = DB::select('select * from manage_securities');
        return view('SecurityManagerServices.securityManagerReport',['security'=>$securityData]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $name =  $request->name;
        $emailId = $request->emailId;
        $age = $request->age;
        $location = $request->location;
        return view('SecurityManagerServices.editManageSecurity',['name'=>$name,'emailId'=>$emailId,'age'=>$age,'location'=>$location]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ManageSecurity $manageSecurity)
    {
        $request->validate([
            'name'=>'required',
            'emailId'=>'required',
            'age'=>'required',
            'location'=>'required'
        ]);

        $name = $request->input('name');
        $emailId = $request->input('emailId');
        $age = $request->input('age');
        $location = $request->input('location');
    
        $query = DB::select('update manage_securities set  location = ? where emailId = ?',[$location,$emailId]);
        $securityData = DB::select('select * from manage_securities');
        return view('SecurityManagerServices.manageSecurity',['security'=>$securityData]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $name=$request->name;
        $emailId=$request->emailId;
        $age=$request->age;
        $location=$request->location;
        $query=DB::select('delete from manage_securities where emailId = ?',[$emailId]);
        $securityData = DB::select('select * from manage_securities');
        return view('SecurityManagerServices.manageSecurity',['security'=>$securityData]);
    }
}

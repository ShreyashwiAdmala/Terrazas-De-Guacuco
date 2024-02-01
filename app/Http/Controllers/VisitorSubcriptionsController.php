<?php

namespace App\Http\Controllers;

use App\Models\visitorSubcriptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorSubcriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(visitorSubcriptions $visitorSubcriptions)
    {
        $role = 'Visitor';
        $email = session('user_email');
        $name = session('user_name');
        $resProf = DB::select('insert into visitor_subcriptions (name, emailId) SELECT name, emailId FROM registers WHERE role = ? AND emailId NOT IN (select emailId from visitor_subcriptions)',[$role]);
        $subVisitorData = DB::select('select * from visitor_subcriptions where emailId = ? AND name =?',[$email,$name]);
        return view('VisitorServices.subcriptions',['subVisitor'=>$subVisitorData]);
    }

    public function showReport(visitorSubcriptions $visitorSubcriptions)
    {
        $subVisitorData = DB::select('select * from visitor_subcriptions');
        return view('VisitorManagerServices.visitorManagerServicesReport',['subVisitor'=>$subVisitorData]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(visitorSubcriptions $visitorSubcriptions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, visitorSubcriptions $visitorSubcriptions)
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
    
        $query = DB::select('update  visitor_subcriptions set poolSubcription = ?,gardenSubcription = ?,tennisSubcription = ? where emailId = ?',[$poolSubcription,$gardenSubcription,$tennisSubcription,$emailId]);
        $subVisitorData = DB::select('select * from visitor_subcriptions where emailId = ? AND name =?',[$emailId,$name]);
        return view('VisitorServices.subcriptions',['subVisitor'=>$subVisitorData]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(visitorSubcriptions $visitorSubcriptions)
    {
        //
    }
}

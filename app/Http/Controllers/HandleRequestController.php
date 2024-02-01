<?php

namespace App\Http\Controllers;

use App\Models\handleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HandleRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('VisitorServices.requestRaiseIncident');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $handleRequestData = DB::select('select * from handle_requests');
        return view('VisitorManagerServices.handleRequest',['handleRequest'=>$handleRequestData]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedHandleRequest = $request->validate([
            'name'=>'required',
            'emailId'=>'required',
            'incidentType'=>'required',
            'phnumber'=>'required',
            'query'=>'required',
        ]);

        $handleRequest = new HandleRequest();
        $handleRequest->name=$validatedHandleRequest['name'];
        $handleRequest->emailId=$validatedHandleRequest['emailId'];
        $handleRequest->incidentType=$validatedHandleRequest['incidentType'];
        $handleRequest->phnumber=$validatedHandleRequest['phnumber'];
        $handleRequest->query=$validatedHandleRequest['query'];
        $handleRequest->save();

        // $gardenTimingsData = DB::select('select * from handle_requests');
        return view('VisitorServices.requestRaiseIncident');
    }

    /**
     * Display the specified resource.
     */
    public function show(handleRequest $handleRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
    */
    public function update(Request $request, handleRequest $handleRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $name=$request->name;
        $emailId=$request->emailId;
        $incidentType=$request->incidentType;
        $phnumber=$request->phnumber;
        $query=$request->query;
        $query=DB::select('delete from handle_requests where emailId = ?',[$emailId]);
        $handleRequestData = DB::select('select * from handle_requests');
        return view('VisitorManagerServices.handleRequest',['handleRequest'=>$handleRequestData]);
    }
}

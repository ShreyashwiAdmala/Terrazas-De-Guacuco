<?php

namespace App\Http\Controllers;

use App\Models\chatDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
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
    public function create(Request $request)
    {
        $receiverName =  $request->name;
        $userPresent = $request->name;
        $senderName = session('user_name');
        $idCheck = $senderName. "" .$receiverName;
        $idCheck = str_split($idCheck);
        sort($idCheck);
        $idCheck = implode('', $idCheck);
        $userMessages = DB::select('select * from chat_databases where idCheck = ?',[$idCheck]);
        $RegisteredUser = DB::select('select * from registers where not name = ?',[$senderName]);
        return view('chat',compact('userMessages','RegisteredUser','userPresent'));
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
    public function show(chatDatabase $chatDatabase)
    {
        $name = session('user_name');
        $RegisteredUser = DB::select('select * from registers where not name = ?',[$name]);
        $SelectedUserDetails = new ChatDatabase();
        $userMessages = '';
        $userPresent = '';

        // $idCheck = $name. "" .$receiverName;
        // $idCheck = str_split($idCheck);
        // sort($idCheck);
        // $idCheck = implode('', $idCheck);
        // $userMessages = DB::select('select * from chat_databases where idCheck = ?',[$idCheck]);

        return view('chat',compact('RegisteredUser','userMessages','userPresent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(chatDatabase $chatDatabase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, chatDatabase $chatDatabase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(chatDatabase $chatDatabase)
    {
        //
    }
}

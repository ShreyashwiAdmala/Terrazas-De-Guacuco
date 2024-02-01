<?php

namespace App\Http\Controllers;

use App\Models\paymentHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ResidentServices.paymentHistory');
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
    public function show(paymentHistory $paymentHistory)
    {
        $paymentHistoryList = DB::select('select * from payment_histories');
        return view('ResidentServices.paymentHistory',['paymentHistoryList'=>$paymentHistoryList]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(paymentHistory $paymentHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, paymentHistory $paymentHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(paymentHistory $paymentHistory)
    {
        //
    }
}

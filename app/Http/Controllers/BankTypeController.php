<?php

namespace App\Http\Controllers;

use App\Models\BankType;
use Illuminate\Http\Request;

class BankTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'bank_type' => 'required',
        ]);

        // dd($formFields);

        BankType::create($formFields);

        return back()->with('message', 'Bank Type Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BankType  $bankType
     * @return \Illuminate\Http\Response
     */
    public function show(BankType $bankType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BankType  $bankType
     * @return \Illuminate\Http\Response
     */
    public function edit(BankType $bank_type)
    {
        return view('bank-type.edit',compact('bank_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BankType  $bankType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BankType $bank_type)
    {
        $formFields = $request->validate([
            'bank_type' => 'required',
        ]);

        // dd($formFields);

        $bank_type->update($formFields);

        return redirect('/manage-bank_type')->with('message', 'Bank Type Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankType  $bankType
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankType $bank_type)
    {
        $bank_type->delete();

        return redirect('/manage-bank_type')->with('message', 'Bank Type Deleted Successfully');
    }
}

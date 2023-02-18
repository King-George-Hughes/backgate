<?php

namespace App\Http\Controllers;

use App\Models\Cashapp;
use Illuminate\Http\Request;

class CashappController extends Controller
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
            'price' => 'required',
            'balance' => 'required',
            'description' => 'required'
        ]);

        // dd($formFields);

        Cashapp::create($formFields);

        return back()->with('message', 'Cashapp created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cashapp  $cashapp
     * @return \Illuminate\Http\Response
     */
    public function show(Cashapp $cashapp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cashapp  $cashapp
     * @return \Illuminate\Http\Response
     */
    public function edit(Cashapp $cashapp)
    {
        return view('cashapp.edit', compact('cashapp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cashapp  $cashapp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cashapp $cashapp)
    {
        $formFields = $request->validate([
            'price' => 'required',
            'balance' => 'required',
            'description' => 'required'
        ]);

        // dd($formFields);

        $cashapp->update($formFields);

        return redirect('/manage-cashapp')->with('message', 'Cashapp Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cashapp  $cashapp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cashapp $cashapp)
    {
        $cashapp->delete();

        return redirect('/manage-cashapp')->with('message', 'Cashapp Deleted Successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Paypal;
use Illuminate\Http\Request;

class PaypalController extends Controller
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

        Paypal::create($formFields);

        return back()->with('message', 'Paypal created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paypal  $paypal
     * @return \Illuminate\Http\Response
     */
    public function show(Paypal $paypal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paypal  $paypal
     * @return \Illuminate\Http\Response
     */
    public function edit(Paypal $paypal)
    {
        return view('paypal.edit', compact('paypal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paypal  $paypal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paypal $paypal)
    {
        $formFields = $request->validate([
            'price' => 'required',
            'balance' => 'required',
            'description' => 'required'
        ]);

        // dd($formFields);

        $paypal->update($formFields);

        return redirect('manage-paypal')->with('message', 'Paypal Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paypal  $paypal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paypal $paypal)
    {
        $paypal->delete();

        return redirect('manage-paypal')->with('message', 'Paypal Deleted Successfully');
    }
}

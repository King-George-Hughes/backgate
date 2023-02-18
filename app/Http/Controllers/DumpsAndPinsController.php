<?php

namespace App\Http\Controllers;

use App\Models\DumpsAndPins;
use Illuminate\Http\Request;

class DumpsAndPinsController extends Controller
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

        DumpsAndPins::create($formFields);

        return back()->with('message', 'Dumps + Pins created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DumpsAndPins  $dumpsAndPins
     * @return \Illuminate\Http\Response
     */
    public function show(DumpsAndPins $dandp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DumpsAndPins  $dumpsAndPins
     * @return \Illuminate\Http\Response
     */
    public function edit(DumpsAndPins $dandp)
    {
        return view('dandp.edit', compact('dandp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DumpsAndPins  $dumpsAndPins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DumpsAndPins $dandp)
    {
        $formFields = $request->validate([
            'price' => 'required',
            'balance' => 'required',
            'description' => 'required'
        ]);

        // dd($formFields);

        $dandp->update($formFields);

        return redirect('/manage-d&p')->with('message', 'Dumps + Pins Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DumpsAndPins  $dumpsAndPins
     * @return \Illuminate\Http\Response
     */
    public function destroy(DumpsAndPins $dandp)
    {
        $dandp->delete();

        return redirect('/manage-d&p')->with('message', 'Dumps + Pins Delete Successfully');
    }
}

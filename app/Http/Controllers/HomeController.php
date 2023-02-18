<?php

namespace App\Http\Controllers;

use App\Models\Cashapp;
use App\Models\DumpsAndPins;
use App\Models\Paypal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // Terms and Conditions
    public function tandc()
    {
        return view('pages.t&c');
    }

    // Add Cash
    public function addcash()
    {
        return view('pages.add_cash');
    }

    // Paypal
    public function paypal()
    {
        $paypals = Paypal::all()->sortDesc();
        return view('pages.paypal', compact('paypals'));
    }

    // Cashapp
    public function cashapp()
    {
        $cashapps = Cashapp::all()->sortDesc();
        return view('pages.cashapp', compact('cashapps'));
    }

    // Dumps and Pins
    public function dumpsandpins()
    {
        $dandps = DumpsAndPins::all()->sortDesc();
        return view('pages.dumps&pins', compact('dandps'));
    }
}

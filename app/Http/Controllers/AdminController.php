<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Admin;
use App\Models\Bank;
use App\Models\BankType;
use App\Models\Cashapp;
use App\Models\DumpsAndPins;
use App\Models\Paypal;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $posts = Post::all();
        $banks = Bank::all();
        $paypals = Paypal::all();
        return view('admin.dashboard', compact('users','posts', 'banks', 'paypals'));
    }

    // Manage Post
    public function manage_post()
    {
        $posts = Post::latest()->paginate(10);
        $banks = Bank::all();
        $bank_types = BankType::all();
        return view('admin.manage-post', compact('posts','banks','bank_types'));
    }

    // Manage Bank
    public function manage_bank()
    {
        $banks = Bank::latest()->paginate(10);
        return view('admin.manage-bank', compact('banks'));
    }

    // Manage Bank Types
    public function manage_bank_type()
    {
        $bank_types = BankType::latest()->paginate(10);
        return view('admin.manage-bank_type', compact('bank_types'));
    }

    // Manage Dumps and Pins
    public function manage_dandp()
    {
        $dandps = DumpsAndPins::latest()->paginate(10);
        return view('admin.manage-d&p', compact('dandps'));
    }

    // Manage Cashapp
    public function manage_cashapp()
    {
        $cashapps = Cashapp::latest()->paginate(10);
        return view('admin.manage-cashapp', compact('cashapps'));
    }

    // Manage Paypal
    public function manage_paypal()
    {
        $paypals = Paypal::latest()->paginate(10);
        return view('admin.manage-paypal', compact('paypals'));
    }

    // Manage Users
    public function manage_users()
    {
        $users = User::latest()->paginate(10);
        return view('admin.manage-users', compact('users'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}

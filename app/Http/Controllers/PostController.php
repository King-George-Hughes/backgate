<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\BankType;
use App\Models\Post;
use App\Models\Listing;
use Illuminate\Http\Request;

class PostController extends Controller
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
            'bank' => 'required',
            'price' => 'required',
            'balance' => 'required',
            'description' => 'required',
        ]);

        // dd($formFields);

        Post::create($formFields);

        return back()->with('message', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $banks = Bank::all();
        $bank_types = BankType::all();
        return view('posts.edit', compact('post', 'banks', 'bank_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $formFields = $request->validate([
            'bank_type' => 'required',
            'bank' => 'required',
            'price' => 'required',
            'balance' => 'required',
            'description' => 'required',
        ]);

        // dd($formFields);

        $post->update($formFields);

        return redirect('/manage-post')->with('message', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/manage-post')->with('message', 'Post deleted Successfully');
    }
}

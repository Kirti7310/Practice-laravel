<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostForm extends Controller
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
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email|unique:users',
                'password'=>'required|min:6',
                'confirmpass'=>'required|same:password'
            ],
            [
                'name.required'=>'Name Shouldnt Be Empty!',
            ]
        
        
        );


        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('postform');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

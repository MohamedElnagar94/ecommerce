<?php

namespace App\Http\Controllers\agency;

use App\profilemodify;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilemodifyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agency.profile modify the data');
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
     * @param  \App\profilemodify  $profilemodify
     * @return \Illuminate\Http\Response
     */
    public function show(profilemodify $profilemodify)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\profilemodify  $profilemodify
     * @return \Illuminate\Http\Response
     */
    public function edit(profilemodify $profilemodify)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\profilemodify  $profilemodify
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profilemodify $profilemodify)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\profilemodify  $profilemodify
     * @return \Illuminate\Http\Response
     */
    public function destroy(profilemodify $profilemodify)
    {
        //
    }
}

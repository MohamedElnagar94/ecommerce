<?php

namespace App\Http\Controllers\agency;

use App\profilepersonal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilepersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agency.profile personal page');
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
     * @param  \App\profilepersonal  $profilepersonal
     * @return \Illuminate\Http\Response
     */
    public function show(profilepersonal $profilepersonal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\profilepersonal  $profilepersonal
     * @return \Illuminate\Http\Response
     */
    public function edit(profilepersonal $profilepersonal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\profilepersonal  $profilepersonal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profilepersonal $profilepersonal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\profilepersonal  $profilepersonal
     * @return \Illuminate\Http\Response
     */
    public function destroy(profilepersonal $profilepersonal)
    {
        //
    }
}

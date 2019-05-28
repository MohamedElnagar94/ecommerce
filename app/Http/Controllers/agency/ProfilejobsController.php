<?php

namespace App\Http\Controllers\agency;

use App\profilejobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilejobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agency.profile jobs offers');
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
     * @param  \App\profilejobs  $profilejobs
     * @return \Illuminate\Http\Response
     */
    public function show(profilejobs $profilejobs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\profilejobs  $profilejobs
     * @return \Illuminate\Http\Response
     */
    public function edit(profilejobs $profilejobs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\profilejobs  $profilejobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profilejobs $profilejobs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\profilejobs  $profilejobs
     * @return \Illuminate\Http\Response
     */
    public function destroy(profilejobs $profilejobs)
    {
        //
    }
}

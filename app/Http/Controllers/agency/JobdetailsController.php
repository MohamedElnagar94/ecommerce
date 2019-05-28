<?php

namespace App\Http\Controllers\agency;

use App\jobdetails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobdetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agency.job_details');
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
     * @param  \App\jobdetails  $jobdetails
     * @return \Illuminate\Http\Response
     */
    public function show(jobdetails $jobdetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jobdetails  $jobdetails
     * @return \Illuminate\Http\Response
     */
    public function edit(jobdetails $jobdetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jobdetails  $jobdetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jobdetails $jobdetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jobdetails  $jobdetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(jobdetails $jobdetails)
    {
        //
    }
}

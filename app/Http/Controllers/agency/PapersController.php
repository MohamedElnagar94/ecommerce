<?php

namespace App\Http\Controllers\agency;

use App\papers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PapersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agency.Papers_required_for_travel');
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
     * @param  \App\papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function show(papers $papers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function edit(papers $papers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, papers $papers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function destroy(papers $papers)
    {
        //
    }
}

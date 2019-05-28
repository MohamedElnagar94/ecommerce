<?php

namespace App\Http\Controllers\agency;

use App\latestnews;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LatestnewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agency.latest_news');
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
     * @param  \App\latestnews  $latestnews
     * @return \Illuminate\Http\Response
     */
    public function show(latestnews $latestnews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\latestnews  $latestnews
     * @return \Illuminate\Http\Response
     */
    public function edit(latestnews $latestnews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\latestnews  $latestnews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, latestnews $latestnews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\latestnews  $latestnews
     * @return \Illuminate\Http\Response
     */
    public function destroy(latestnews $latestnews)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\agency;

use App\index;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agency.index');
        // return 'mohamed';
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
     * @param  \App\index  $index
     * @return \Illuminate\Http\Response
     */
    public function show(index $index)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\index  $index
     * @return \Illuminate\Http\Response
     */
    public function edit(index $index)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\index  $index
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, index $index)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\index  $index
     * @return \Illuminate\Http\Response
     */
    public function destroy(index $index)
    {
        //
    }
}

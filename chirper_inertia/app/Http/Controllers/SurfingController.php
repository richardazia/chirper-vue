<?php

namespace App\Http\Controllers;

use App\Models\Surfing;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SurfingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Surfing/index', [
          //
        ]);
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
     * @param  \App\Models\Surfing  $surfing
     * @return \Illuminate\Http\Response
     */
    public function show(Surfing $surfing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surfing  $surfing
     * @return \Illuminate\Http\Response
     */
    public function edit(Surfing $surfing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Surfing  $surfing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surfing $surfing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surfing  $surfing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surfing $surfing)
    {
        //
    }
}

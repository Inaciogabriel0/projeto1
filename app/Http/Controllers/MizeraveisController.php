<?php

namespace App\Http\Controllers;

use App\Models\Mizeraveis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MizeraveisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mizeraveis = Mizeraveis::all();
        return view('site.home', compact('mizeraveis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mizeraveis $mizeraveis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mizeraveis $mizeraveis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mizeraveis $mizeraveis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mizeraveis $mizeraveis)
    {
        //
    }
}

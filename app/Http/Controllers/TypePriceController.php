<?php

namespace App\Http\Controllers;

use App\Model\TypePrice;
use Illuminate\Http\Request;

class TypePriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(TypePrice::get(), 200);
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
     * @param  \App\Model\TypePrice  $typePrice
     * @return \Illuminate\Http\Response
     */
    public function show(TypePrice $typePrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\TypePrice  $typePrice
     * @return \Illuminate\Http\Response
     */
    public function edit(TypePrice $typePrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\TypePrice  $typePrice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypePrice $typePrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\TypePrice  $typePrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypePrice $typePrice)
    {
        //
    }
}

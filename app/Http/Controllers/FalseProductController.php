<?php

namespace App\Http\Controllers;

use App\False_product;
use Illuminate\Http\Request;

class FalseProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.index');
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
     * @param  \App\False_product  $false_product
     * @return \Illuminate\Http\Response
     */
    public function show(False_product $false_product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\False_product  $false_product
     * @return \Illuminate\Http\Response
     */
    public function edit(False_product $false_product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\False_product  $false_product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, False_product $false_product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\False_product  $false_product
     * @return \Illuminate\Http\Response
     */
    public function destroy(False_product $false_product)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\False_product;
use App\Models\Subcategory;
use App\Http\Requests\FalseProductRequest;
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
      $false_products = False_product::all();
        return view('admin.product.index',compact('false_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $subcategories = Subcategory::all();
        return view('admin.product.create',compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FalseProductRequest $request)
    {
        //
        $inputs = $request->all();
        False_product::create($inputs);
        $false_products = False_product::all();
        return view('admin.product.index',compact('false_products'))->with(['messageok' => 'Registro exitoso']);

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

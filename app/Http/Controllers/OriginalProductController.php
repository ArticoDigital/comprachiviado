<?php

namespace App\Http\Controllers;

use App\Models\Original_product;
use App\Models\False_product;
use App\Http\Requests\OriginalProductRequest;
use Illuminate\Http\Request;

class OriginalProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        //$subcategories = Subcategory::all();
        //return 'mostrando'.$id;
        return view('admin.product.originalproduct.create',compact('id'));//,compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OriginalProductRequest $request, $id)
    {
        //
        $inputs = $request->all();
        Original_product::create($inputs);
        $false_products = False_product::all();
          return view('admin.product.index',compact('false_products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Original_product  $original_product
     * @return \Illuminate\Http\Response
     */
    public function show(Original_product $original_product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Original_product  $original_product
     * @return \Illuminate\Http\Response
     */
    public function edit(Original_product $original_product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Original_product  $original_product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Original_product $original_product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Original_product  $original_product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Original_product $original_product)
    {
        //
    }
}

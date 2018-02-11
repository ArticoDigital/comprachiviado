<?php

namespace App\Http\Controllers;

use App\Models\Media_product;
use Illuminate\Http\Request;

class MediaProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $media_products = Media_product::all();
        return view('admin.media_product.index',compact('media_products'));
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
     * @param  \App\Media_product  $media_product
     * @return \Illuminate\Http\Response
     */
    public function show(Media_product $media_product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Media_product  $media_product
     * @return \Illuminate\Http\Response
     */
    public function edit(Media_product $media_product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Media_product  $media_product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media_product $media_product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Media_product  $media_product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media_product $media_product)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Size;
use App\Models\Color;
use App\Models\inventory;
use App\Models\category;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;

class ProductController extends Controller
{
    public function showAddProduct(){
        $categories = category::all();

        return view('product.Add_product')->with(['categories'=>$categories]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::all();

        return view('product.productList')->with(['products'=>$products]);
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
    public function store(StoreproductRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}

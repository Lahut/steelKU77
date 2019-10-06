<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        $productsDeleted = Product::onlyTrashed()->get();
       // dd($posts); //dump and die
        return view('products.index', ['products' => $products,
        'productsDeleted' => $productsDeleted]);
    }

    public function deleted()
    {
        $products = Product::get();
        $productsDeleted = Product::onlyTrashed()->get();
       // dd($posts); //dump and die
        return view('products.deleted', ['products' => $products,
        'productsDeleted' => $productsDeleted]);
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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    public function showEdit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {        
        if ($product->deleted_at == null) {
            $product->delete();
        } else {
            $product->restore();
        }
        return $this->index();
    }

    public function restore(Product $product)
    {  
        $product->restore();        
        return $this->index();
    }
}

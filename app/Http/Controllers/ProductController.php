<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Routing\Controllers\Middleware;

class ProductController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public static function middleware(): array
    {
        return [
            new Middleware('permission:product-list|product-create|product-edit|product-delete', only: ['index', 'show']),
            new Middleware('permission:product-create', only: ['create', 'store']),
            new Middleware('permission:product-edit', only: ['edit', 'update']),
            new Middleware('permission:product-delete', only: ['destroy']),
        ];
    }


    /**
    * Display a listing of the resource.
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
       $products = Product::latest()->paginate(1);
        return view('products.index', compact('products'));
    }

    /**
    * Show the form for creating a new resource.
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('products.createproduct');
   }
    /**
    * Store a newly created resource in storage.
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       request()->validate([
           'name' => 'required',
           'detail' => 'required',
       ]);

       Product::create($request->all());

       return redirect()->route('products.index')
           ->with('success', 'Product created successfully.');
   }
    /**
    * Display the specified resource.
    * @param  \App\Product  $product
    * @return \Illuminate\Http\Response
    */
   public function show(Product $product)
   {
       return view('products.show', compact('product'));
   }
    /**
    * Show the form for editing the specified resource.
    * @param  \App\Product  $product
    * @return \Illuminate\Http\Response
    */
   public function edit(Product $product)
   {
       return view('products.editproduct', compact('product'));
   }
/**
    * Update the specified resource in storage.
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Product  $product
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Product $product)
   {
       request()->validate([
           'name' => 'required',
           'detail' => 'required',
       ]);
       $product->update($request->all());
       return redirect()->route('products.index')
           ->with('success', 'Product updated successfully');
   }
    /**
    * Remove the specified resource from storage.
    * @param  \App\Product  $product
    * @return \Illuminate\Http\Response
    */
   public function destroy(Product $product)
   {
       $product->delete();
       return redirect()->route('products.index')
           ->with('success', 'Product deleted successfully');
   }
}

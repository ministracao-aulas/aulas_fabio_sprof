<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('products/list', compact('products'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        if($product)
        {
            if($product->available)
                return view('products/product', compact('product'));
            else
                return view('products/unvailable', compact('product'));
        }
        else
            return view('products/404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if($product)
            $product->destroy($id);

        return redirect()->route('product_list');
    }

    /**
     * Create fake products
     * ##### Cria produtos fake
     * - Basta chamar a rota: /createfakeproduct
     */
    public function createFakeProduct()
    {
        $p                  = new Product;
        $p->category        = 2;
        $p->manufacturer    = 3;
        $p->name            = "produto " . rand(10,100);
        $p->stock_qtd       = "10";
        $p->available       = rand(0, 1);
        $p->price           = "10.75";
        $p->save();

        return redirect()
            ->route('product_list');

    }
}

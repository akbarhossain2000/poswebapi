<?php

namespace App\Http\Controllers\AndroposWeb;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_data   = Product::all();
        return $product_data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $inputs     = $request->all();

        $productObj = new Product([
            'product_name'      => $request->product_name,
            'description'       => $request->description,
            'image'             => $request->image,
            'code'              => $request->code,
            'subcat_id'         => $request->subcat_id,
            'cost'              => $request->cost,
            'price'             => $request->price,
            'is_active'         => $request->is_active
        ]);

        $productObj->save();

        return $productObj;
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
        $product_data   = Product::find($id);

        return $product_data;
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
        $product_data   = Product::find($id);

        $inputs     = $request->all();

        $product_update = $product_data->update($inputs);

        return json_encode($product_update);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product_data   = Product::find($id);

        $product_delete = $product_data->delete();

        return json_encode($product_delete);
    }
}

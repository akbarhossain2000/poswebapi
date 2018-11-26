<?php

namespace App\Http\Controllers\AndroposWeb;

use App\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategory_data   = Subcategory::all();
        return $subcategory_data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $inputs = $request->all();

        $subcatObj  = new Subcategory([
            'cat_id'        => $request->cat_id,
            'cat_name'      => $request->cat_name,
            'is_active'     => $request->is_active
        ]);

        $subcatObj->save();
        return $subcatObj;
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
        $subcategory_data   = Subcategory::find($id);

        return $subcategory_data;
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
        $subcategory_data   = Subcategory::find($id);

        $inputs     = $request->all();
        $subcategory_update = $subcategory_data->update($inputs);

        return json_encode($subcategory_update);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory_data   = Subcategory::find($id);

        $subcategory_delete = $subcategory_data->delete();

        return json_encode($subcategory_delete);
    }
}

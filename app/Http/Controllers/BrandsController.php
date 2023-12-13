<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brands=Brand::all();
        return view('brands.index')->with('brands',$brands);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.create');
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
        $num = $request->input('num');
        $name = $request->input('name');
        $local = $request->input('local');
        $time = $request->input('time');
        Brand::create([
            'id' => $num,
            'bname' => $name,
            'location' => $local,
            'brand_time' => $time
        ]);
        return redirect('brands');
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
        $brands=Brand::findOrFail($id);
        return view('brands.show')->with('brands',$brands);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands=Brand::findOrFail($id);
        return view('brands.edit')->with('brands',$brands);
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
        $brand = Brand::findOrFail($id);
        $brand->$num = $request->input('num');
        $brand->$name = $request->input('name');
        $brand->$local = $request->input('local');
        $brand->$time = $request->input('time');
        $brand->save();
        return redirect('brands');
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
        $brand= Brand::findOrfail($id);
        $brand->delete();
        return redirect('brands');
    }
}

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
        //
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bname=$request->input('bname');
        $location=$request->input('location');
        $brand_time=$request->input('brand_time');

        $brand=Brand::create([
            'bname'=>$bname,
            'location'=>$location,
            'brand_time'=>$brand_time,
        ]);

        return redirect('brands');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand=Brand::findOrfail($id);
        $monitors=$brand->monitors;
        return view('brands.show',['brand'=>$brand,'monitors'=>$monitors]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand= Brand::findOrfail($id);
        return view('brands.edit',['brand'=>$brand]);

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
        $brand=Brand::findOrfail($id);

        $brand->bname=$request->input('bname');
        $brand->location=$request->input('location');
        $brand->brand_time=$request->input('brand_time');
        $brand->save();

        return redirect('brands');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand=Brand::findOrfail($id);
        $brand->delete();
        return redirect('brands');
    }
}
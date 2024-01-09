<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMonitorRequest;
use App\Models\Monitor;
use App\Models\Brand;
use Illuminate\Http\Request;
class MonitorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monitors = Monitor::paginate(25);
        $panel = Monitor::Allpanel()->pluck('monitors.panel', 'monitors.panel');
        // 把資料送給 view
        return view('monitors.index', ['monitors' => $monitors, 'panel'=>$panel, 'selectedpanel'=>null]);
    }
    public function have_speaker()
    {
        $monitors= Monitor::have_speaker()->paginate(25);
        $panel= Monitor::allpanel()->pluck('monitors.panel','monitors.panel');
        return view('monitors.index',['monitors'=>$monitors,'panel'=>$panel, 'selectedpanel'=>null]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::orderBy('brands.id', 'asc')->pluck('brands.bname', 'brands.id');
        return view('monitors.create', ['brands' =>$brands, 'brandsSelected' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMonitorRequest $request) 
       {
        $id = $request->input('id');
        $product_model = $request->input('product_model');
        $bid = $request->input('bid');
        $size= $request->input('size');
        $nits = $request->input('nits');
        $hz = $request->input('hz');
        $panel = $request->input('panel');
        $speaker = $request->input('speaker');
        $resolution = $request->input('resolution');
        $price = $request->input('price');
        $monitor=Monitor::create([
            'id'=>$id,
            'product_model'=>$product_model,
            'bid'=>$bid,
            'size'=>$size,
            'nits'=>$nits,
            'hz'=>$hz,
            'panel'=>$panel,
            'speaker'=>$speaker,
            'resolution'=>$resolution,
            'price'=>$price]);
        return redirect('monitors');
    }
    public function panel(Request $request)
    {
        $monitors = Monitor::all();
        $monitor =Monitor::panel($request->input('pan'))->get();
        $panel = Monitor::allpanel()->pluck('monitors.panel', 'monitors.panel');
        $selectedpanel=$request->input('pan');
        return view('monitors.index', ['monitors' => $monitor, 'panel'=>$panel,'selectedpanel'=>$selectedpanel]);
    }    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $monitor= Monitor::findOrfail($id);
        return view('monitors.show')->with('monitor',$monitor); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        parent::edit($id);
        $monitor= Monitor::findOrFail($id);
        $brands = Brand::orderBy('brands.id', 'asc')->pluck('brands.bname', 'brands.id');
        $selected_tags = $monitor->brands->id;
        return view('monitors.edit', ['monitor' =>$monitor, 'brands' => $brands, 'brandsSelected' => $selected_tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateMonitorRequest $request, $id)
        {
        $monitor= Monitor::findOrFail($id);
        $monitor->id = $request->input('id');
        $monitor->product_model = $request->input('product_model');
        $monitor->bid = $request->input('bid');
        $monitor->size= $request->input('size');
        $monitor->nits = $request->input('nits');
        $monitor->hz = $request->input('hz');
        $monitor->panel = $request->input('panel');
        $monitor->speaker = $request->input('speaker');
        $monitor->resolution = $request->input('resolution');
        $monitor->price = $request->input('price');
        $monitor->save();
        return redirect('monitors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $monitor= Monitor::findOrfail($id);
        $monitor->delete();
        return redirect('monitors');
    }
}

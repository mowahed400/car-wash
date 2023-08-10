<?php

namespace App\Http\Controllers;

use App\Models\WashingPoint;
use Illuminate\Http\Request;

class WashingPointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Washings=WashingPoint::all();
        return view('dashboard.address.WashingPoint',compact('Washings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        WashingPoint::create([
            'title'=>$request->title,
            'address'=>$request->address,
            'number'=>$request->number,

        ]);
        return redirect()->back();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WashingPoint  $washingPoint
     * @return \Illuminate\Http\Response
     */
    public function show(WashingPoint $washingPoint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WashingPoint  $washingPoint
     * @return \Illuminate\Http\Response
     */
    public function edit(WashingPoint $washingPoint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WashingPoint  $washingPoint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $Washings=WashingPoint::findorfail($id);
        $Washings->update([
           'title'=>$request->title,
            'address'=>$request->address,
            'number'=>$request->number

        ]);
             return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WashingPoint  $washingPoint
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        WashingPoint::find($id)->delete();
        return redirect()->back();
       }
}

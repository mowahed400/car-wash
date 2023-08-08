<?php

namespace App\Http\Controllers;

use App\Models\Connect;
use Illuminate\Http\Request;

class ConnectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Connects=Connect::all();
        return view('connect',compact('Connects'));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Connect  $connect
     * @return \Illuminate\Http\Response
     */
    public function show(Connect $connect)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Connect  $connect
     * @return \Illuminate\Http\Response
     */
    public function edit(Connect $connect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Connect  $connect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $Connects= Connect::find(1);
        $Connects->update([

            'whats' => $request->whats,
            'worktime' => $request->worktime,
            'email' => $request->email,
            'twlinke' => $request->twlinke,
            'inslinke' => $request->inslinke,
            'usermail' => $request->usermail,
            'cover' => $request->cover,


        ]);
             return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Connect  $connect
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Connect::find($id)->delete();

        return redirect()->back();

        }

}

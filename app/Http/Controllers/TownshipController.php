<?php

namespace App\Http\Controllers;

use App\Models\Township;
use Illuminate\Http\Request;

class TownshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $townships = Township::latest()->paginate(10);
        return  [
            "status" => 1,
            "message" => "Success.. ",
            "data" => $townships
        ];
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
        $request->validate([
            'name' => 'required',
            'name_manager' => 'required',
            'address' => 'required'
        ]);

        $township = new Township();
        $township->name = $request->name;
        $township->name_manager = $request->name_manager;
        $township->address = $request->address;
        $township->save();
        return [
            "status" => 1,
            "message" => "Your bank food has been created!",
            "data" => $township
        ];

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Township  $township
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $township = Township::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\township  $township
     * @return \Illuminate\Http\Response
     */
    public function edit(Township $township)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Township  $township
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Township $township)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Township  $township
     * @return \Illuminate\Http\Response
     */
    public function destroy(Township $township)
    {
        //
    }
}

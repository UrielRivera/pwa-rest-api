<?php

namespace App\Http\Controllers;

use App\Models\BankFood;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class BankFoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bankFoods = BankFood::latest()->paginate(10);
        return[
            "status" => 1,
            "message" => "Success..",
            "data" => $bankFoods
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

    
        $bankFood = new BankFood();
        $bankFood->name = $request->name;
        $bankFood->name_manager = $request->name_manager;
        $bankFood->address = $request->address;

        $bankFood->save();
        return [
            "status" => 1,
            "message" => "Your bank food has been created!",
            "data" => $bankFood
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BankFood  $bankFood
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bankFood =  BankFood::find($id);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BankFood  $bankFood
     * @return \Illuminate\Http\Response
     */
    public function edit(BankFood $bankFood)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BankFood  $bankFood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BankFood $bankFood)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankFood  $bankFood
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankFood $bankFood)
    {
        //
    }
}

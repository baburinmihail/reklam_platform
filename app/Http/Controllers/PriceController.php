<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($zakaz , $counter)
    {

        $today = date("Y-m-d H:i:s");
        $year = mb_substr($today, 0, 4);
        $month = mb_substr($today, 5, 2);
        $day = mb_substr($today, 8, 2);
        
        $new_price = new Price();

        $user_id_price_in= $zakaz['user_id'];
        $user_id_price_exit= $counter['promouter_id'];
        $platform_procent = $zakaz['platform_procent'];
        $user_procent = $zakaz['user_procent'];
        $income = $zakaz['price_project'];
        $expenses = $zakaz['price_project'] * ($user_procent/100);


        $new_price->user_id_price_in = $user_id_price_in;
        $new_price->user_id_price_exit = $user_id_price_exit;
        $new_price->id_zakaz = $zakaz->id;
        $new_price->income = $income;


        $new_price->expenses = $expenses;
        $new_price->platform_procent = $platform_procent;
        $new_price->user_procent = $user_procent;

        $new_price->day = $day;
        $new_price->month = $month;
        $new_price->year = $year;

        
        $new_price->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Price $price)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Price $price)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Price $price)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistick;
use Illuminate\Support\Facades\DB;
use App\Models\Price;

class StatistickController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (session('group') === 'admin'){
            $count_link = DB::table('statisticks')->sum('count_link');
            $block_link = DB::table('statisticks')->sum('block_link');
            $count_zakaz = DB::table('zakazs')->count('id');
            $more_money = DB::table('statisticks')->sum('price_link');
            
            //echo $count_zakaz;

            return view('statistick.index' , [
                'count_link' => $count_link,
                'block_link' => $block_link,
                'count_zakaz' => $count_zakaz,
                'more_money' => $more_money,
            ]);
        }else{
            return redirect('/zakaz');
        }
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        if (empty(session('email'))){

            return redirect('/authmez');
           
        }else{
            $wallet = new Price();
            $my_wallet = $wallet -> my_wallet($id);
            return view('statistick.mywallet' , [
                'my_wallet' => $my_wallet
            ]);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zakaz;
use App\Models\Counter;

class CounterController extends Controller
{
    public function my_count_add(Request $request)
    {   

        $run = new Counter();

        if ($run->counter($request) === 'подписан'){
            return redirect()->back()->withSuccess('Вы уже подписаны на этот заказ!');
        }else{
            
            $new_count = new Counter();

            $new_count->zakaz_id = $request->zakaz_id;
            $new_count->promouter_id = session('id') ;
            $new_count->reklamodatel_id = $request->reklamodatel_id;
    
            $new_count->save();
            
            return redirect()->back()->withSuccess('Вы подписались!');
        }
        

    }

    public function my_count_delit(Request $request){


        $run = new Counter();
        $run -> counter_delit($request);
        return redirect()->back()->withSuccess('Вы отписались!');


    }
}

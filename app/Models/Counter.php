<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Counter extends Model
{
    use HasFactory;

    public function counter($data){
       
        
        //$counters = DB::table('counters')->where('zakaz_id', $data['zakaz_id'])->first();



        $counters = DB::table('counters')
                ->where('zakaz_id', '=', $data['zakaz_id'])
                ->where('promouter_id', '=', session('id'))
                ->get();

     
  
        if (empty($counters['zakaz_id']) and empty($counters['promouter_id'])) {
            //true числа нет
            $status = 'не_подписан';
        }else{
            //false число есть
            $status = 'подписан';
        }

        return $status;
        
    }

    public function counter_delit($data){
        
        DB::table('counters')->where('id', '=', $data['id_counter_delit'])->delete();

    }
}

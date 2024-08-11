<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Zakaz extends Model
{
    use HasFactory;

    public function my_zakaz($data){
        //echo '<pre>';
        //print_r($data);
        //echo '</pre>';
        
        $zakaz = DB::table('zakazs')
                ->where('user_id', session('id'))
                ->get();

        $result = json_decode($zakaz, true);
        return $result;

    }

    public function you_zakaz($data){
        
        $you_zakaz = DB::table('counters')
                    ->where('promouter_id', session('id'))
                    ->get();
        $result = json_decode($you_zakaz, true);
        return $result;

    }


}

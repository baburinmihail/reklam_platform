<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Statistick extends Model
{
    use HasFactory;

    public function link_access($data){
       
        //var_dump($data);
        $today = date("Y-m-d H:i:s");

        DB::table('statisticks')->insert([

            'count_link' => 1,
            'block_link' => 0,
            'price_link' => $data['price'],
            'created_at' => $today,
            'updated_at' => $today

        ]);

    }

    public function link_error(){
       
        $today = date("Y-m-d H:i:s");

        DB::table('statisticks')->insert([

            'count_link' => 0,
            'block_link' => 1,
            'price_link' => 0,
            'created_at' => $today,
            'updated_at' => $today

        ]);

    }
}

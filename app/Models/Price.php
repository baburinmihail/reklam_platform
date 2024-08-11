<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Price extends Model
{
    use HasFactory;


    //echo '<pre>';
    //print_r($request);
    //echo '</pre>';

    public function myprice_promounetr(){ 

        $price = DB::table('prices')
                    ->where('user_id_price_exit', '=', session('id'))
                    ->get();
        return $price;
    }

    public function myprice_reklamshik(){ 

        $price = DB::table('prices')
                    ->where('user_id_price_in', '=', session('id'))
                    ->get();
        return $price;
    }

    public function my_wallet($id){ 

        $today = date("Y-m-d H:i:s");
        $year = mb_substr($today, 0, 4);
        $month = mb_substr($today, 5, 2);
        $day = mb_substr($today, 8, 2);  

        switch (session('group')) {
            case 'promouter':
                $price_day = DB::table('prices')
                        ->where('id_zakaz', '=', $id)
                        ->where('user_id_price_in', '=', session('id'))
                        ->where('day', '=', $day)
                        ->where('month', '=', $month)
                        ->where('year', '=', $year)
                        ->sum('expenses');

                $price_month = DB::table('prices')
                        ->where('id_zakaz', '=', $id)
                        ->where('user_id_price_in', '=', session('id'))
                        ->where('month', '=', $month)
                        ->where('year', '=', $year)
                        ->sum('expenses');

                $price_year = DB::table('prices')
                        ->where('id_zakaz', '=', $id)
                        ->where('user_id_price_in', '=', session('id'))
                        ->where('year', '=', $year)
                        ->sum('expenses');
                        //echo'promouter';

                //$count_link = DB::table('statisticks')->sum('count_link');
                
                break;
            case 'reklamodatel':
                $price_day = DB::table('prices')
                        ->where('id_zakaz', '=', $id)
                        ->where('user_id_price_in', '=', session('id'))
                        ->where('day', '=', $day)
                        ->where('month', '=', $month)
                        ->where('year', '=', $year)
                        ->sum('income');

                $price_month = DB::table('prices')
                        ->where('id_zakaz', '=', $id)
                        ->where('user_id_price_in', '=', session('id'))
                        ->where('month', '=', $month)
                        ->where('year', '=', $year)
                        ->sum('income');

                $price_year = DB::table('prices')
                        ->where('id_zakaz', '=', $id)
                        ->where('user_id_price_in', '=', session('id'))
                        ->where('year', '=', $year)
                        ->sum('income');
                        //echo'reklamodatel';

                break;
            case 'admin':
                echo "У админа не должно быть денег.";
                die();
                break;
        }
        
        $count_day = DB::table('prices')
            ->where('id_zakaz', '=', $id)
            ->where('user_id_price_in', '=', session('id'))
            ->where('day', '=', $day)
            ->where('month', '=', $month)
            ->where('year', '=', $year)
            ->get();

        $count_month = DB::table('prices')
            ->where('id_zakaz', '=', $id)
            ->where('user_id_price_in', '=', session('id'))
            ->where('month', '=', $month)
            ->where('year', '=', $year)
            ->get();

        $count_year = DB::table('prices')
            ->where('id_zakaz', '=', $id)
            ->where('user_id_price_in', '=', session('id'))
            ->where('year', '=', $year)
            ->get();

        /*
        echo ('$price_day='.$price_day.'___');
        echo ('$price_month='.$price_month.'___');
        echo ('$price_year='.$price_year.'___');
        echo ('$count_day='.count($count_day).'___');
        echo ('$count_month='.count($count_month).'___');
        echo ('$count_year='.count($count_year).'___');
        */

        $my_count_day = count($count_day);
        $my_count_month = count($count_month);
        $my_count_year = count($count_year);

        $price = [
            'price_day' => $price_day,
            'price_month' => $price_month,
            'price_year'=> $price_year,
            'count_day' => $my_count_day,
            'count_month' => $my_count_month,
            'count_year' => $my_count_year
        ];

        return $price;
    }
}

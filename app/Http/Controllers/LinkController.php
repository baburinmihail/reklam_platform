<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zakaz;
use App\Models\Counter;
use App\Models\Statistick;
use App\Models\Price;
use App\Http\Controllers\PriceController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LinkController extends Controller
{
    public function link_redirect(Request $request){

        //echo '<pre>';
        //print_r($request);
        //echo '</pre>';

        $counter = Counter::find($request['id_counter']);
        $zakaz = Zakaz::find($request['id_zakaz']);
        $target = $zakaz['url_project'];
        $price = $zakaz['price_project'];
        //$platform_procent = $zakaz['platform_procent'];
        //$user_procent = $zakaz['user_procent'];

        //if ($a ==$b and $c !=$d)

        if (!empty($zakaz) and !empty($counter)) {
            
            //для статистики
            $data = ['price' => $price];
            $statistik = new Statistick();
            $statistik -> link_access($data);


            //для кошельков пользователей
            $price_run = new PriceController();
            $price_run -> store($zakaz , $counter);

            Log::info('Пользователь перешел по ссылке промоутера, заказа с id:'.$request['id_zakaz']);

            return redirect($target);

        }else{

            $statistik = new Statistick();
            $statistik -> link_error();
            Log::warning('Пользователь не смог перейти по ссылке');
            echo '404';
        }


    }

}

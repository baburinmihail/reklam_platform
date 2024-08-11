<?php

namespace App\Http\Controllers;

use App\Models\Zakaz;
use Illuminate\Http\Request;
use App\Models\Price;
use Illuminate\Support\Facades\DB;
use App\Models\Counter;


class ZakazController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        //проверка на логин
        if (empty(session('email'))){

            return redirect('/authmez');
           
        }else{
            //$my_price = Price::orderBy('created_at','desc')->get(); 


            //проверка на группу
            if (session('group') === 'promouter'){
                
                //promouter
                $zakaz = Zakaz::orderBy('created_at','desc')->get();

                $countZakaz = new Zakaz();
                $you_zakaz = $countZakaz->you_zakaz(session('id'));

                $price = new Price();
                $my_price = $price->myprice_promounetr();
                
                
                return view('zakaz.index',[
                    'zakaz' => $zakaz,
                    'you_zakaz'=>$you_zakaz,
                    'my_price'=>$my_price
                ]);
            }
            else{
                //рекламщик
                $subscribe = Counter::orderBy('created_at','desc')->get(); 

                $myZakaz = new Zakaz();
                $zakaz = $myZakaz->my_zakaz(session('id'));

                $price = new Price();
                $my_price = $price->myprice_reklamshik();
         

                return view('zakaz.index',[
                    'zakaz' => $zakaz,
                    'my_price'=>$my_price,
                    'subscribe'=>$subscribe,
                ]);
            }
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (empty(session('email'))){

            return redirect('/authmez');
           
        }else{
            return view('zakaz.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //echo '<pre>';
        //print_r($_POST);
        //echo '</pre>';
        

        
        if (empty($request['status'])) {
            //true числа нет
            $status = 0;
        }else{
            //false число есть
            $status = 1;
        }

        
        if ($request->price_project > 1){
            $platform_procent = 30;
            $user_procent = 70;
        }else{
            $platform_procent = 20;
            $user_procent = 80;
        }

        $new_zakaz = new Zakaz();
        $new_zakaz->name_project = $request->name_project;
        $new_zakaz->topic_project = $request->topic_project; 
        $new_zakaz->descripthion_project = $request->descripthion_project; 
        $new_zakaz->url_project = $request->url_project;
        
        $new_zakaz->price_project = $request->price_project;
        $new_zakaz->platform_procent = $platform_procent;
        $new_zakaz->user_procent = $user_procent;
        
        $new_zakaz->user_id = $request->user_id; 
        $new_zakaz->status = $status;

        $new_zakaz->save();
        
        return redirect()->back()->withSuccess('Заказ добавлен!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Zakaz $zakaz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Zakaz $zakaz)
    {
        
        if (empty(session('email'))){

            return redirect('/authmez');
           
        }else{
            return view('zakaz.edit' , [
                'zakaz' => $zakaz
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Zakaz $zakaz)
    {
        if (empty($request['status'])) {
            //true числа нет
            $status_new = 0;
        }else{
            //false число есть
            $status_new = 1;
        }

        $zakaz->name_project = $request->name_project;
        $zakaz->topic_project = $request->topic_project; 
        $zakaz->descripthion_project = $request->descripthion_project; 
        $zakaz->url_project = $request->url_project;
        
        $zakaz->price_project = $request->price_project;  
        $zakaz->user_id = $request->user_id; 
        $zakaz->status = $status_new;

        $zakaz->save();
        
        return redirect()->back()->withSuccess('Заказ обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Zakaz $zakaz)
    {
        $zakaz -> delete();
        return redirect()->back()->withSuccess('Заказ удален!');
    }
}

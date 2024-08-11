<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authmez;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function login(Request $request)
    {   
        
        $run = new Authmez();
        $final = $run->login($request);
        
        if ($final === 'неправильный e-mail') {
            //echo "неправильный e-mail";
            return redirect()->back()->withSuccess('Неправильный e-mail');

        } elseif ($final === 'Пользователь авторизовался') {
            //echo 'Пользователь авторизовался';
            if (session('group') === 'admin'){
                return redirect('/admin');
            }else{
                return redirect('/zakaz');
            }
            

        } else {
            //echo 'неправильный пароль';
            return redirect()->back()->withSuccess('Неправильный пароль');
            
        }
        
        
    }
}

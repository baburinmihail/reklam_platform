<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class Authmez extends Model
{
    use HasFactory;

    public function login($data)
    {
        $email = $data['email'];
        $password = $data['password'];

        
        //try email
        $origin_email = DB::table('authmezs')->where('email', $email)->value('email');


        if (empty($origin_email)) {
            //true числа нет
            $final = 'неправильный e-mail';
            return $final;
        }else{
            //false; e-mail совпал
            $origin_password = DB::table('authmezs')->where('email', $email)->value('password');
        }
        

        //проверка хешированного пароля
        if (password_verify($password, $origin_password)){
            
            $my_user = DB::table('authmezs')->where('email', $email)->first();
            
            session(['id' => $my_user->id]);
            session(['email' => $my_user->email]);
            session(['username' => $my_user->username]);
            session(['password' => $my_user->password]);
            session(['group' => $my_user->group]);
            session(['created_at' => $my_user->created_at]);
            session(['updated_at' => $my_user->updated_at]);
  
            $final = 'Пользователь авторизовался';
            return $final;
        }else{
        
            $final = 'неправильный пароль';
            return $final;
        }

    }
}

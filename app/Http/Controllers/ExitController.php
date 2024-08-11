<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExitController extends Controller
{
    public function exit()
    {   
        session()->forget([
                            'id', 
                            'email', 
                            'username' , 
                            'password' , 
                            'group' , 
                            'created_at' , 
                            'updated_at'
                            ]);
        
        return redirect('/zakaz');                     
        
    }
}

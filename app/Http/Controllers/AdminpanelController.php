<?php

namespace App\Http\Controllers;

use App\Models\Adminpanel;
use Illuminate\Http\Request;
use App\Models\Authmez;
use Illuminate\Support\Facades\DB;

class AdminpanelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (session('group') === 'admin'){
            $all_user = Authmez::orderBy('created_at','desc')->get();
        
            return view('adminpanel.index' , [
                'all_user' => $all_user
            ]);
        }else{
            return redirect('/zakaz');
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Adminpanel $adminpanel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)    
    {

        if (session('group') === 'admin'){
            $user = DB::table('authmezs')->where('id', $request['id_user'])->first();

            return view('adminpanel.edit' , [
                'user' => $user
            ]);
        }else{
            return redirect('/zakaz');
        }
        //echo $request['id_user'];


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Authmez $authmez)
    {
        if (session('group') === 'admin'){
        DB::table('authmezs')
              ->where('id', $_POST['myid'])
              ->update( ['email' => $request->email]);

        DB::table('authmezs')
              ->where('id', $_POST['myid'])
              ->update( ['username' => $request->username]);
              
        DB::table('authmezs')
              ->where('id', $_POST['myid'])
              ->update( ['group' => $request->group]);  
              
        return redirect()->back()->withSuccess('Пользователь именен!');

        }else{
            return redirect('/zakaz');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adminpanel $adminpanel)
    {
        
        echo 'delit';
        
    }
}

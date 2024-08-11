<?php

namespace App\Http\Controllers;

use App\Models\Authmez;
use Illuminate\Http\Request;

class AuthmezController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('authmez.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authmez.registr');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //echo '<pre>';
        //print_r($_POST);
        //echo '</pre>';

        $password_noHash = $request['password'];
        $password_Hash = password_hash($password_noHash,PASSWORD_DEFAULT);
        
        $new_user = new Authmez();
        $new_user->email = $request->email;
        $new_user->username = $request->username;
        $new_user->password = $password_Hash;
        $new_user->group = $request->group;

        $new_user->save();
        return redirect('/authmez');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Authmez $authmez)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Authmez $authmez)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Authmez $authmez)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Authmez $authmez)
    {
        //
    }
}

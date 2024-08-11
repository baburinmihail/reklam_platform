<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zakaz;

class StatusController extends Controller
{
    public function status_edit(Request $request) { 

        $zakaz = Zakaz::find($_POST['id']);

        //echo '<pre>';
        //print_r($_POST);
        //echo '</pre>';
        

        if ($_POST['status'] == 1){
            $status = 0;
            echo $status;
        }else{
            $status = 1;
            echo $status;
        }

        $zakaz->status = $status;
        $zakaz->save();

        return response()->json(['success'=>'Form is successfully submitted!']);
        

      }
      
}

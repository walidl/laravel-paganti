<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PagantiController extends Controller
{
    function getPaganti(){

      $paganti = DB::select("

          SELECT *
          FROM paganti

      ");

      // dd($paganti);

      return view('paganti',["paganti" => $paganti]);
    }

    function getPaganteById($id){

      $pagante = DB::select("

        SELECT *
        FROM paganti
        WHERE id = $id
      ");

      // dd($pagante);

      return view('pagante-id',["pagante" => $pagante]);



    }
}

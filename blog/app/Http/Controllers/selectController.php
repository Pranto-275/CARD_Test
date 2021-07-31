<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class selectController extends Controller
{
    public function onSelect()
    {
        $jsonData = DB::select('select * from students');
        $jsonString = json_encode($jsonData);
        $selectData = json_decode($jsonString);

        return view('Home', ['selectkey' => $selectData]);
    }
}

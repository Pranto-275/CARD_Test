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

    function onInsert(Request $req)
    {
        $name = $req->input('name');
        $roll = $req->input('roll');
        $class = $req->input('class');
        $result = DB::insert('INSERT INTO `students`(`name`, `lastname`, `address`) VALUES (?,?,?)', [$name, $class, $roll]);

        if ($result == true) {

            return "Succcess";
        } else {
            return "fail";
        }
    }


    public function insertform()
    {
        return view('Insert');
    }
}

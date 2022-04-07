<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function  index()
    {
        echo "Index Function";
    }
    public function  test()
    {
        return view('home.test');
    }
    public function  param($id,$number)
    {
        //echo "Parameter 1:", $id;
        //echo "Parameter 2:", $number;
        //echo "<br>Sum parameters: ", $id+$number;
        return view('home.test2',
        [
        'id' => $id,
        'number' => $number

    ]);
    }
}

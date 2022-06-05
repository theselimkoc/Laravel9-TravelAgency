<?php

namespace App\Http\Controllers;

use App\Models\Packages as Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function  index()
    {
        $sliderdata=Package::limit(4)->get();
        $packagelist1=Package::limit(6)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata ,
            'packagelist1'=>$packagelist1
        ]);
    }

    public function  package($id)
    {
        $data=Package::find($id);
        $images = DB::table('images')->where('package_id',$id)->get();
        return view('home.package',[
            'data'=>$data ,
            'images'=>$images
        ]);
    }
    public function  package_all()
    {

        return view('home.package_all');
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
    public function  save(Request $request)
    {
        //echo "Save Function<br>";
        //echo "First Name:",$_REQUEST["fname"];
        //echo "<br>Last Name:",$_REQUEST["lname"];
        return view('home.test2',
            [
                'fname' => $_REQUEST["fname"],
                'lname' =>  $_REQUEST["lname"]

            ]);

    }
}

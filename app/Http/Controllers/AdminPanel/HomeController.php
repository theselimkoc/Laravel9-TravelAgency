<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view("admin.index");
    }
    public function setting()
    {
        $data= Settings::first();
        if ($data==null)
        {
            $data = new Settings();
            $data->title = 'Project Title';
            $data->save();
            $data= Settings::first();
        }
        return view("admin.setting", ['data' =>$data]);
    }
    public function settingUpdate(Request $request)
    {
        echo "Save Settings";
    }
}

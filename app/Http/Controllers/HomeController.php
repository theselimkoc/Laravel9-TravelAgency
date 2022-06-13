<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Packages as Package;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function maincategorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    //
    public function index()
    {
        $page = 'home';
        $sliderdata = Package::limit(4)->get();
        $packagelist1 = Package::limit(6)->get();
        $setting = Setting::first();

        return view('home.index', [
            'page' => $page,
            'setting' => $setting,
            'sliderdata' => $sliderdata,
            'packagelist1' => $packagelist1
        ]);
    }

    public function about()
    {
        $setting = Setting::first();

        return view('home.about', [
            'setting' => $setting,
        ]);
    }

    public function references()
    {
        $setting = Setting::first();

        return view('home.references', [
            'setting' => $setting,
        ]);
    }

    public function contact()
    {
        $setting = Setting::first();

        return view('home.contact', [
            'setting' => $setting,
        ]);
    }

    public function faq()
    {
        $setting = Setting::first();
        $datalist = Faq::all();
        return view('home.faq', [
            'setting' => $setting,
            'datalist' => $datalist
        ]);
    }

    public function storemessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = request()->ip();

        $data->save();

        return redirect()->route('contact')->with('info', 'Your message has been sent, Thank You.');
    }

    public function package($id)
    {
        $data = Package::find($id);
        $images = DB::table('images')->where('package_id', $id)->get();
        return view('home.package', [
            'data' => $data,
            'images' => $images
        ]);
    }

    public function categorypackages($id)
    {

        $category = Category::find($id);
        $packages = DB::table('packages')->where('category_id', $id)->get();
        return view('home.categorypackages', [
            'category' => $category,
            'packages' => $packages
        ]);
    }

    public function test()
    {
        return view('home.test');
    }

    public function param($id, $number)
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

    public function save(Request $request)
    {
        //echo "Save Function<br>";
        //echo "First Name:",$_REQUEST["fname"];
        //echo "<br>Last Name:",$_REQUEST["lname"];
        return view('home.test2',
            [
                'fname' => $_REQUEST["fname"],
                'lname' => $_REQUEST["lname"]

            ]);

    }

    public function logoutuser(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

    }

    public function loginadmincheck(Request $request)
    {
        dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('error');
    }


}

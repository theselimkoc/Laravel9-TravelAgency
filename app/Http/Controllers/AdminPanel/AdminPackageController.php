<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Packages as Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPackageController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $data = Package::all();
            return view('admin.package.index', [
                'data' => $data
            ]);
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
            $data = Category::all();
            return view('admin.package.create', [
                'data' => $data
            ]);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            //
            $data = new Package();
            $data->category_id = $request->category_id;
            $data->user_id = 0;// $request->user_id;
            $data->title = $request->title;
            $data->keywords = $request->keywords;
            $data->description = $request->description;
            $data->detail = $request->detail;
            $data->price = $request->price;
            $data->info = $request->info;
            $data->status = $request->status;
            if ($request->file('image')) {
                $data->image = $request->file('image')->store('images');
            }
            $data->save();
            return redirect('admin/package');
        }

        /**
         * Display the specified resource.
         *
         * @param \App\Models\Package $package
         * @return \Illuminate\Http\Response
         */
        public function show(Package $package, $id)
        {
            //
            $data = Package::find($id);
            return view('admin.package.show', [
                'data' => $data
            ]);
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param \App\Models\Package $package
         * @return \Illuminate\Http\Response
         */
        public function edit(Package $package, $id)

        {
            //
            $data = Package::find($id);
            $datalist = Category::all();
            return view('admin.package.edit', [
                'data' => $data,
                'datalist' => $datalist
            ]);
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param \App\Models\Package $package
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Package $package, $id)
        {
            //

            $data = Package::find($id);
            $data->category_id = $request->category_id;
            $data->user_id = 0;// $request->user_id;
            $data->title = $request->title;
            $data->keywords = $request->keywords;
            $data->detail = $request->detail;
            $data->description = $request->description;
            $data->info = $request->info;
            $data->price = $request->price;
            $data->status = $request->status;
            if ($request->file('image')) {
                $data->image = $request->file('image')->store('images');
            }
            $data->save();
            return redirect('admin/package');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param \App\Models\Package $package
         * @return \Illuminate\Http\Response
         */
        public function destroy(Package $package, $id)
        {
            //
            $data = Package::find($id);
            if ($data->image && Storage::disk('public')->exists($data->image)) {
                Storage::delete($data->image);
            }
            $data->delete();
            return redirect('admin/package');

        }
    }

@extends('layouts.adminbase')

@section('title', 'Show Package : '.$data->title)


@section('content')
    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height:1200px;">
            <div class="col-lg-12">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Show Package</li>
                </ol>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Detail</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th style="width: 150px">Id</th>
                                        <td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Category</th>
                                        <td>
                                            {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category,$data->category->title) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <td>{{$data->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Keywords</th>
                                        <td>{{$data->keywords}}</td>
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                        <td>{{$data->price}}</td>
                                    </tr>
                                    <tr>
                                        <th>Detail</th>
                                        <td>{!! $data->detail !!}</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>{{$data->description}}</td>
                                    </tr>
                                    <tr>
                                        <th>Info</th>
                                        <td>{{$data->info}}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <td>
                                            @if($data->image)
                                                <img src="{{Storage::url($data->image)}}" style="height: 100px">
                                            @endif</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{$data->status}}</td>
                                    </tr>
                                    <tr>
                                        <th>Created Date</th>
                                        <td>{{$data->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <th>Updated Date</th>
                                        <td>{{$data->updated_at}}</td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <a href="{{route('admin.package.edit',['id'=>$data->id])}}"
                           class="btn btn-block btn-info btn-sm" style="width: 100px"> Edit</a>
                    </div>
                    <div class="col-sm-3 ">
                        <a href="{{route('admin.package.destroy',['id'=>$data->id])}}"
                           onclick="return confirm('Deleting !! Are you sure ?')"
                           class="btn btn-block btn-danger btn-sm" style="width: 100px"> Delete</a>
                    </div>
                </div>
            </div>
            <!--END PAGE CONTENT -->


@endsection

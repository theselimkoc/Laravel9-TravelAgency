@extends('layouts.adminbase')

@section('title', 'Package List')


@section('content')
    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height:1200px;">
            <div class=".col-lg-12"></div>
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Package List </li>
                </ol>
                <div>
                    <div class="row">
                        <div class="col-lg-2">
                            <a href="{{route('admin.package.create')}}" class="btn btn-block btn-default btn-sm" style="width: 200px"> Add Package</a>

                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Package List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th style="width: 40px">Edit</th>
                                        <th style="width: 40px">Delete</th>
                                        <th style="width: 40px">Show</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $data as $rs )
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title) }} </td>
                                        <td>{{$rs->title}}</td>
                                        <td>{{$rs->price}}</td>
                                        <td>
                                            @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                            @endif
                                        </td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin.package.edit',['id'=>$rs->id])}}" class="btn btn-primary"><i class="icon-pencil icon-white"></i> Edit</a></td>
                                        <td><a href="{{route('admin.package.destroy',['id'=>$rs->id])}}" class="btn btn-danger" onclick="return confirm('Deleting !! Are you sure ?')"><i class="icon-remove icon-white"></i> Delete</a></td>
                                        <td><a href="{{route('admin.package.show',['id'=>$rs->id])}}" class="btn btn-success"><i class="icon-eye-open"></i> Show</a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <!--END PAGE CONTENT -->


@endsection

@extends('layouts.adminbase')

@section('title', 'Category List')


@section('content')
    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height:1200px;">
            <div class="row">
                <div class="col-lg-12">


                    <h2>Category List</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active">Category List </li>
                </ol>
                <hr />
                <div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bordered Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Keywords</th>
                                        <th>Description</th>
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
                                        <td>{{$rs->title}}</td>
                                        <td>{{$rs->keywords}}</td>
                                        <td>{{$rs->description}}</td>
                                        <td>{{$rs->image}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="/admin/category/edit/{{$rs->id}}" class="btn btn-primary"><i class="icon-pencil icon-white"></i> Edit</a></td>
                                        <td><a href="/admin/category/delete/{{$rs->id}}" class="btn btn-danger"><i class="icon-remove icon-white"></i> Delete</a></td>
                                        <td><a href="/admin/category/show/{{$rs->id}}" class="btn"><i class="icon-eye-open"></i> View</a></td>
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

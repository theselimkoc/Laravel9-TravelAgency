@extends('layouts.adminbase')

@section('title', 'Edit Category : '.$data->title)


@section('content')
    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height:1200px;">
            <div class="row">
                <div class="col-lg-12">


                    <h2>Edit Category: {{$data->title}} </h2>
                </div>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active">Edit Category</li>
                </ol>
            <hr />
            <div class="panel panel-default">
                <div class="panel-heading">
                    Category Elements
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="/admin/category/update/{{$data->id}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$data->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Keywords</label>
                                    <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <input type="text" class="form-control" name="description" value="{{$data->description}}">
                                </div>
                                <div class="form-group">
                                    <label for="img">Select image:</label>
                                    <input type="file" id="img" name="img" accept="image/*">
                                    <input type="submit">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>

                                </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Data</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



    </div>
    <!--END PAGE CONTENT -->


@endsection

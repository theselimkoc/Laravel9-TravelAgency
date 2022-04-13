@extends('layouts.adminbase')

@section('title', 'Add Category')


@section('content')
    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height:1200px;">
            <div class="row">
                <div class="col-lg-12">


                    <h2>Add Category </h2>
                </div>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active">Add Category</li>
                </ol>
            <hr />
            <div class="panel panel-default">
                <div class="panel-heading">
                    Category Elements
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="/admin/category/store" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Keywords</label>
                                    <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <input type="text" class="form-control" name="description" placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <label for="img">Select image:</label>
                                    <input type="file" id="img" name="img" accept="image/*">
                                    <input type="submit">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>

                                </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



    </div>
    <!--END PAGE CONTENT -->


@endsection

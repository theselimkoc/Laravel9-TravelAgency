@extends('layouts.adminbase')

@section('title', 'Edit Category : '.$data->title)


@section('content')
    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height:1200px;">
            <div class="row">
                <div class="col-lg-12"><h2>Edit Category: {{$data->title}} </h2></div>
            </div>
            <div class="col-lg-12">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Edit Category</li>
                </ol>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Category Elements
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="{{route('admin.category.update',['id'=>$data->id])}}"
                                      method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Parent Category</label>

                                        <select class="form-control select2" name="parent_id" style="">
                                            <option value="0" selected="selected">Main Category</option>
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}"
                                                        @if ($rs->id == $data->parent_id) selected="selected" @endif>
                                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" class="form-control" name="title" value="{{$data->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Keywords</label>
                                        <input type="text" class="form-control" name="keywords"
                                               value="{{$data->keywords}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <input type="text" class="form-control" name="description"
                                               value="{{$data->description}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="img">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image">
                                                <label class="custom-file-label" for="exampleInputFile">Choose Image
                                                    File</label>
                                            </div>
                                        </div>
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

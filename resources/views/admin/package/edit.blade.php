@extends('layouts.adminbase')

@section('title', 'Edit Category : '.$data->title)
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height:1200px;">
            <div class="row">
                <div class="col-lg-12"><h2>Edit Package: {{$data->title}} </h2></div>
            </div>
            <div class="col-lg-12">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Edit Package</li>
                </ol>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Package Elements
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="{{route('admin.package.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Parent Category</label>
                                    <select class="form-control select2" name="category_id" >
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif>
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
                                    <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <input type="text" class="form-control" name="description" value="{{$data->description}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price</label>
                                    <input type="number" class="form-control" name="price" value="{{$data->price}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Detail</label>
                                    <textarea class="form-control" id="detail" name="detail" value="{{$data->detail}}">
{{$data->detail}}
                                    </textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#detail' ) )
                                            .then( editor => {
                                                console.log( editor );
                                            } )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>

                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Info</label>
                                    <input type="text" class="form-control" name="info" value="{{$data->info}}">
                                </div>
                                <div class="form-group">
                                    <label for="img">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose Image File</label>
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


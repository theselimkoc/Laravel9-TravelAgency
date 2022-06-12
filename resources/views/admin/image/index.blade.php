@extends('layouts.adminwindow')

@section('title', 'Package Image Gallery')


@section('content')


    <h3>{{$package->title}}</h3>
    <hr>
    <form role="form" action="{{route('admin.image.store',['pid'=>$package->id])}}" method="post"
          enctype="multipart/form-data">
        @csrf

        <div class="input-small">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title">
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                <label class="custom-file-label" for="exampleInputFile">Choose File</label>
            </div>
            <div class="input-group-append">
                <input class="input-group-text" type="submit" value="Upload">
            </div>
        </div>
    </form>
    <div class="panel-heading">
        Package Image List
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th style="width: 40px">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $images as $rs )
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->title}}</td>
                        <td>
                            @if($rs->image)
                                <img src="{{Storage::url($rs->image)}}" style="height: 100px">
                            @endif
                        </td>
                        <td><a href="{{route('admin.image.destroy',['pid'=>$package->id,'id'=>$rs->id])}}"
                               class="btn btn-danger" onclick="return confirm('Deleting !! Are you sure ?')"><i
                                    class="icon-remove icon-white"></i> Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--END PAGE CONTENT -->

@endsection

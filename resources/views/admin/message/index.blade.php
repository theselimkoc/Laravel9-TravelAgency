@extends('layouts.adminbase')

@section('title', 'Contact Form Message List')


@section('content')
    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height:1200px;">
            <div class=".col-lg-12"></div>
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Message List</li>
            </ol>
            <div>
                <div class="row">
                    <div class="col-lg-2">

                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Message List
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Subject</th>
                                    <th>Status</th>
                                    <th style="width: 40px">Delete</th>
                                    <th style="width: 40px">Show</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $data as $rs )
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->name}}</td>
                                        <td>{{$rs->email}}</td>
                                        <td>{{$rs->phone}}</td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}"
                                               class="btn btn-danger"
                                               onclick="return confirm('Deleting !! Are you sure ?')"><i
                                                    class="icon-remove icon-white"></i> Delete</a></td>
                                        <td>
                                            <a href="{{route('admin.message.show',['id'=>$rs->id])}}"class="btn btn-success"
                                               onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                Show
                                            </a>
                                        </td>
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

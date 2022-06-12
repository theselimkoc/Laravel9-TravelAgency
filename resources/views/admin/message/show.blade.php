@extends('layouts.adminwindow')

@section('title', 'Show Message : '.$data->name)


@section('content')
    <!--PAGE CONTENT -->
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Detail Message Data</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 150px">Id</th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <td>{{$data->subject}}</td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>{!! $data->message !!}</td>
                        </tr>
                        <tr>
                            <th>Ip</th>
                            <td>{{$data->ip}}</td>
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
                        <tr>
                            <th>Admin Note :</th>
                            <td>
                                <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}"
                                      method="post">
                                    @csrf
                                    <textarea cols="100" id="note" name="note" value="{{$data->note}}">{{$data->note}}</textarea>
                                    <hr>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update Note</button>
                                    </div>
                                </form>
                            </td>
                        </tr>

                    </table>
                </div>
                <div class="row">
                    <div class="col-sm-3 ">
                        <a href="{{route('admin.message.destroy',['id'=>$data->id])}}"
                           onclick="return confirm('Deleting !! Are you sure ?')"
                           class="btn btn-block btn-danger btn-sm" style="width: 100px"> Delete</a>
                    </div>
                </div>
            </div>
            <!--END PAGE CONTENT -->


@endsection

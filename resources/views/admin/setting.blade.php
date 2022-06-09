@extends('layouts.adminbase')

@section('title', 'Settings')


@section('content')
    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height:1200px;">
            <div class="row">
                <div class="col-lg-12">


                    <h2>Settings</h2>



                </div>
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Settings </li>
                </ol>
            </div>

            <hr />
            <form role="form" action="{{route('admin.setting.update')}}" method="post" >
            <div class="panel-body">
                @csrf
                <ul class="nav nav-pills">
                    <li class="active"><a href="#general-pills" data-toggle="tab">General</a>
                    </li>
                    <li class=""><a href="#smtp-pills" data-toggle="tab">Smtp Email</a>
                    </li>
                    <li class=""><a href="#socialmedia-pills" data-toggle="tab">Social Media</a>
                    </li>
                    <li class=""><a href="#aboutus-pills" data-toggle="tab">About Us</a>
                    </li>
                    <li class=""><a href="#contact-pills" data-toggle="tab">Contact Page</a>
                    </li>
                    <li class=""><a href="#references-pills" data-toggle="tab">References</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="general-pills">
                        <h4>General Tab</h4>
                        <input type="hidden" id="id" value="{{$data->id}}" class="form-control">
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
                            <label for="exampleInputEmail1">Company</label>
                            <input type="text" class="form-control" name="company" value="{{$data->company}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" class="form-control" name="address" value="{{$data->address}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{$data->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Fax</label>
                            <input type="text" class="form-control" name="fax" value="{{$data->fax}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="text" class="form-control" name="email" value="{{$data->email}}">
                        </div>
                        <div class="form-group">
                            <label for="img">Icon</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="icon">
                                    <label class="custom-file-label" for="exampleInputFile">Choose Icon File</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <select class="form-control" name="status">
                                <option selected="selected">{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="smtp-pills">
                        <h4>Smtp Tab</h4>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Smtpserver</label>
                            <input type="text" class="form-control" name="smtpserver" value="{{$data->smtpserver}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Smtp E-mail</label>
                            <input type="text" class="form-control" name="smtpemail" value="{{$data->smtpemail}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Smtp password</label>
                            <input type="text" class="form-control" name="smtppassword" value="{{$data->smtppassword}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Smtp port</label>
                            <input type="text" class="form-control" name="smtpport" value="{{$data->smtpport}}">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="socialmedia-pills">
                        <h4>Social Media Tab</h4>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Facebook</label>
                            <input type="text" class="form-control" name="facebook" value="{{$data->facebook}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Instagram</label>
                            <input type="text" class="form-control" name="instagram" value="{{$data->instagram}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Twitter</label>
                            <input type="text" class="form-control" name="twitter" value="{{$data->twitter}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Youtube</label>
                            <input type="text" class="form-control" name="youtube" value="{{$data->youtube}}">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="aboutus-pills">
                        <h4>About Us</h4>
                        <div class="form-group">
                            <label for="exampleInputEmail1">About Us</label>
                            <input type="text" class="form-control" name="aboutus" value="{{$data->aboutus}}">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact-pills">
                        <h4>Contact</h4>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contact</label>
                            <input type="text" class="form-control" name="contact" value="{{$data->contact}}">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="references-pills">
                        <h4>References</h4>
                        <div class="form-group">
                            <label for="exampleInputEmail1">References</label>
                            <input type="text" class="form-control" name="references" value="{{$data->references}}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                    </div>
                </div>
            </form>
            </div>




        </div>




    </div>
    <!--END PAGE CONTENT -->


@endsection

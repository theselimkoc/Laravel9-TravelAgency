@extends('layouts.adminbase')

@section('title', 'Add FAQ')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <!--PAGE CONTENT -->
    <div id="content">

        <div class="inner" style="min-height:1200px;">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Add FAQ </h2>
                </div>
            </div>
            <div class="col-lg-12">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Add FAQ</li>
                </ol>
                <hr/>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        FAQ Elements
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="{{route('admin.faq.store')}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Question</label>
                                        <input type="text" class="form-control" name="question" placeholder="Question">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Answer</label>
                                        <textarea class="form-control" id="answer" name="answer">

                                    </textarea>
                                        <script>
                                            ClassicEditor
                                                .create(document.querySelector('#answer'))
                                                .then(editor => {
                                                    console.log(editor);
                                                })
                                                .catch(error => {
                                                    console.error(error);
                                                });
                                        </script>

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

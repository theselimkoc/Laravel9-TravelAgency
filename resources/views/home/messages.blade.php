@if($message = Session::get('successs'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <strong>{{ $message }}</strong>
        </button>
    </div>
@endif

@if($message = Session::get('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">
            <strong>{{ $message }}</strong>
        </button>
    </div>
@endif

@if($message = Session::get('warning'))
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>

    </div>
@endif

@if($message = Session::get('info'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if($errors->any())
    <div class="alert alert-info block">
        <button type="button" class="close" data-dismiss="alert">
            Something went wrong :/
        </button>
    </div>
@endif

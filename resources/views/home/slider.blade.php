<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            @foreach($sliderdata as $rs)
                <li style="background-image: url('{{Storage::url($rs->image)}}');">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="col-md-12 col-md-offset-0 text-center slider-text">
                            <div class="slider-text-inner js-fullheight">
                                <div class="desc">
                                    <p><span>{{$rs->title}} </span></p>
                                    <p>
                                        <a href="{{route('package',['id'=>$rs->id])}}" class="btn btn-primary btn-lg">Book
                                            Now</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</aside>

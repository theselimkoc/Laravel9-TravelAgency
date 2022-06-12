<nav id="fh5co-menu-wrap" role="navigation">
    <ul class="sf-menu" id="fh5co-primary-menu">
        <li style="color: #1a1a1a" ><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('about')}}">About</a></li>
        <li><a href="{{route('references')}}">References</a></li>
        @php
            $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
        @endphp
        @foreach($mainCategories as $rs)
            <li>
                <a href="#" class="fh5co-sub-ddown">{{$rs->title}}</a>

                    @if(count($rs->children))
                    <ul class="fh5co-sub-menu">
                        @include('home.categorytree',['children'=>$rs->children])
                    </ul>
                    @endif

            </li>
        @endforeach
        <li><a href="services.html">Services</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="{{route('contact')}}">Contact</a></li>
    </ul>
</nav>

<nav id="fh5co-menu-wrap" role="navigation">
    <ul class="sf-menu" id="fh5co-primary-menu">
        <li style="color: #1a1a1a" ><a href="{{route('home')}}">Home</a></li>
        @php
            $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
        @endphp
        @foreach($mainCategories as $rs)
            <li>
                <a href="#" class="fh5co-sub-down">{{$rs->title}}</a>

                    @if(count($rs->children))
                        @include('home.categorytree',['children'=>$rs->children])
                    @endif

            </li>
        @endforeach
        <li><a href="services.html">Services</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</nav>

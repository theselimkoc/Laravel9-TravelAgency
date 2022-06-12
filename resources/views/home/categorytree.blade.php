@foreach($children as $subcategory)

    @if(count($subcategory->children))
        <li style="color: #c67605;font-family: normal ">{{$subcategory->title}}</li>
        <ul class="fh5co-sub-menu">
            @include('home.categorytree',['children'=>$subcategory->children])
        </ul>
        <hr>
    @else
        <li><a href="{{route('categorypackages',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">
                {{$subcategory->title}}</a>
        </li>
    @endif
@endforeach

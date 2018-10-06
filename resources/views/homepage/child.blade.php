<ul>
    @foreach($childs as $child)
        <li>
            {{ $child->name }} - {{$child->position->position}}
            @if(count($child->childs))
                @include('homepage.child',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>
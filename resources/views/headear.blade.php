<header class="">
    <h1>header</h1>
   <ul>
        @foreach ($names as $name)
            <li>{{$name}}</li>
        @endforeach
   </ul>
    <p>
        {{$data}}
    </p>
</header>
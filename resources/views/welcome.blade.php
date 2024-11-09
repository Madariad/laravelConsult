<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- {{$data['name']}} --}}

    {{-- @extends('content') --}}
    {{-- @section('children')

    <h1>This is parrent</h1>
    @show --}}



    {{-- view yield content ???????? no working? --}}

    {{-- with yield blade route --}}

    {{-- @yield('content', "<h1>default content</h1>") --}}
    
    {{-- or --}}

    {{-- @hasSection ('content')
         @yield('content')
    @else
        <h2>no content</h2>
    @endif --}}



    {{-- @includeWhen(true, 'footer', ['some' => 'data']) --}}
    {{-- @includeUnless(false, 'footer', ['some' => 'data']) --}}


    

    {{-- @php
        $names = ['john', 'smith', 'bellow', 'mike'];
    @endphp

    @include('headear', ['data' => 'data is welcome page', 'names' => $names])


    <div class="">
        <h2>main content</h2>
    </div>

    @include('footer') --}}


{{--     
   {{"<div class=''>test</div>"}}
   and 

   {!! "<div class=''>test</div>" !!} --}}

   {{-- {!! "<script>alert('hello')</script>" !!} --}}
    {{-- @php
        $state = ['test data', 'traning', 'bla bla'];
    @endphp

    @foreach ($state as $stat)
    {{@$loop->index}}
        {!!$stat. "<br/>"!!}
    @endforeach --}}

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagination</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
        @forelse ($data as $element)
          <tr>
            <th scope="row">{{$element->name}}</th>
            <td>{{$element->descrition}}</td>
          </tr>
          @empty
          <tr>
            <td>no data</td>
          </tr>
          @endforelse

        </tbody>
    </table>

    <div class="mt-5">
        {{ $data->links() }}
    </div>

    {{-- <div class="mt-5">
        {{ $data->links('pagination::bootstrap-5') }}
    </div> --}}

    {{-- <div class="">
       Total users:  {{$data->total()}}
    </div>

    
    <div class="">
        Total users:  {{$data->currentPage()}}
     </div> --}}
        
</body>
</html>

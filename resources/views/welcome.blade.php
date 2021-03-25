@extends('template.main')
@section('content')
<div class="container">
    {{-- tables des articles  --}}
    <h1 class="text-center text-white pb-5"> Nos articles: </h1>
    
    <table class="table text-white">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">Auteur</th>
            <th scope="col">Show</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $item)
            <tr>
              <th scope="row"></th>
              <td>{{$item->title}}</td>
              <td>{{$item->users->name}}</td>
              <td>
                <a href="/articles/{{$item->id}}" class="btn btn-warning">Show</a>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
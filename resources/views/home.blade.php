@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>

<div class="container">
    {{-- tables des articles  --}}
    <h1 class="text-center pb-5"> Nos articles: </h1>
    <a href="/articles/create" class="btn btn-primary p-3 mb-5">Ajouter un article</a>
    <a href="/mails">Voir mes mails</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">Auteur</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $item)
            <tr>
              <th scope="row"></th>
              <td>{{$item->title}}</td>
              <td>{{$item->users->name}}</td>
              <td>
                @can("article-edit", $item)
                <a href="/articles/{{$item->id}}/edit">Edit</a>
                @endcan
              </td>
              <td>
                <form action="/articles/{{$item->id}}" method="POST">
                  @csrf
                  @method("DELETE")
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
<div>
  <h1>Les utilisatrices: </h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Email</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
          <th scope="row"></th>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          {{-- <td>
            @can("article-edit", $user)
            <a href="/articles/{{$user->id}}/edit">Edit</a>
            @endcan
          </td> --}}
          <td>
            @can("user-delete", $user)
            <form action="/users/{{$user->id}}" method="POST">
              @csrf
              @method("DELETE")
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            @endcan
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

</div>
@stop

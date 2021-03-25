@extends('template.main')
@section('content')

<div class="container text-white ">
    <h1 class="text-center pb-5">Ajouter un article </h1>
    <form action="/articles" method="POST">
        @csrf
        <div>
            <div class="form-group">
                <label for="title">Titre : </label>
                <input type="text" class="form-control" name="title">

            </div>
            <div class="form-group">
                <label for="content">Contenu : </label>
                <textarea name="content" id="" cols="100" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
</div>

@endsection
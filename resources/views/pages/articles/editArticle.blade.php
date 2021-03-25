@extends('template.main')
@section('content')

<div class="container text-white ">
    <h1 class="text-center">Modifier un article </h1>
    <form action="/articles/{{$edit->id}}" method="POST">
        @csrf
        @method("PATCH")
        <div>
            <div class="form-group">
                <label for="title">Titre : </label>
                <input type="text" class="form-control" name="title" value="{{old('title') ? old('title') : $edit->title}}">
            </div>
            <div class="form-group">
                <label for="content">Contenu : </label>
                <textarea name="content" id="" cols="100" rows="5">{{old('content') ? old('content') : $edit->content}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>

        </div>
    </form>
</div>

@endsection
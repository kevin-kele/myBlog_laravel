@extends('base')

@section('content')

<div class="container">
   <h1 class="text-center mt-5">Poster un nouvelle articles</h1>
   <form action="{{route('article.store')}}" method="post">
        @csrf
        <div class="col-12">
            <div class="form-groupe ">
                <label>Titre</label>
                <input type="text" name="title" class="form-control">
                @error('title')
                <span class="invalid-feedback" role="alert"> {{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-groupe">
                <label>Subtitle</label>
                <input type="text" name="subtitle" class="form-control">
                @error('subtitle')
                <span class="invalid-feedback" role="alert"> {{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-groupe">
                <label>content</label>
                <textarea id="tiny-editor" type="text" name="content" class="form-control"> </textarea>
                @error('content')
                <span class="invalid-feedback" role="alert"> {{$message}}</span>
                @enderror
            </div>
            <script>
                tinymce.init({
                  selector: '#tiny-editor'
                });
              </script>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <button type="submit" class='btn btn-primary'>Envoyer</button>
        </div>
   </form>
</div>
@endsection
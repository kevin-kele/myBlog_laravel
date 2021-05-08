@extends('base')

@section('content')
<div class="container">
    <h1 class="text-center my-5"> Articles</h1>
    <div class="d-flex justify-content-center">
        <a href="{{route('article.create')}}" class="btn btn-info my-3"><i class="fas fa-plus"></i> Ajouter un article</a> 
    </div>
    
    <table class="table table-hover">
        <thead>
          <tr class="table-active">
            <th scope="col">ID</th>
            <th scope="col">Titre</th>
            <th scope="col">Creé le</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->title}}</td>
            <td>{{$article->dateFormatted()}}</td>
            <td class='d-flex'> 
                <a href="#" class='btn btn-warning mx-3'> <i class="fas fa-edit"></i></a>
                <a href="#" class='btn btn-danger mx-3'><i class="fas fa-trash-alt"></i></a>
             </td>
            </tr>
            @endforeach
            
        </tbody>
      </table>
      <div class="d-flex justify-content-center mt-5">
        {{$articles->links('vendor.pagination.custom')}}
    </div>
</div>
@endsection
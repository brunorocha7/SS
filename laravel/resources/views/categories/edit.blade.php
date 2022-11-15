@extends('categories.layout')
@section('content')
  
<div class="card mt-4">
  <div class="card-header">Editar Categorias</div>
  <div class="card-body">
       
      <form action="{{ url('category/' .$categories->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$categories->id}}" id="id" />

        <div class="mb-3">
          <label class="form-label">Nome</label>
          <input type="text" name="name" id="name" value="{{$categories->name}}" class="form-control">
        </div>

        <a href="{{ url('/category') }}" class="btn btn-light" title="Voltar">Voltar</a>
        <input type="submit" value="Alterar" class="btn btn-success">
    </form>
    
  </div>
</div>
  
@stop
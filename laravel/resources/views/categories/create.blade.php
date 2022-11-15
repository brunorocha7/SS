@extends('categories.layout')
@section('content')

<div class="card mt-4">
  <div class="card-header">Criar nova Categories</div>
  <div class="card-body">
       
      <form action="{{ url('category') }}" method="post">
        {!! csrf_field() !!}

        <div class="mb-3">
          <label class="form-label">Nome</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>

        <a href="{{ url('/category') }}" class="btn btn-light" title="Voltar">Voltar</a>
        <input type="submit" value="Salvar" class="btn btn-success">
    </form>
    
  </div>
</div>
  
@stop
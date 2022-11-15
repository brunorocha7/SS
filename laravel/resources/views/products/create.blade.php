@extends('products.layout')
@section('content')
  
<div class="card mt-4">
  <div class="card-header">Criar nova Produto</div>
  <div class="card-body">
       
      <form action="{{ url('product') }}" method="post">
        {!! csrf_field() !!}

        <div class="mb-3">
          <label class="form-label">Nome</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Categoria</label>
          <select name="category_id" class="form-select" aria-label="Category ID"> 
            <option>Selecione...</option>         
              @foreach($categories as $item)
                  <option value="{{ $item->id }}">
                      {{ $item->name }}
                  </option>
              @endforeach
          </select>
        </div>

        <a href="{{ url('/product') }}" class="btn btn-light" title="Voltar">Voltar</a>
        <input type="submit" value="Salvar" class="btn btn-success">
    </form>
    
  </div>
</div>
  
@stop
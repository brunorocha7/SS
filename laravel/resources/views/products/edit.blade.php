@extends('products.layout')
@section('content')
  
<div class="card mt-4">
  <div class="card-header">Editar Produtos</div>
  <div class="card-body">
       
      <form action="{{ url('product/' .$product->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$product->id}}" id="id" />

        <div class="mb-3">
          <label class="form-label">Nome</label>
          <input type="text" name="name" id="name" value="{{$product->name}}" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Categoria</label>
          <select name="category_id" class="form-select">
              @foreach($categories as $item)
                  <option value="{{ $item->id }}" {{ ($product->category_id == $item->id) ? 'selected' : '' }}>
                      {{ $item->name }}
                  </option>
              @endforeach
          </select>
        </div>

        <a href="{{ url('/product') }}" class="btn btn-light" title="Voltar">Voltar</a>
        <input type="submit" value="Alterar" class="btn btn-success">
    </form>
    
  </div>
</div>
  
@stop
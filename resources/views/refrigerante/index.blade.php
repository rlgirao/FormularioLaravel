@extends('layouts.modelo')


@section('content')

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"><input type="checkbox" class="checkthis" /></th>
      <th scope="col">Marca</th>
      <th scope="col">Tipo</th>
      <th scope="col">Sabor</th>
      <th scope="col">Litragem</th>
      <th scope="col">Valor R$</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Editar</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($refrigerante as $refrigerantes)
        <tr>
            <td><input type="checkbox" class="checkthis" /></td>
            <td>{{ $refrigerantes->marca }}</td>
            <td>{{ $refrigerantes->tipo }}</td>
            <td>{{ $refrigerantes->sabor }}</td>
            <td>{{ $refrigerantes->litragem }}</td>
            <td>{{ $refrigerantes->valor }}</td>
            <td>{{ $refrigerantes->quantidade }}</td>
            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
            <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
        </tr>
  </tbody>
</table>

@endsection

@section('titulo','Inicio')
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
              <div class="card-header">{{ __('Lista de Refrigerantes') }}</div>
                <br>
                <form class="form-group">
                  <div class="row">
                    <div class="col-sm-8 offset-sm-1">
                      <input class="form-control mr-sm-2" type="search" placeholder="Buscar">
                    </div>
                    <div class="col-sm-1">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </div>
                    <div class="col-sm-1">
                      <a class="btn btn-primary" href="{{ route('refrigerantes.create') }}">Novo</a>
                    </div>
                  </div>

                  <br>

                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col"><input type="checkbox" id="scales" name="id"></th>
                        <th scope="col" >Marca</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Sabor</th>
                        <th scope="col">Litragem</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col"></th>
                        <th scope="col"></th>

                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($refrigerante as $refrigerantes)
                      <tr>
                        <td><input type="checkbox" id="scales" name="id"></td>
                        <td>{{ $refrigerantes->marca }}</td>
                        <td>{{ $refrigerantes->tipo }}</td>
                        <td>{{ $refrigerantes->sabor }}</td>
                        <td>{{ $refrigerantes->litragem }}</td>
                        <td>{{ $refrigerantes->valor }}</td>
                        <td>{{ $refrigerantes->quantidade }}</td>
                        <td>
                          <a class="btn btn-success" href="{{ route('refrigerantes.create') }}">
                            <i class="far fa-edit"></i>
                          </a>
                        </td>
                        <td>
                          @method('DELETE')
                          <a class="btn btn-danger" href="{{ route('refrigerantes.create') }}">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                </form>  
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

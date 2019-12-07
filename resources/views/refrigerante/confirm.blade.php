@extends('layouts.app')

@section('content')

<div class="content py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2>Deseja excluir o registro {{ $refrigerante->marca }}</h2>
                <form action="{{ route('refrigerantes.destroy', $refrigerante-> id) }}">
                @csrf 
                    <button type="submit" class="redonda btn btn-danger">
                        <i class="fas fa-trash-alt"></i>Excluir
                    </button>
                    <a class="redonda btn btn-secundary" href="{{ route('cancelar') }}">
                        <i class="fas fa-ban"></i>Cancelar    
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
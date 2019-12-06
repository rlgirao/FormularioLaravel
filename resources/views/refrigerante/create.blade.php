@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastrar Refrigerantes') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ (route('refrigerantes.store')) }}">
                    @csrf
                        <div class="form-group">
                            <label for="inputMarca">Marca</label>
                            <input type="text" name="marca" class="form-control" id="inputMarca" placeholder="Marca">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="inputTipo">Tipo</label>
                                    <select id="tipo" name="tipo" class="form-control">
                                        <option selected>Pet</option>
                                        <option>Garrafa</option>
                                        <option>Lata</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="inputSabor">Sabor</label>
                                    <select id="sabor" name="sabor" class="form-control">
                                        <option selected>Cola</option>
                                        <option>Laranja</option>
                                        <option>Limao</option>
                                        <option>Uva</option>
                                        <option>Guarana</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="inputLitragem">Litragem</label>
                                    <select id="litragem" name="litragem" class="form-control">
                                        <option selected>250mL</option>
                                        <option>600mL</option>
                                        <option>1L</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="inputValor">Valor</label>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend2">R$</span>
                                        <input type="number" name="valor" class="form-control" id="inputValor" placeholder="0,00">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="inputQuantidade">Quantidade</label>
                                    <input type="number" name="quantidade" class="form-control" id="inputQuantidade" placeholder="Quantidade">
                                </div>
                            </div>
            
                        </div>
                        
                        <br>

                        <div class="formg-roup">
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </div>
                                <div class="col-sm-2">
                                    <a class="btn btn-danger" href="{{ route('cancelar') }}">Cancelar</a>
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                        </div>

                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

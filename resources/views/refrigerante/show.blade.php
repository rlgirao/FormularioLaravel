<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
	<div class="row">
        <div class="col-md-12">
        <h4>Refrigerantes</h4>
        <div class="table-responsive"> 
              <table id="mytable" class="table table-bordred table-striped">
                   <thead>
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>Marca</th>
                   <th>Tipo</th>
                   <th>Sabor</th>
                   <th>Litragem</th>
                   <th>Valor R$</th>
                   <th>Quantidade</th>
                   <th>Editar</th>   
                   <th>Deletar</th>
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
                    @endforeach
                    
                
                    
                    </tbody>
                        
                </table>

            <div class="clearfix"></div>
            <ul class="pagination pull-right">
            <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
            </ul>
                
            </div>
            
        </div>
	</div>
</div>

 



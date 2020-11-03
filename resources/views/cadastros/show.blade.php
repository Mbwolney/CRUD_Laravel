<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Ver Usuários</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<div id="main" class="container-fluid">
     <div id="top" class="row">
     <div class="col-md-3">
        <h2>Usuários</h2>
    </div>
</div> <!-- /#top -->
 
     <hr />
     <div id="list" class="row">
     <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>ID <br> <input type="text" name="id" value="{{ $cadastros->id }}"> </th>
                   
                    <th>Nome <br> <input type="text" name="nome" value="{{ $cadastros->nome }}"> </th>
                   
                    <th>Email <br>  <input type="text" name="email" value="{{ $cadastros->email }}">  </th>
                  
                    <th>Data de Nascimento <br>  <input type="text" name="dataNascimento" value="{{ $cadastros->dataNascimento }}"></th>
                    
                    <th>Endereço <br> <input type="text" name="endereco" value="{{ $cadastros->endereco }}"></th>
                     
                    <th>Telefone <br> <input type="text" name="telefone" value="{{ $cadastros->telefone }}"></th>
                     
                    <th class="btn-group btn-group-toggle" data-toggle="buttons">
                        <button class="btn btn-primary btn-sm" href="view.html">Visualizar</button> 
                        <button class="btn btn-warning btn-sm" href="edit.html">Editar</button> 
                        <button class="btn btn-danger btn-sm"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</button>
                    </th>
                 </tr>
            </thead>
         </table>
        </div>
     </div> <!-- /#list -->

    
</body>
</html>
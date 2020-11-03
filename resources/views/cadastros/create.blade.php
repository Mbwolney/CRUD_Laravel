<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Cadastrar um novo usuário</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Image and text -->
<nav class="navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="#">
    Cadastro
  </a>
</nav>

<menu class="container">
    <form action="{{ route('adicionar_usuario') }}" method="POST">
    @csrf
    <div class="form-group">
    <label for="inputAddress">Nome</label>
    <input type="text" class="form-control" id="inputName" name="nome" placeholder="Nome">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail" name="email" placeholder="nome@hotmail.com">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword" name="senha" placeholder="senha">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Data de Nascimento</label>
    <input type="date" class="form-control" id="inputDate" name="dataNascimento">
  </div>
  <div class="form-group">
    <label for="inputAddress">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" name="endereco" placeholder="Av. T-63">
  </div>
  <div class="form-group">
    <label for="inputAddress">Telefone</label>
    <input type="text" class="form-control" id="inputFone" name="telefone">
  </div>

  <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
</menu>
</body>
</html>
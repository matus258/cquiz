
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<?php include 'navbar.php';?>
<form class="form-horizontal" action="cadastro.php" method="POST">
<fieldset>
<div class="panel panel-primary">
    <div class="panel-heading">Cadastro de Cliente</div>
    
    <div class="panel-body">
<div class="form-group">

<div class="col-md-11 control-label">
        <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>  
  <div class="col-md-8">
  <input id="Nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">CPF <h11>*</h11></label>  
  <div class="col-md-2">
  <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="number" maxlength="11" pattern="[0-9]+$">
  </div>
  
  <label class="col-md-1 control-label" for="Nome">Nascimento<h11>*</h11></label>  
  <div class="col-md-2">
  <input id="dtnasc" name="dataNascimento" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="date" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
</div>

<!-- Multiple Radios (inline) -->

  <label class="col-md-1 control-label" for="radios">Sexo <h11>*</h11></label>
  <div class="col-md-4"> 
    <label required="" class="radio-inline" for="radios-0" >
      <input name="sexo" id="sexo" value="f" type="radio" required>
      Feminino
    </label> 
    <label class="radio-inline" for="radios-1">
      <input name="sexo" id="sexo" value="m" type="radio">
      Masculino
    </label>
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Telefone <h11>*</h11></label>
  <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input id="prependedtext" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="number" maxlength="13" OnKeyPress="formatar('## #####-####', this)">
    </div>
 </div> 

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Email <h11>*</h11></label>
  <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="prependedtext" name="email" class="form-control" placeholder="email@email.com" required="" type="email" >
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="Senha">Senha <h11>*</h11></label>  
  <div class="col-md-3">
  <input id="senha" name="senha" placeholder="" class="form-control input-md" required="" type="password" >
  </div>
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-2 control-label" for="Cadastrar"></label>
  <div class="col-md-8">
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
  </div>
</div>

</div>
</div>
</div>


</fieldset>
</form>

</body>
</html>
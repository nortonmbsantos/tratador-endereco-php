<html>
<head>
    <title>Cadastro de endereços</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     
</head>
<body>

<?= readfile("../sidebar.php") ?>
      
<div class="row container">
  <h1 class="center">Cadastro</h1>


<div class="col s3">
</div>

<div class="center">
  <form class="col s6">
    <div class="row">
      <input placeholder="Name" name="name" type="text" class="validate">
      <input placeholder="CEP" name="cep" type="text" class="validate">
      <input placeholder="Estado" name="state" type="text" class="validate">
      <input placeholder="Cidade" name="city" type="text" class="validate">
      <input placeholder="Rua" name="street" type="text" class="validate">
      <input placeholder="Número" name="number" type="text" class="validate">
      <input placeholder="Complemento (Bloco, apartamento, etc.)" name="complement" type="text" class="validate">
      <button type="submit" class="btn green right">Salvar</button>
      <a href="#" class="btn red left">Voltar</a>
    </div>
  </form>
  </div>
</div>
</body>

</html>
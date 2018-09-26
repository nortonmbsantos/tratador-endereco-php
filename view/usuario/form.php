<html>
<head>
    <title>Cadastro de endereços</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="/tratador-endereco-php/public/js/cep.js"></script>
     
</head>
<body>

<?= readfile("../sidebar.php") ?>
      
<div class="row container">
  <h1 class="center">Cadastro</h1>


<div class="col s3">
</div>

<div class="center">
  <form class="col s6" action="../../model/save.php" method="POST">
    <div class="row">
      <input placeholder="Nome" name="name" type="text" class="validate" required>
      <input placeholder="CEP" id="cep" name="cep" type="text" class="validate" required>
      <input placeholder="Estado" id="uf" name="state" type="text" class="validate" required>
      <input placeholder="Cidade" id="cidade" name="city" type="text" class="validate" required>
      <input placeholder="Bairro" id="bairro" name="district" type="text" class="validate" required>
      <input placeholder="Rua" id="rua" name="street" type="text" class="validate" required>
      <input placeholder="Número" name="number" type="text" class="validate" required>
      <input placeholder="Complemento (Bloco, apartamento, etc.)" name="complement" type="text" class="validate">
      <input placeholder="Telefone" name="phone" type="text" class="validate" required>
      <button type="submit" class="btn green right">Salvar</button>
      <a href="/tratador-endereco-php/view/index.php" class="btn red left">Voltar</a>
    </div>
  </form>
  </div>
</div>
</body>

</html>
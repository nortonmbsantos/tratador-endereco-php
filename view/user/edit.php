<?php 
include('../../sql/edit.php');
?>
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
    <script src="/tratador-endereco-php/public/js/form.js"></script>
     
</head>
<body>
<?= readfile("../sidebar.php") ?>
      
<div class="row container">
    <h1 class="center">Editar</h1>
  <div class="col s3">
  </div>

  <div class="center">
    <form name="myForm" class="col s6" action="../../sql/update.php" onsubmit="return validateForm()" method="POST">
      <div class="row">
        <input type="hidden" name="id" value="<?= $person['ID'] ?>">
        <input placeholder="Nome" name="name" type="text" class="validate" maxlength="50" value="<?= $person['USERNAME']; ?>" required>
        <input placeholder="CEP" id="cep" name="cep" type="text" class="validate" maxlength="8" value="<?= $person['CEP']; ?>" required>
        <input placeholder="Estado" id="uf" name="state" type="text" class="validate" maxlength="20" value="<?= $person['ADDRESS_STATE']; ?>" required>
        <input placeholder="Cidade" id="cidade" name="city" type="text" class="validate" maxlength="20" value="<?= $person['CITY']; ?>" required>
        <input placeholder="Bairro" id="bairro" name="district" type="text" class="validate" maxlength="20" value="<?= $person['DISTRICT']; ?>" required>
        <input placeholder="Rua" id="rua" name="street" type="text" class="validate" maxlength="50" value="<?= $person['STREET']; ?>" required>
        <input placeholder="Número" name="number" type="text" class="validate" maxlength="10" value="<?= $person['ADDRESS_NUMBER']; ?>" required>
        <input placeholder="Complemento (Bloco, apartamento, etc.)" name="complement" type="text" class="validate" maxlength="30"
         value="<?= $person['COMPLEMENT']; ?>">
        <div id="more-phones">
          <?php foreach($phones as $phone){ ?>
            <input placeholder="Telefone" name="phone[]" type="text" class="validate" maxlength="11" value="<?= $phone["PHONE_NUMBER"] ?>">
          <?php } ?>
        </div>
        <div class="col l12">
           
          <button onclick="addPhoneInput()" class="btn blue">Adicionar mais telefones</button>
          <button type="submit" class="btn green right">Salvar</button>
          <a href="/tratador-endereco-php/view/index.php" class="btn red left">Voltar</a>
        </div>
      </div>
    </form>
</div>
</div>
</body>
</html>
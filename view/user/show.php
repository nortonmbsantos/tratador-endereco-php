<?php
    include("../../sql/show.php");
?>

<html>
<head>
    <title>Cadastro de endereços</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../../public/css/show.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     
</head>
<body>
<?= readfile("../sidebar.php") ?>
         

<div class="row container border-box center">
  <h1 class="center">Usuário</h1>
    <p> Nome: <?= $person["USERNAME"] ?> </p>
    <p> Endereço: <?= $person["CITY"] ?>, <?= $person["ADDRESS_STATE"] ?> </p>
    <p> Rua: <?= $person["STREET"] ?>, <?= $person["ADDRESS_NUMBER"] ?> ,<?= $person["DISTRICT"] ?> </p>
    Complemento: <?= $person["COMPLEMENT"] ?>

    <?php foreach($phones as $phone){ ?>
        <p>telefone: <?= $phone["PHONE_NUMBER"] ?></p>
    <?php } ?>

</div>
</body>

</html>
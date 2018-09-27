<?php
    include("../../sql/list.php");
?>

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
  <h1 class="center">Listagem</h1>
  <table>
        <thead>
          <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>CEP</th>
              <th>Estado</th>
              <th>Cidade</th>
              <th>Bairro</th>
              <th>Rua</th>
              <th>Número</th>
              <th>Complemento</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
            <?php if(empty($group)){ ?>
                  <h4 class="center">Nenhum dado cadastrado</h4>  
            <?php } else{ ?>

            <?php foreach($group as $user){ ?>
                <tr>
                <td><?= $user["ID"] ?></td>
                <td><?= $user["USERNAME"] ?></td>
                <td><?= $user["CEP"] ?></td>
                <td><?= $user["ADDRESS_STATE"] ?></td>
                <td><?= $user["CITY"] ?></td>
                <td><?= $user["DISTRICT"] ?></td>
                <td><?= $user["STREET"] ?></td>
                <td><?= $user["ADDRESS_NUMBER"] ?></td>
                <td><?= $user["COMPLEMENT"] ?></td>
                <td><a href="../../sql/delete.php?id=<?php echo $user["ID"]; ?>" 
                onclick="return confirm('Deseja mesmo deletar?');" 
                class="btn red">deletar</a>
                <a href="show.php?id=<?php echo $user["ID"]; ?>"  
                class="btn">Vizualizar</a>
                <a href="edit.php?id=<?php echo $user["ID"]; ?>"  
                class="btn">Editar</a>
                </td>       
            </tr>
            <?php } ?>
            <?php } ?>
        </tbody>
      </table>
</div>
</body>

</html>
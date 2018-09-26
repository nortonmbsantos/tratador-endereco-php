<?php 
include_once("conect.php");

$id = '';

if(empty($_GET['id'])){
    throw new Exception('Id não existe!');
}
if(!empty($_GET['id'])){
$id = $_GET['id'];
}

$query_delete = "DELETE FROM PHONES WHERE PERSON_ID = '$id'";
$result = mysqli_query($dbConn, $query_delete);

$query_delete = "DELETE FROM PERSON WHERE ID = '$id'";
$result = mysqli_query($dbConn, $query_delete);

header("Location:/tratador-endereco-php/view/usuario/list.php");

?>
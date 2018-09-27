<?php 
include_once("conect.php");

$id = '';

if(empty($_GET['id'])){
    throw new Exception('Id não existe!');
}
if(!empty($_GET['id'])){
$id = $_GET['id'];
echo 'ok';
}

$query = "SELECT * FROM PERSON WHERE ID = '$id'";
$result = mysqli_query($dbConn, $query);
$person = mysqli_fetch_array($result);

$query = "SELECT * FROM PHONES WHERE PERSON_ID = '$id'";
$result = mysqli_query($dbConn, $query);

while($row = mysqli_fetch_array($result)){
    $phones[] = $row;
}
?>
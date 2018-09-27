<?php 
include_once("conect.php");

$id = $_POST['id'];
$name = mysqli_real_escape_string($dbConn, $_POST['name']);
$cep = mysqli_real_escape_string($dbConn, $_POST['cep']);
$state = mysqli_real_escape_string($dbConn, $_POST['state']);
$city = mysqli_real_escape_string($dbConn, $_POST['city']);
$district = mysqli_real_escape_string($dbConn, $_POST['district']); 
$street = mysqli_real_escape_string($dbConn, $_POST['street']);
$number = mysqli_real_escape_string($dbConn, $_POST['number']);
$complement = mysqli_real_escape_string($dbConn, $_POST['complement']);
$phones = $_POST['phone'];

$query_update = "UPDATE PERSON SET 
    USERNAME = '$name',
    CEP = '$cep',
    ADDRESS_STATE = '$state',
    CITY = '$city',
    DISTRICT = '$district',
    STREET = '$street',
    ADDRESS_NUMBER = '$number',
    COMPLEMENT = '$complement' 
    WHERE ID = '$id'";

mysqli_query($dbConn, $query_update);

$query_delete_phone = "DELETE FROM PHONES WHERE PERSON_ID = '$id'";
$result = mysqli_query($dbConn, $query_delete_phone);

foreach($phones as $phone){
    $query_save_phone = "INSERT INTO PHONES(PERSON_ID, PHONE_NUMBER) VALUES ('$id', '$phone')";    
    $result = mysqli_query($dbConn, $query_save_phone);
}

header("Location:/tratador-endereco-php/view/user/list.php");

?>
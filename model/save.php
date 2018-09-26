<?php 
include_once("conect.php");

$name = mysqli_real_escape_string($dbConn, $_POST['name']);
$cep = mysqli_real_escape_string($dbConn, $_POST['cep']);
$state = mysqli_real_escape_string($dbConn, $_POST['state']);
$city = mysqli_real_escape_string($dbConn, $_POST['city']);
$district = mysqli_real_escape_string($dbConn, $_POST['district']); 
$street = mysqli_real_escape_string($dbConn, $_POST['street']);
$number = mysqli_real_escape_string($dbConn, $_POST['number']);
$complement = mysqli_real_escape_string($dbConn, $_POST['complement']);
$phone = mysqli_real_escape_string($dbConn, $_POST['phone']);

$query_save = "INSERT INTO PERSON (
    USERNAME,
    CEP,
    ADDRESS_STATE,
    CITY,
    DISTRICT,
    STREET,
    ADDRESS_NUMBER,
    COMPLEMENT)
    VALUES (
        '$name',
        '$cep',
        '$state',
        '$city',
        '$district',
        '$street',
        '$number',
        '$complement')";

if(mysqli_query($dbConn, $query_save)){
    $last_id = mysqli_insert_id($dbConn);
    $query_save_phone = "INSERT INTO PHONES(PERSON_ID, PHONE_NUMBER) VALUES ('$last_id', '$phone')";    
    $result = mysqli_query($dbConn, $query_save_phone);
}

header("Location:/tratador-endereco-php/view/index.php");
?>
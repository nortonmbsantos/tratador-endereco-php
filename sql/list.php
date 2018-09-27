<?php
include_once("conect.php");

$query_list = "SELECT * FROM PERSON";

$result = mysqli_query($dbConn, $query_list);
while($row = mysqli_fetch_array($result)){
    $group[] = $row;
}

?>
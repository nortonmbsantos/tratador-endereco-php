<?php 

$db_host = 'localhost';
$db_port = '3306';
$db_username = 'root';
$db_password = '';
$db_primaryDatabase = 'php_address';

$dbConn = new mysqli($db_host, $db_username, $db_password, $db_primaryDatabase);

$query = "SELECT ID FROM PERSON";
$result = mysqli_query($dbConn, $query);

if(empty($result)) {
                $query = "CREATE TABLE PERSON (
                          ID int(11) AUTO_INCREMENT,
                          USERNAME varchar(255) NOT NULL,
                          CEP varchar(9) NOT NULL,
                          ADDRESS_STATE varchar(255) NOT NULL,
                          CITY varchar(255) NOT NULL,
                          DISTRICT varchar(255) NOT NULL,
                          STREET varchar(255) NOT NULL,
                          ADDRESS_NUMBER varchar(8) NOT NULL,
                          COMPLEMENT varchar(255),
                          PRIMARY KEY (ID)
                          )";
                $result = mysqli_query($dbConn, $query);
}

$query = "SELECT ID FROM PHONES";
$result = mysqli_query($dbConn, $query);

if(empty($result)) {
    $query = "CREATE TABLE PHONES (
              ID int(11) AUTO_INCREMENT,
              PERSON_ID int NOT NULL,
              PHONE_NUMBER VARCHAR(15) NOT NULL,
              PRIMARY KEY (ID),
              FOREIGN KEY (PERSON_ID) REFERENCES PERSON(ID)
              )";
    $result = mysqli_query($dbConn, $query);
}
?>
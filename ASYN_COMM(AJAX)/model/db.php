<?php 

$dbhost = 'localhost';
$dbname = 'persondb';
$dbuser = 'root';
$dbpassword = '';


function getConnection(){
    global $dbhost;
    global $dbname;
    global $dbpassword;
    global $dbuser;

    $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
    return $conn;
}

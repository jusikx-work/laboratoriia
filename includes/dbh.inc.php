<?php

$serverName = 'localhost';
$dBUsername = 'u595902633_jusikX';
$dBPassword = 'R7333m060467';
$dBName = 'u595902633_authorization1';

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
};

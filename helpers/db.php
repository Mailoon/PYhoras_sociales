<?php
$conn = mysqli_connect('localhost', 'root', '', 'pyhoras_sociales');
if (!$conn){
    die("Connexion fallida: " . mysqli_connect_error());
}
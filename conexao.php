<?php

$conn = mysqli_connect("localhost","root","","crud_php");

if(mysqli_connect_errno()) {
    echo "Erro ao conectar" .mysqli_connect_error();

}else{
    // echo 'Ok!!!';
}
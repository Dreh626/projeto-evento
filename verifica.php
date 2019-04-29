<?php
session_start();

if($_SESSION['usuario_id'] == ""){
    header('location: login.php');
}
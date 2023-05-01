<?php 
session_start();

        if(!(isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {

            header('location:reglogin.php');
            }

        else{

            header('location:payment.php');
        }
?>
<?php
    session_start();

    if(isset($_SESSION["teste"])){

            echo"variavel de sessão 'teste' vale: ".
            $_SESSION["teste"];



    }else{

        echo"sessão ainda n foi iniciada";

    }
?>
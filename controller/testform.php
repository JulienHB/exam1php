<?php
session_start();
$error = true;
if(!empty($_POST)):
    if(!empty($_POST['name']) 
    AND !empty($_POST['firstname'])
    AND !empty($_POST['age'])
    AND !empty($_POST['entreprise'])
    AND !empty($_POST['email'])):
        $_SESSION['email']=$_POST['email'];
        $error = false;
        $msg = 'Bravo vous êtes connecté.';
    else:
        $error = true;
        $msg = 'Tout les champs sont obligatoires.';
    endif;
endif;
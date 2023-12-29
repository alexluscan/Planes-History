<?php
    session_start();

    require_once("./module/modul-functii.php");
    require_once("./module/modul-setari.php");

    if(!isset($_POST['user']) || !isset($_POST['parola']))
    {
        AdaugaMesaj('Foloseste acest formular.', 'warning');
        header("Location: ./?pagina=login");
        die();
    }

    $clean = [
        'user' => $_POST['user'],
        'parola' => $_POST['parola'],
    ];

    /// verificari
    
    if(VerificareUserParola($clean['user'], $clean['parola']))
    {
        $_SESSION['user'] = $clean['user'];
        AdaugaMesaj("Bine ai revenit!");
        header("Location: ./");
        die();
    }
    else
    {
        AdaugaMesaj("Date incorecte", 'danger');
        header("Location: ./?pagina=login");
        die();
    }

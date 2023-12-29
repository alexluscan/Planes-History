<?php

    function VerificareUserParola($user, $parola, $fisier_parole = "./parole.txt")
    {
        if(! file_exists($fisier_parole))
            return false;
        $continut = file_get_contents($fisier_parole);
        $lista = explode("\n", $continut);
        foreach($lista as $linie)
        {
            $v = explode("|||", trim($linie));
            if(isset($v[0]) && isset($v[1]))
            {
                if($user == $v[0] && Password($parola) == $v[1])
                    return true;
            }
        }
        return false;
    }

    function Login()
    {
        if(! isset($_SESSION['user']))
            return false;
        return $_SESSION['user'];
    }

    function Password($parola_in_clar)
    {
        global $password_salt;
        return Sha1($password_salt . sha1($parola_in_clar));
    }


    function AdaugaMesaj($mesaj, $tip_mesaj='success')
    {
        if(! isset($_SESSION['mesaje']))
            $_SESSION['mesaje'] = [];
        $_SESSION['mesaje'][] = [
            'mesaj' => $mesaj,
            'tip_mesaj' => $tip_mesaj
        ];
    }

    function AfisareMesaje()
    {
        if(!isset($_SESSION['mesaje']))
            return;
        foreach($_SESSION['mesaje'] as $mesaj)
        {
            ?>
            <div class="alert alert-<?=$mesaj['tip_mesaj']?>">
                <?=$mesaj['mesaj']?>
            </div>
            <?php
        }
        $_SESSION['mesaje'] = [];
    }
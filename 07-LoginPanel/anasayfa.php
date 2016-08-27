<?php
session_start();
echo "<pre>";
echo var_dump($_SESSION);
    if(isset($_SESSION['kullaniciAdi']))
    {
        $SESID = $_SESSION['PHPSESSID'];
        $COID = $_COOKIE['PHPSESSID'];
        if($SESID != $COID)
            header("Location:giris.php");
    }

?>
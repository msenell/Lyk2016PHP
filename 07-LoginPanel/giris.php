<?php
$kullanicilar = array(
    "enes" => array(
        "kodadi" => "enes",
        "sifre" => "1234"
    ),
    "mustafa" => array(
        "kodadi" => "mustafa",
        "sifre" => "4321"
    )
);
$kullaniciVarMi = false;
if(isset($_POST['kullaniciAdi']) AND isset($_POST['sifre'])) {
    if (isset($kullanicilar[$_POST['kullaniciAdi']])) {
        $kullaniciVarMi = true;
        $kullaniciAdi = $_POST['kullaniciAdi'];
        $sifre = $kullanicilar[$kullaniciAdi]["sifre"];
        if ($sifre == $_POST["sifre"]) {
            session_start();
            die(var_dump($_SESSION));
            $_SESSION['kullaniciAdi'] = $kullaniciAdi;
            header("Location:anasayfa.php");
        }
        else echo "Şifre Yanlış!";
    } else
        die("Kullanici Bulunamadi!");
}
else
    echo "Kullanıcı adı ve şifre girin!";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dur Yolcu!</title>
    </head>
    <body>
        <div class="maindiv">
            <div class="centerDiv">
                <form action="giris.php" method="post">
                    <label>Kullanıcı Adı: </label>
                    <input type="text" name = "kullaniciAdi"/>
                    <label>Şifre: </label>
                    <input type="text" name="sifre"/>
                    <button>Giriş</button>
                </form>
            </div>
        </div>
    </body>
</html>

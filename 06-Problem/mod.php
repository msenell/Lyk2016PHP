<?php
    if(isset($_GET['sayi'])) {
        $sayi = $_GET['sayi'];
        if ($_GET['islem'] == 1) {
            for ($i = 2; $i < $sayi; $i++) {
                if (($sayi % $i) == 0) {
                    $sonuc = $sonuc . $sayi . " " . $i . " ile tam bölünür." . "<br />";
                }
            }
        }
        elseif ($_GET['islem'] == 2) {
            $sonuc = "2-".$sayi." aralığındaki asal sayılar:<br />";
            for ($i = 2; $i <= $sayi; $i++) {
                $asalMi = true;
                for ($j = 2; $j <= intval(sqrt($i)); $j++) {
                    if ($i % $j == 0) {
                        $asalMi = false;
                        break;
                    }

                }
                if ($asalMi)
                    $sonuc = $sonuc . $i . "<br />";
            }
        }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Bölünebilite</title>
        <style>
            .centerDiv{
                margin: 200px auto;
                width:270px;
            }
        </style>
    </head>
    <body>
        <div class="mainDiv">
            <div class="centerDiv">
                <div class="formDiv">
                    <form action="mod.php" method="get">
                        <input type="number" name="sayi" />
                        <select name="islem">
                            <option value="1">Mod Bul</option>
                            <option value="2">Asal Sayı Bul</option>
                        </select>
                        <button type="submit">Hesapla</button>
                    </form>
                    <hr />
                    <?=$sonuc;?>
                </div>
            </div>
        </div>
    </body>
</html>
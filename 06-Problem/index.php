<?php
$kural = array(
"1" => "3",
"2" => "1",
"3" => "2"
);

$secimler = array(
    "1" => "Taş",
    "2" => "Kağıt",
    "3" => "Makas"
);
$sonuc = null;
$color = "black";
if(isset($_GET['secim'])) :
    $secim = $_GET['secim'];
    $cpu = rand(1, 3);
    if($secim == $cpu) {
        $sonuc = "Berabere!";
        $color = "yellow";
    }
    elseif($kural[$secim]==$cpu) {
        $sonuc = "Kazandınız!";
        $color = "green";
    }
    else {
        $sonuc = "Kaybettiniz!";
        $color = "red";
    }
endif;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <style>
            #result{color:<?=$color;?>}
        </style>
    </head>
    <body>
        <div class="mainDiv">
            <div class="centerDiv">
                <form action="index.php" method="get">
                    <select name="secim">
                        <option value="1">Taş</option>
                        <option value="2">Kağıt</option>
                        <option value="3">Makas</option>
                    </select>
                    <button type="submit">Oyna!</button>
                </form>
            </div>
            <div>
                <?php
                if(isset($_GET['secim'])) :
                     ?>

                    <table>
                        <tr>
                            <td>Seçiminiz:</td>
                            <td><?php echo $secimler[$secim];?></td>
                        </tr>
                        <tr>
                            <td>Bilgisayarın Seçimi:</td>
                            <td><?php echo $secimler[$cpu];?></td>
                        </tr>
                        <tr>
                            <td>Sonuç:</td>
                            <td id="result"<?=$color;?>"><?=$sonuc;?></td>
                        </tr>
                    </table>
                <?php endif;?>
            </div>
        </div>
    </body>
</html>


<?php


//4 basamaklı öyle bir sayı bulun ki tersinin 4 ile çarpımı kendisine eşit olsun.
/*for($i=1000; $i<=9999; $i++)
    {
        $binlik = intval(($i)/1000);
        $yuzluk = intval(($i%1000)/100);
        $onluk = intval(($i%100)/10);
        $birlik = intval(($i%10));
        $sayi = $birlik*1000 + $onluk*100 + $yuzluk*10 + $binlik;
        if($i == $sayi*4)
            echo $i;
    }
*/






?>
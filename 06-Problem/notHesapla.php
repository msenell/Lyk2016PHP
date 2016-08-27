<?php
$notlar = array
    (
    array(
        "ogrenci" => "Enes",
        "vize" => "70",
        "final" => "90"
    ),
    array(
        "ogrenci" => "Mustafa",
        "vize" => "50",
        "final" => "60"
    ),
    array(
        "ogrenci" => "Tuğçe",
        "vize" => "80",
        "final" => "44"
    )
);
function durum($ogrenci)
{

    $ortalama = $ogrenci['final']*0.6 + $ogrenci['vize']*0.4;
    if($ogrenci['final'] < 45 OR $ortalama < 45)
    {

        return array("durum"=>"kaldı",
                    "renk"=>"red");
    }
    else return array("durum"=>"geçti",
        "renk"=>"green");;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Geçme-Kalma Dünyası</title>
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
        <table border="2px">
            <tr>
                <th>Öğrenci</th>
                <th>Vize</th>
                <th>Final</th>
                <th id="result">Sonuç</th>
            </tr>
            <?php
                foreach ($notlar as $ogrenci) : ?>
                <tr>
                    <td><?php echo $ogrenci['ogrenci'];?></td>
                    <td><?php echo $ogrenci['vize'];?></td>
                    <td><?php echo $ogrenci['final'];?></td>
                    <td style="color:<?php echo durum($ogrenci)['renk'];?>"><?php echo durum($ogrenci)['durum'];?></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>
</body>
</html>

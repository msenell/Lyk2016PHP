<?php

$faizOrani = explode("-", $_POST["faiz"])[0];
$ay = explode("-", $_POST["faiz"])[1];
$anaPara = $_POST["anaPara"];


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Faiz Hesaplama</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            body{
                background-image: url('https://thumbs.dreamstime.com/x/100-dollar-bills-background-10496909.jpg')

            }
            .mainDiv
            {
                margin:200px auto
            }
            .centerDiv
            {
                background-color: rgba(27, 54, 54, 0.66);
                margin:0px auto;
                width:540px;
                padding: 20px;
                font-weight: bold;
                color : #f5f309;
            }
            label{
                color:white;
            }
            .headerDiv
            {
                background-color: rgba(27, 54, 54, 1);
                margin:0px auto;
                width:540px;
                padding: 20px;
                text-align: center;
                font-size: 25px;
                font-weight: bold;
                color : #ccc;
            }
        </style>
    </head>
    <body>
    <div class="mainDiv">
        <div class="headerDiv">
            <header>FAİZ HESAPLAMA UYGULAMASI</header>
        </div>
        <div class="centerDiv">
            <!--<form action="index.php" method="post">
                <label>Ana Para: </label>
                <input type="text" name="anaPara" />
                <select name="faiz">
                    <option value="0.1-6">6 Ay</option>
                    <option value="0.2-12">12 Ay</option>
                    <option value="0.3-24">24 Ay</option>
                    <option value="0.4-36">36 Ay</option>
                </select>
                <button type="submit">Hesapla</button>
            </form>-->
            <form class="form-inline" action="index.php" method="post">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                    <div class="input-group">
                        <div class="input-group-addon">Ana Para: </div>
                        <input type="text" name="anaPara" class="form-control" id="exampleInputAmount" placeholder="Amount">
                        <div class="input-group-addon">&#8378;</div>
                    </div>
                    <select name="faiz" class="form-control">
                        <option value="0.1-6">6 Ay</option>
                        <option value="0.2-12">12 Ay</option>
                        <option value="0.3-24">24 Ay</option>
                        <option value="0.4-36">36 Ay</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Hesapla</button>
            </form>
            <hr />
            <table>
                <tr>
                    <td><?="Ana Para: ";?></td>
                    <td><?=$anaPara." &#8378;"?></td>
                </tr>
                <tr>
                    <td><?="Faiz Oranı: ";?></td>
                    <td><?=$faizOrani?></td>
                </tr>
                <tr>
                    <td><?="Toplam Ödenecek:  &nbsp;";?></td>
                    <td><?=$anaPara*(1+$faizOrani)." &#8378;";?></td>
                </tr>
                <tr>
                    <td><?="Aylık Ödenecek: ";?></td>
                    <td><?=number_format($anaPara*(1+$faizOrani)/$ay, 2)." &#8378;";?></td>
                </tr>
            </table>
        </div>
    </div>

    </body>
</html>

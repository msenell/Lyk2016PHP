<!DOCTYPE html>
<html>
    <head>
        <?php
        require_once "burclar.php";
        ?>
        <meta charset="utf-8">
        <title>Burcumu Söyle</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body style="background-image: url('doodle_universe.png')">
    <div style="padding-top: 20px; padding-left: 5px">
        <form class="form-inline">
            <div class="form-group">
                <label for="exampleInputName2">Gün</label>
                <input type="number" name="day" class="form-control" id="exampleInputName2">
            </div>
            <div class="form-group" style="padding-left: 10px">
                <label for="exampleInputEmail2">Ay</label>
                <input type="text" name="month" class="form-control" id="exampleInputEmail2">
            </div>
            <button type="submit" class="btn btn-primary">Burcumu Söyle!</button>
        </form>
    </div>
    <div style="padding-top: 20px; padding-left: 10px">
        <span class="label label-warning" style="font-size : 20px">
            <?php
            $veriDogrulama =true;
            foreach ($tarihler[$_GET["month"]] as $days => $burc)
            {
                $aralik = explode("-", $days);
                if($_GET["day"]>=$aralik[0] && $_GET["day"] <= $aralik[1]) {
                    echo "Burcunuz: " . $burc;
                    $veriDogrulama = false;
                    break;
                }
            }
            if($veriDogrulama && isset($_GET["month"]))
                echo "Hatalı Giriş Yaptınız!";
            ?>
        </span>
    </div>
    </body>
</html>
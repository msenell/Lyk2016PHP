<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>03-Not Örnek</title>
    </head>
    <body>
    <!--<form action="index.php" method="GET">
        <p>Not Giriniz: <input type="text" name="not" /></p>
        <input type="submit" value="save" />
        <input type="button" value="show" />
    </form> -->
        <?php

        $ogrenciler = array(
                "Mustafa" => 45,
                "Ahmet" => 75,
                "Aysu" => 100);
        /*$Notlar = explode(",", $_GET['not']);
        foreach ($Notlar as $not) {
            if($not == null)
            {
                break;
            }
            echo "Öğrencinin Notu: ".$not."<br />";
            echo "Öğrencinin Harf Notu: ";
            if ($not >= 85)
                echo "A";
            elseif ($not < 85 && $not >= 70)
                echo "B";
            elseif ($not < 70 && $not >= 55)
                echo "C";
            elseif ($not < 55 && $not >= 45)
                echo "D";
            elseif ($not < 45 && $not >= 0)
                echo "F";
            else echo "Hatalı giriş!";
            echo "<hr />";
        }*/
        foreach ($ogrenciler as $ogrenci => $not) {

            if ($not == null) {
                break;
            }
            echo "Öğrencinin Adı: ".$ogrenci."<br />";
            echo "Öğrencinin Notu: " . $not . "<br />";
            echo "Öğrencinin Harf Notu: ";
            if ($not >= 85)
                echo "A";
            elseif ($not >= 70)
                echo "B";
            elseif ($not >= 55)
                echo "C";
            elseif ($not >= 45)
                echo "D";
            elseif ($not >= 0)
                echo "F";
            else echo "Hatalı giriş!";
            echo "<hr />";
        }
        ?>
    </body>
</html>
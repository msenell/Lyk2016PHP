<?php
/* SAYI TAHMİN UYGULAMASI
*Session üzerinde random bir sayı oluşturulur.
*Kullanıcıdan bir sayı istenir ve session içindeki sayı ile kıyaslanır. */?>


<?php
session_start();
$tip="";

    if(!isset($_SESSION['sayi'])) {

        $_SESSION['sayi'] = rand(0, 100);
    }

$result = "";
if(isset($_COOKIE[0]))
{
    for($i=0; $i<6; $i++)
        if(isset($_COOKIE[$i]))
            $cookieArray[$i] = $_COOKIE[$i];
}
if(isset($_POST['sayi']) AND isset($_SESSION['sayi'])) {
    $cookieArray[count($cookieArray)] = $_POST['sayi'];
    if(count($cookieArray)==6)
        $cookieArray = diziKaydir($cookieArray);
    for($i=0; $i<6; $i++)
        setcookie($i, $cookieArray[$i]);
    if($_POST['sayi']>$_SESSION['sayi']) {
        $result = "Sayı " . $_POST['sayi'] . " değerinden küçük";
        $tip = "info";
    }
    else if($_POST['sayi']<$_SESSION['sayi']) {
        $result = "Sayı " . $_POST['sayi'] . " değerinden büyük";
        $tip = "danger";
    }
    else if($_POST['sayi']==$_SESSION['sayi']) {
        $result = "Tebrikler!Sayıyı Buldunuz!<br/>" . $_SESSION['sayi'];
        $tip = "success";
        session_destroy();
        for($i=0; $i<6; $i++)
            setcookie($i, $cookieArray[$i], time()-100);
    }
    else $result ="Hatalı giriş!";
}


function diziKaydir()
{
    global $cookieArray;
    for($i=0; $i<5; $i++)
    {
        $cookieArray[$i] = $cookieArray[$i+1];
    }
    array_pop($cookieArray);
    array_diff($cookieArray, null);
    return $cookieArray;
}
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>Sayı Tahmin</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <style>
                .mainDiv{
                    margin: 250px auto;
                    width:400px;
                    background-color: rgba(0, 0, 0, 0.65);
                }
                .centerDiv{
                    margin:0px auto;
                    width:350px;
                    font-weight: bold;
                    padding-top: 10px;
                }
                .randomDiv{
                    width : 320px;
                    margin: 30px auto;
                    padding-bottom: 10px;
                }
                .liste {
                    font-size: 30px;
                    font-weight: bold;
                    color: #fffd1a;
                }
                body{
                    background-image: url("question.jpg");
                }
            </style>
        </head>
        <body>
            <div class="mainDiv">
                <div class="centerDiv">
                    <form class="navbar-form navbar-left" role="search" action="sayitahmin.php" method="post">
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="0-100 arasında bir sayı girin" name="sayi">
                        </div>
                        <button type="submit" class="btn btn-primary">Tahmin Et</button>
                    </form>
                </div>
                <br/>
                <div class="randomDiv">
                    <div class="alert alert-<?php echo $tip; ?>" role="alert"><?php echo $result ?></div>
                </div>
                <h2 class="liste">Önceki Tahminler:</h2>
                <ul class="liste">
                <?php foreach($cookieArray as $cookie) : ?>
                    <li><?php echo $cookie ?></li>
                <?php endforeach;?>
                </ul>
            </div>
        </body>
    </html>

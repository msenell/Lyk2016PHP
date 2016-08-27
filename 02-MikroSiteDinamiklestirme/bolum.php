
<?php
/* GET ile alınan bölüm numarası veritabanında sorgulanacak.
* Eğer veritabanında böyle bir kayıt yoksa 1. bölüme döndürülecek.
 * Veritabanındaki bölüm sayısı kontrol edilecek ve son bölüme gelinmişse Sonraki Bölüm linki kaldırılacak.
 */
?>



<?php
require_once "header.php";
require_once "connection.php";
?>

<?php
if(isset($_GET['ch']))
{
    $ch = (int)$_GET['ch'];
    if($ch > (int)sonBolumNumarasiniGetir())
    {
        $ch = 1;
    }
    $bolum = bolumDizisiGetir($ch);

    if($bolum)
    {

    }
    else{
        die("Bağlantı Sorunu!");
    }
}

function bolumDizisiGetir($bolumNo)
{
    $sql = mysql_query("SELECT * FROM bolumler WHERE bolumNo = '$bolumNo'");
    return mysql_fetch_array($sql, MYSQL_ASSOC);
}

function sonBolumNumarasiniGetir()
{
    $sql = mysql_query("SELECT bolumNo FROM bolumler ORDER BY bolumNo DESC LIMIT 0,1");
    $sonBolumNo = mysql_fetch_array($sql, MYSQL_ASSOC);
    return $sonBolumNo['bolumNo'];
}

 ?>

<div class="content">
    <div id="video">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/<?php echo $bolum['bolumKodu']?>" frameborder="0" allowfullscreen></iframe>
    </div>
    <div id="nav">
        <div id="prediv">
            <a href="bolum.php?ch=<?php echo ($ch-1);?>" id="pre" <?php if($ch == 1) echo "hidden"?>>Önceki Bölüm</a>
        </div>
        <div id="nextdiv">
            <a href="bolum.php?ch=<?php echo ($ch+1);?>" id="next" <?php if($ch == sonBolumNumarasiniGetir()) echo "hidden"?>>Sonraki Bölüm</a>
        </div>
    </div>
</div>

<?php require_once "footer.php"; ?>

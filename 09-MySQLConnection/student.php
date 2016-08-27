<?php
/* Öğrenci Detay Sayfası
*Adres çubuğundan "id" değişkenini get ile alacağız ve veritabanından bu öğrenciyi seçerek detay bilgilerini yazdıracağız.
 *
 */
require_once "connection.php";
$studentQuery = mysql_query("SELECT * FROM Students WHERE id = ".$_GET['id']);
$student=mysql_fetch_array($studentQuery, MYSQL_ASSOC);

//yanlış bir id gelmesi durumunda anasayfaya yönlendir.
if(!$student) header("Location: index.php");
?>

<h1><?=$student['name']?> <?=$student['surname']?></h1>
<h2>Öğrenci Numarası: <?=$student['number']?></h2>
<h2>Doğum Yılı: <?=$student['birth_year']?></h2>

<form action="update-student.php" method="get">
    <input type="hidden" name="id" value="<?=$student['id']?>"/>
    <button type="submit">Öğrenci Bilgilerini Düzenle</button>
</form>
<form action="delete-student.php" method="post">
    <input type="hidden" name="idToDelete" value="<?=$student['id']?>"/>
    <button type="submit">Öğrenciyi Sil</button>
</form>
<hr />
<a href="index.php">Listeye Geri Dön</a>


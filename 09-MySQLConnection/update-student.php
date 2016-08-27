<?php

/* ÖĞRENCİ BİLGİLERİ GÜNCELLEME SAYFASI */

/* Bu sayfaya gönderilen id'ye ait öğrencinin bilgilerini gösteren form koyulur.
 * Kullanıcı düzeltmek istediği alanlarda düzeltme yapar ve formu tekrar gönderir.
 *
 */

require_once "connection.php";

$studentQuery = mysql_query("SELECT * FROM Students WHERE id = ".$_GET['id']);
$student=mysql_fetch_array($studentQuery, MYSQL_ASSOC);
if(!$student) header("Location: index.php");



?>

<form method="post">
    <input type="text" name="number" placeholder="Öğrencinin Numarası" value="<?=$student['number']?>"/>
    <input type="text" name="name" placeholder="Öğrencinin Adı" value="<?=$student['name']?>"/>
    <input type="text" name="surname" placeholder="Öğrencinin Soyadı" value="<?=$student['surname']?>"/>
    <select name="birth_year">
        <?php for($i=(int)date('Y'); $i>=1923; $i--) :?>
            <option value="<?=$i?>" <?php if($i==$student['birth_year']) echo 'selected' ?> ><?=$i?></option>
        <?php endfor; ?>
    </select>
    <button type="submit">Öğrenci Bilgilerini Güncelle</button>
</form>


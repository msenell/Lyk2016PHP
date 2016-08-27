<?php
/* ÖĞRENCİ EKLEME SAYFASI*/

/* Sayfa ilk çalıştırıldığında öğrenci ekleme için bilgilerin alındığı form gözükür. Form doldurulup aynı sayfaya POST ile
    bilgiler gönderildiğinde bilgiler yakalanır ve veritabanına yazılır.
*/
require_once "connection.php";

if($_POST)
{
    $studentNumber = $_POST['number'];
    $studentName = $_POST['name'];
    $studentSurname = $_POST['surname'];
    $birth_year = $_POST['birth_year'];

    $isAdded = mysql_query("INSERT INTO Students (number, name, surname, birth_year) 
                    values('$studentNumber', '$studentName', '$studentSurname', '$birth_year')");

    if($isAdded)
    {
        header("Loction: index.php");
    }
    else{
        $error = "Eklenemedi.";
    }
}

?>
<meta charset="utf-8">
<? if(isset($error)): ?>
<?=$error?>
<hr>
<?php endif; ?>
<form method="post">
    <input type="text" name="number" placeholder="Öğrencinin Numarası"/>
    <input type="text" name="name" placeholder="Öğrencinin Adı"/>
    <input type="text" name="surname" placeholder="Öğrencinin Soyadı"/>
    <select name="birth_year">
        <?php for($i=(int)date('Y'); $i>=1923; $i--) :?>
        <option value="<?=$i?>"><?=$i?></option>
        <?php endfor; ?>
    </select>
    <button type="submit">Öğrenci Ekle</button>
</form>

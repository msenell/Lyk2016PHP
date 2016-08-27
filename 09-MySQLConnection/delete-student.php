<?php

/*ÖĞRENCİ SİLME SAYFASI*/

/*
 * POST ile sayfaya gönderilen id'ye ait öğrenciyi veritabanından sileceğiz.
 */
require_once "connection.php";

if(isset($_POST['idToDelete']))
{
    $idToDelete = (int) $_POST['idToDelete'];
    //DELETE FROM Students WHERE id = $idToDelete
    $isDeleted = mysql_query("DELETE FROM Students WHERE id = $idToDelete");
}

header("Location: index.php");
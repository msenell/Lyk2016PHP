<?
/*
 * Bu dosya burçların tarihlerinin tutulduğu çok boyutlu diziyi içermektedir.
 * Dizide ay isimleri "key" olarak kullanıldı.
 * Her ay 2 adet burç içermektedir. Bu burçları gün aralıklarından oluşan birer string işaret etmektedir.
 */
?>


<?php

$tarihler = array(
    "Ocak" => array("1-21" => "Oğlak", "22-31"=>"Kova"),
    "Şubat" => array("1-19" => "Kova", "20-29" => "Balık"),
    "Mart" => array("1-20" => "Balık", "21-31" => "Koç"),
    "Nisan" => array("1-20" => "Koç", "21-30" => "Boğa"),
    "Mayıs" => array("1-21" => "Boğa", "22-31" => "İkizler"),
    "Haziran" => array("1-22" => "İkizler", "23-30" => "Yengeç"),
    "Temmuz" => array("1-22" => "Yengeç", "23-31" => "Aslan"),
    "Ağustos" => array("1-22" => "Aslan", "23-31" => "Başak"),
    "Eylül" => array("1-22" => "Başak", "23-30" => "Terazi"),
    "Ekim" => array("1-22" => "Terazi", "23-31" => "Akrep"),
    "Kasım" => array("1-21" => "Akrep", "22-30" => "Yay"),
    "Aralık" => array("1-21" => "Yay", "22-31" => "Oğlak")
);
?>
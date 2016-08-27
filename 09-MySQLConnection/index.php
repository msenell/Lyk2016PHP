<?php
/*MySQL bağlantısı
*/
require_once "connection.php";
$sql = mysql_query("SELECT * FROM Students");
?>
<a href="add-student.php">Öğrenci Ekle</a>
<hr />
<ul>
<?php while($student=mysql_fetch_array($sql, MYSQL_ASSOC)) :?>
    <li>
        <a href="student.php?id=<?= $student['id']?>"><?= $student['name']?> <?= $student['surname']?></a>
    </li>
<?php endwhile;?>
</ul>

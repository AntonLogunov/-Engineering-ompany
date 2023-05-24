<?php
require_once('config.php');

$name = $_POST['name'];
$idWorkshop = $_POST['id_workshop'];

$connect = mysqli_connect($host, $user, $pass, $bd);
if(!$connect) die();
mysqli_query($connect, "SET CHARSET UTF8;");


$result = mysqli_query($connect, "INSERT INTO `plots`(`p_name`, `id_workshop`) VALUES ('$name','$idWorkshop')");
echo "<div class='result'>
<p>Данные отправлены</p>
</div>";
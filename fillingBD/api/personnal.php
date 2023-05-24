<?php
require_once('config.php');

$name = $_POST['name'];
$post = $_POST['post'];
$speciality = $_POST['speciality'];
$date = $_POST['date'];

$connect = mysqli_connect($host, $user, $pass, $bd);
if(!$connect) die();
mysqli_query($connect, "SET CHARSET UTF8;");


$result = mysqli_query($connect, "INSERT INTO `personnal`(`p_name`, `p_post`, `p_speciality`, `p_date`) VALUES ('$name','$post','$speciality','$date')");
echo "<div class='result'>
<p>Данные отправлены</p>
</div>";
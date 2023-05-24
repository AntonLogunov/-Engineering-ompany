<?php
require_once('config.php');

$name = $_POST['name'];
$idCategory = $_POST['id_category'];
$atributes = $_POST['atributes'];
$status = $_POST['status'];
$procentmarriage = $_POST['procentmarriage'];
$startTime = $_POST['start--time'];
$endTime = $_POST['end--time'];

$connect = mysqli_connect($host, $user, $pass, $bd);
if(!$connect) die();
mysqli_query($connect, "SET CHARSET UTF8;");


$result = mysqli_query($connect, "INSERT INTO `products`(`p_name`, `id_category`, `p_attributes`, `id_status`, `p_procentmarriage`, `p_starttime`, `p_endtime`) VALUES ('$name','$idCategory','$atributes','$status', '$procentmarriage', '$startTime','$endTime')");
echo "<div class='result'>
<p>Данные отправлены</p>
</div>";
<?php
require_once('config.php');

$personnal = $_POST['personnal'];
$plot = $_POST['plot'];
$product = $_POST['product'];

$connect = mysqli_connect($host, $user, $pass, $bd);
if(!$connect) die();
mysqli_query($connect, "SET CHARSET UTF8;");


$result = mysqli_query($connect, "INSERT INTO `workshopoperations`(`id_personnal`, `id_plot`, `id_product`) VALUES ('$personnal','$plot', '$product')");
echo "<div class='result'>
<p>Данные отправлены</p>
</div>";
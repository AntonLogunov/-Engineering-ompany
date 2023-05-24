<?php
require_once('config.php');

$name = $_POST['name'];
$quantity = $_POST['quantity'];

$connect = mysqli_connect($host, $user, $pass, $bd);
if(!$connect) die();
mysqli_query($connect, "SET CHARSET UTF8;");


$result = mysqli_query($connect, "INSERT INTO `status`(`s_name`, `s_quantity`) VALUES ('$name', '$quantity')");
echo "<div class='result'>
<p>Данные отправлены</p>
</div>";
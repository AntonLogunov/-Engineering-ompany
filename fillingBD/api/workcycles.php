
<?php
require_once('config.php');

$name = $_POST['name'];

$connect = mysqli_connect($host, $user, $pass, $bd);
if(!$connect) die();
mysqli_query($connect, "SET CHARSET UTF8;");


$result = mysqli_query($connect, "INSERT INTO `workcycles`(`c_name`) VALUES ('$name')");
echo "<div class='result'>
<p>Данные отправлены</p>
</div>";
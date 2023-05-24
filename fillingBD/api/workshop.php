
<?php
require_once('config.php');

$name = $_POST['name'];

$connect = mysqli_connect($host, $user, $pass, $bd);
if(!$connect) die();

$result = mysqli_query($connect, "INSERT INTO `workshop`(`w_name`) VALUES ('$name')");
echo "<div class='result'>
<p>Данные отправлены</p>
</div>";
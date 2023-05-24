<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script defer src="index.js"></script>
</head> 
<body>
<body class="body">
    <section class="wrapper">
        <h1>Заполните БД Данными</h1>
        <div class="content">
            <div class="tabs">
                <button class="tablinks tablinks-active" data-day="day1"><span>WorkShop</span></button>
                <button class="tablinks" data-day="day2"><span>plots</span></button>
                <button class="tablinks" data-day="day3"><span>Category</span></button>
                <button class="tablinks" data-day="day4"><span>Status</span></button>
                <button class="tablinks" data-day="day5"><span>Products</span></button>
                <button class="tablinks" data-day="day6"><span>Personnal</span></button>
                <button class="tablinks" data-day="day7"><span>WorkShopOperation</span></button>
            </div>
            <div class="wrapper-tabcontent">
                <!-- workshop -->
                <div id="day1" class="tabcontent tabcontent-active">
                    <h3>Введите данные</h3>
                    <form class="form" action="api/workshop.php" method="POST">
                        <input type="text" name="name" placeholder="Название/номер цеха">
                        <input type='submit' value='Отправить форму'>
                    </form>
                    <?php
                        require_once('api/config.php');
                        $connect = mysqli_connect($host, $user, $pass, $bd);
                        if(!$connect) die();
                        mysqli_query($connect, "SET CHARSET UTF8;");
                        $result = mysqli_query($connect, "SELECT * FROM `workshop`;");
                    ?>
                    <table>
                    <tr class='tr'>
                        <td>id</td>
                        <td>name</td>
                        <td>DELETE</td>
                    </tr>
                        <?php while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                                <td><?= $row['id_workshop']?></td>
                                <td><?= $row['w_name']?></td>
                                <td><a href="?del=<?= $row['id_workshop'] ?>">delete</a></td>
                            </tr>
                        <?php } ?>
                    </table>
                    <?php 
                        if(isset($_GET['del'])) {
                            $id = $_GET['del'];
                            $result = mysqli_query($connect, "DELETE FROM `workshop` WHERE `id_workshop` = $id;");
                            echo "<p> id = $id был удален из БД</p>";
                        }
                    ?>
                </div>
                <!-- plots -->
                <div id="day2" class="tabcontent">
                    <h3>Введите данные</h3>
                    <form class="form" action="api/plots.php" method="POST">
                        <input type="text" name="name" placeholder="Название/Номер участка">
                        <input type="text" name="id_workshop" placeholder="ID цеха">
                        <input type='submit' value='Отправить форму'>
                    </form>
                    <?php
                        require_once('api/config.php');
                        $connect = mysqli_connect($host, $user, $pass, $bd);
                        if(!$connect) die();
                        mysqli_query($connect, "SET CHARSET UTF8;");
                        $result = mysqli_query($connect, "SELECT * FROM `plots`;");
                    ?>
                    <table>
                    <tr class='tr'>
                        <td>id</td>
                        <td>name</td>
                        <td>id_workshop</td>
                        <td>DELETE</td>
                    </tr>
                        <?php while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                                <td><?= $row['id_plot']?></td>
                                <td><?= $row['p_name']?></td>
                                <td><?= $row['id_workshop']?></td>
                                <td><a href="?del=<?= $row['id_plot'] ?>">delete</a></td>
                            </tr>
                        <?php } ?>
                    </table>
                    <?php 
                        if(isset($_GET['del'])) {
                            $id = $_GET['del'];
                            $result = mysqli_query($connect, "DELETE FROM `plots` WHERE `id_plot` = $id;");
                            echo "<p> id = $id был удален из БД</p>";
                        }
                    ?>
                </div>
                <!-- categories -->
                <div id="day3" class="tabcontent">
                    <h3>Введите данные</h3>
                    <form class="form" action="api/categories.php" method="POST">
                        <input type="text" name="name" placeholder="Название категории">
                        <input type='submit' value='Отправить форму'>
                    </form>
                    <?php
                        require_once('api/config.php');
                        $connect = mysqli_connect($host, $user, $pass, $bd);
                        if(!$connect) die();
                        mysqli_query($connect, "SET CHARSET UTF8;");
                        $result = mysqli_query($connect, "SELECT * FROM `categories`;");
                    ?>
                    <table>
                    <tr class='tr'>
                        <td>id</td>
                        <td>name</td>
                        <td>DELETE</td>
                    </tr>
                        <?php while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                                <td><?= $row['id_category']?></td>
                                <td><?= $row['c_name']?></td>
                                <td><a href="?del=<?= $row['id_category'] ?>">delete</a></td>
                            </tr>
                        <?php } ?>
                    </table>
                    <?php 
                        if(isset($_GET['del'])) {
                            $id = $_GET['del'];
                            $result = mysqli_query($connect, "DELETE FROM `categories` WHERE `id_category` = $id;");
                            echo "<p> id = $id был удален из БД</p>";
                        }
                    ?>
                </div>
                <!-- status -->
                <div id="day4" class="tabcontent">
                    <h3>Введите данные</h3>
                    <form class="form" action="api/status.php" method="POST">
                        <input type="text" name="name" placeholder="Название статуса">
                        <input type="text" name="quantity" placeholder="Количесво изделий">
                        <input type='submit' value='Отправить форму'>
                    </form>
                    <?php
                        require_once('api/config.php');
                        $connect = mysqli_connect($host, $user, $pass, $bd);
                        if(!$connect) die();
                        mysqli_query($connect, "SET CHARSET UTF8;");
                        $result = mysqli_query($connect, "SELECT * FROM `status`;");
                    ?>
                    <table>
                    <tr class='tr'>
                        <td>id</td>
                        <td>name</td>
                        <td>quantity</td>
                        <td>DELETE</td>
                    </tr>
                        <?php while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                                <td><?= $row['id_status']?></td>
                                <td><?= $row['s_name']?></td>
                                <td><?= $row['s_quantity']?></td>
                                <td><a href="?del=<?= $row['id_status'] ?>">delete</a></td>
                            </tr>
                        <?php } ?>
                    </table>
                    <?php 
                        if(isset($_GET['del'])) {
                            $id = $_GET['del'];
                            $result = mysqli_query($connect, "DELETE FROM `status` WHERE `id_status` = $id");
                            echo "<p> id = $id был удален из БД</p>";
                        }
                    ?>
                </div>
                <!-- products -->
                <div id="day5" class="tabcontent">
                    <h3>Введите данные</h3>
                    <form class="form" action="api/products.php" method="POST">
                        <input type="text" name="name" placeholder="Название изделия">
                        <input type="text" name="id_category" placeholder="ID категории">
                        <input type="text" name="atributes" placeholder="Атрибуты">
                        <input type="text" name="status" placeholder="ID Статус">
                        <input type="text" name="procentmarriage" placeholder="Процент брака">
                        <input type="datetime-local" name="start--time" placeholder="Начало работы">
                        <input type="datetime-local" name="end--time" placeholder="Конец работы">
                        <input type='submit' value='Отправить форму'>
                    </form>
                    <?php
                        require_once('api/config.php');
                        $connect = mysqli_connect($host, $user, $pass, $bd);
                        if(!$connect) die();
                        mysqli_query($connect, "SET CHARSET UTF8;");
                        $result = mysqli_query($connect, "SELECT * FROM `products`;");
                    ?>
                    <table>
                    <tr class='tr'>
                        <td>id</td>
                        <td>name</td>
                        <td>categori</td>
                        <td>attributes</td>
                        <td>status</td>
                        <td>procentmarriage</td>
                        <td>startTime</td>
                        <td>endTime</td>
                        <td>DELETE</td>
                    </tr>
                        <?php while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                                <td><?= $row['id_product']?></td>
                                <td><?= $row['p_name']?></td>
                                <td><?= $row['id_category']?></td>
                                <td><?= $row['p_attributes']?></td>
                                <td><?= $row['id_status']?></td>
                                <td><?= $row['p_procentmarriage']?></td>
                                <td><?= $row['p_starttime']?></td>
                                <td><?= $row['p_endtime']?></td>
                                <td><a href="?del=<?= $row['id_product'] ?>">delete</a></td>
                            </tr>
                        <?php } ?>
                    </table>
                    <?php 
                        if(isset($_GET['del'])) {
                            $id = $_GET['del'];
                            $result = mysqli_query($connect, "DELETE FROM `products` WHERE `id_product` = $id");
                            echo "<p> id = $id был удален из БД</p>";
                        }
                    ?>
                </div>
                <!-- personal -->
                <div id="day6" class="tabcontent">
                    <h3>Введите данные</h3>
                    <form class="form" action="api/personnal.php" method="POST">
                        <input type="text" name="name" placeholder="ФИО сотрудника">
                        <input type="text" name="post" placeholder="Должность">
                            <input type="text" name="speciality" placeholder="Специальность">
                        <input type="date" name="date" placeholder="День рождения">
                        <input type='submit' value='Отправить форму'>
                    </form>
                    <?php
                        require_once('api/config.php');
                        $connect = mysqli_connect($host, $user, $pass, $bd);
                        if(!$connect) die();
                        mysqli_query($connect, "SET CHARSET UTF8;");
                        $result = mysqli_query($connect, "SELECT * FROM `personnal`;");
                    ?>
                    <table>
                    <tr class='tr'>
                        <td>id</td>
                        <td>name</td>
                        <td>post</td>
                        <td>specialiti</td>
                        <td>date_birth</td>
                        <td>DELETE</td>
                    </tr>
                        <?php while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                                <td><?= $row['id_personnal']?></td>
                                <td><?= $row['p_name']?></td>
                                <td><?= $row['p_post']?></td>
                                <td><?= $row['p_speciality']?></td>
                                <td><?= $row['p_date']?></td>
                                <td><a href="?del=<?= $row['id_personnal'] ?>">delete</a></td>
                            </tr>
                        <?php } ?>
                    </table>
                    <?php 
                        if(isset($_GET['del'])) {
                            $id = $_GET['del'];
                            $result = mysqli_query($connect, "DELETE FROM `personnal` WHERE `id_personnal` = $id");
                            echo "<p> id = $id был удален из БД</p>";
                        }
                    ?>
                </div>
                <!-- shopoperations -->
                <div id="day7" class="tabcontent">
                    <h3>Введите данные</h3>
                    <form class="form" action="api/shopoperations.php" method="POST">
                        <input type="text" name="personnal" placeholder="ID персонала">
                        <input type="text" name="plot" placeholder="ID участка">
                        <input type="text" name="product" placeholder="ID изделия">
                        <input type='submit' value='Отправить форму'>
                    </form>
                    <?php
                            require_once('api/config.php');
                            $connect = mysqli_connect($host, $user, $pass, $bd);
                            if(!$connect) die();
                            mysqli_query($connect, "SET CHARSET UTF8;");
                            $result = mysqli_query($connect, "SELECT * FROM `workshopoperations`;");
                        ?>
                        <table>
                        <tr class='tr'>
                            <td>personnal</td>
                            <td>plots</td>
                            <td>products</td>
                        </tr>
                            <?php while($row = mysqli_fetch_array($result)){ ?>
                                <tr>
                                    <td><?= $row['id_personnal']?></td>
                                    <td><?= $row['id_plot']?></td>
                                    <td><?= $row['id_product']?></td>
                                    <td><a href="?del=<?= $row['id_personnal'] ?>">delete</a></td>
                                </tr>
                            <?php } ?>
                        </table>
                        <?php 
                            if(isset($_GET['del'])) {
                                $id = $_GET['del'];
                                $result = mysqli_query($connect, "DELETE FROM `workshopoperations` WHERE `id_personnal` = $id");
                                echo "<p> id = $id был удален из БД</p>";
                            }
                        ?>
                </div>
                </div>
                
        </div>
    </section>
</body>
</body>
</html>
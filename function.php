<?php
// connect to the "tests" database
$conn = new mysqli('localhost', 'root', '', 'bloog');
//include "index.php";

if (mysqli_connect_errno()) {
    ?><div class="alert alert-danger" role="alert"> exit('Connect failed: '. mysqli_connect_error());
    </div><?php
}

if (isset($_POST) && $_POST != NULL) { //если существует и не пустой то добовляем данные из $_POST

    $time = time(); //загоняем unix время в переменную
    $sql = 'INSERT INTO `bloog`.`articuls` (`title`, `content`, `autor`, `data`)
    VALUES (\''.$_POST['title'].'\' , \''. $_POST['content'].'\', \''.$_POST['autor'].'\','.$time.')';
    //echo $sql; //вывод
    ///SQL-Statement welches den Benutzer aus der Datenbank abfragt
    // Perform queries
    mysqli_query($conn, $sql); // проверяет подключение к базе

    $result = mysqli_query($conn,"SELECT * FROM  articuls"); //в переменную кладём все данные из таблици подключаясь к базе
    ?>

    <div class="alert alert-success" role="alert">
        <?php echo "отправленно" ?>
    </div>
    <?php

    $conn -> close();; // закрываем соединение
};

?>
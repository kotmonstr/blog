<?php

// подключиться к базе данных "тесты"
$conn = new mysqli('localhost', 'root', '', 'blog');


if (mysqli_connect_errno()) {
    ?><div class="alert alert-danger" role="alert"> exit('Connect failed: '. mysqli_connect_error());
    </div><?php
}

if (isset($_POST) && $_POST != NULL) {
    $time=time();
    //если существует и не пустой то добовляем данные из $_POST
    $sql = 'INSERT INTO `blog`.`articuls` (`title`, `content`, `author`, `date`)
    VALUES (\''.$_POST['title'].'\' , \''. $_POST['content'].'\', \''.$_POST['author'].'\','.$time.')';
    //echo $sql; //вывод
    ///SQL-Statement welches den Benutzer aus der Datenbank abfragt
    // Выполнять запросы
    mysqli_query($conn, $sql); // проверяет подключение к базе

    $result = mysqli_query($conn,"SELECT * FROM articuls"); //в переменную кладём все данные из таблици подключаясь к базе
    ?>
    <div class="alert alert-success" role="alert">
        <?php echo "ok" ?>
    </div>
    <?

    $conn -> close();; // закрываем соединение
};
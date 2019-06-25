<?php

// connect to the "tests" database
$conn = new mysqli('localhost', 'root', '', 'blog');

// check connection
if (mysqli_connect_errno()) {
    exit('Connect failed: '. mysqli_connect_error());
}


if (isset($_POST) && $_POST != NULL) {
    $sql = 'INSERT INTO `blog`.`articuls` (`title`, `content`, `author`, `date`)  
    VALUES (\''.$_POST['title'].'\' , \''. $_POST['content'].'\', \''.$_POST['author'].'\', 12324132)';
    echo $sql;
    ///SQL-Statement welches den Benutzer aus der Datenbank abfragt
    // Perform queries
    $result = mysqli_query($conn, $sql);

    $result = mysqli_query($conn,"SELECT * FROM articuls");
    echo '<pre>';
    print_r($result->fetch_all());
    echo '</pre>';
    $conn -> close();;
}


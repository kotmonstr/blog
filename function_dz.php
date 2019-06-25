    <?php

    $connection = new mysqli('localhost','root','','blog');
    $mass = [];
    if  (mysqli_connect_errno())
    {
        exit('Ошибка соединения: '.mysqli_connect_error());
    }

    if(isset($_POST) && $_POST != NULL)
    {
        $sql = 'INSERT INTO `blog`.`users` (`first_name`, `middle_name`, `last_name`, `created_at`)  
        VALUES (\''.$_POST['first_name'].'\' , \''. $_POST['middle_name'].'\', \''.$_POST['last_name'].'\', now())';
        echo $sql;
        $result = mysqli_query($connection,$sql);
        $result = mysqli_query($connection,"SELECT * FROM users");
        /*echo '<pre>';
        print_r($result->fetch_all());
        echo '</pre>';*/
        echo "<table border='2' cellpadding='10px'>";
        echo '<tr>';
        echo "<th>" ."№" . "</th>";
        echo "<th>" ."Фамилия" . "</th>";
        echo "<th>" ."Имя" . "</th>";
        echo "<th>" ."Отчество" . "</th>";
        echo "<th>" ."Дата создания" . "</th>";
        echo '</tr>';


        foreach($result as $value)
        {
            echo "<tr>";
            echo '<td>' . $value['id'] . '</td>';
            echo '<td>' . $value['first_name'] . '</td>';
            echo '<td>' . $value['middle_name'] . '</td>';
            echo '<td>' . $value['last_name'] . '</td>';
            echo '<td>' . $value['created_at'] . '</td>';
            echo "</tr>";
        }
        echo "</table>";
        $connection -> close();;
    }




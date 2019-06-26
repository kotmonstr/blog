<?php include 'function.php';?>
    <!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="css/bootstrap.css">
        <title>Просморт статьи <?php echo $_GET['view_id']?></title>
    </head>
    <body>
    <div class="container">
        <?php include 'header.php';
        if (isset($_GET) && $_GET != NULL && !empty($_GET['delete_id']))
        {
            $ID =  "'" . $_GET['view_id'] . "'";
            $q = "SELECT * FROM `articuls` WHERE id =$ID";
            $result =mysqli_query($conn, $q);
            var_dump($result);
            echo $result;
        }


        ?>
    </div>
    <?php
    ?>
    <div class="container">
        <?php include 'footer.php'; ?>
    </div>
    </body>
    </html>




<?php
$conn = new mysqli('localhost', 'root', '', 'blog');

if (mysqli_connect_errno()) {
    ?>
    <div class="alert alert-danger" role="alert"> exit('Connect failed: '. mysqli_connect_error()); </div>
    <?php
}
$time = time();

if (isset($_POST) && $_POST != NULL && empty($_POST['id'])) { //если существует и не пустой то добовляем данные из $_POST
    $sql = 'INSERT INTO `blog`.`articuls` (`title`, `content`, `author`, `date`)
    VALUES (\''.$_POST['title'].'\' , \''. $_POST['content'].'\', \''.$_POST['author'].'\','.$time.')';
    mysqli_query($conn, $sql);
    $result = mysqli_query($conn,"SELECT * FROM articuls");
    ?>
    <div class="alert alert-success" role="alert">
        <?php echo "OK" ?>
    </div>
    <?$conn -> close();
    var_dump($sql);
}
elseif (isset($_POST) && $_POST != NULL && !empty($_POST['id'])){
    echo "UPDATE";
    $TITLE = "'" . $_POST['title'] . "'";
    $CONTENT = "'" . $_POST['content'] . "'";
    $AUTHOR = "'" . $_POST['author'] . "'";
    $TIME = "'" .$time . "'";
    $ID =  "'" . $_POST['id'] . "'";
    $sql = "UPDATE `articuls` SET 
      `title` = $TITLE ,
      `content` = $CONTENT,
      `author` = $AUTHOR ,
       `date` = $TIME 
    WHERE id = $ID";
    // VALUES (\''.$_POST['title'].'\' , \''. $_POST['content'].'\', \''.$_POST['author'].'\','.$time.')';
    mysqli_query($conn,$sql);
    $q = "SELECT * FROM articuls WHERE id ='".$_POST['id'];
    $result = mysqli_query($conn, $q);
    var_dump($sql);
}
/*
 * Удаление поста
 */
elseif (isset($_GET) && $_GET != NULL && !empty($_GET['delete_id']))
{
    $ID =  "'" . $_GET['delete_id'] . "'";
    $q = "DELETE FROM `articuls` WHERE id =$ID";
    $result =mysqli_query($conn, $q);
    /*$result = mysqli_query($conn, $q);
    echo var_dump($sql);*/
}
/*
 *
 */

?>

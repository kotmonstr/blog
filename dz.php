<html>
<head>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
<form action="dz.php" method="post">
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <label>Фамилия</label>
        <input type="text" class="form-control" name="first_name">
    </div>
    <div class="col-md-3">
        <label>Имя</label>
        <input type="text" class="form-control" name="middle_name">
    </div>
    <div class="col-md-3">
        <label>Отчество</label>
        <input type="text" class="form-control" name="last_name">
    </div>
    <br>
    <div class="col-md-6">
        <button type="submit" class="btn btn-primary">Отправить</button>
    </div>
</form>
</body>
</html>


<?php
include 'function_dz.php';

?>


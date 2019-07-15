<?php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Добавление</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body><div style="width:400px; margin: auto; margin-top: 10px;">
<form action="add" method="post" >
    <div class="form-group">
        <label>ID</label>
        <input type="text" name="id" class="form-control" />
    </div>
    <div class="form-group">
    <label>Имя</label>
    <input type="text" name="name" class="form-control" />
    </div>

    <div class="form-group">
        <label>Возраст</label>
        <input type="text" name="age" class="form-control" />
    </div>
    <hr />
    <div class="text-right">
        <button class="btn btn-success">Добавить</button>
    </div>
</form>
</div>
</body>
</html>

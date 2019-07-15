<?php

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <style>
     td, th {border: 1px solid black; padding: 10px}
     table {margin:auto; margin-top:10px;}
     .kek {width:454px; margin:auto}
     .kek a {text-align:left}
    </style>
<div class="kek"><a class="btn btn-outline-success" style="margin:auto;margin-top:10px" href="addpage">Добавить</a></div>
    <table style="border: 1px solid black">
        <thead ><tr><th>ID</th></th><th>Имя</th><th>Возраст</th><th>Действие</th></tr></thead>
        <tbody><?php foreach($data as $r): ?>
            <tr ><td><?php echo $r['idpochtalyon']; ?></td><td><?php echo $r['name']; ?></td><td><?php echo $r['age']; ?></td><td>
            <a class="btn btn-warning" href="update?id=<?php echo $r['idpochtalyon']; ?>">Изменить</a>
<a class="btn btn-danger" href="delete?id=<?php echo $r['idpochtalyon']; ?>"> Удалить</a>  </tr>
        <?php endforeach; ?></tbody>
    </table>

</body>
</html>
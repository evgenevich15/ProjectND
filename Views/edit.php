<?php
$pdo = \Models\Conn::start();
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    $id =  trim($_GET["id"]);
    $sql = "SELECT * FROM pochtalyons WHERE idpochtalyon = :id";
    if($stmt = $pdo->prepare($sql)){
    $stmt->bindParam(":id", $_REQUEST['id']);
    $param_id = $id;

    if($stmt->execute()){
        if($stmt->rowCount() == 1){
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $name = $row["name"];
            $age = $row["age"];
        } else{
           echo 'Ошибка';
        }

    } else{
        echo "Что-то пошло не так!";
    }

}
    unset($stmt);
    unset($pdo);
}  else{
    // в запросе нет айди
    echo "Не передан ИД!";

}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Изменение</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>Изменить запись</h2>
                </div>
                <p>Измените значения и отправьте!</p>
                <form action="upd" method="post">
                    <div class="form-group">
                        <label>Имя</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                    </div>
                    <div class="form-group">
                        <label>Возраст</label>
                        <input type="text" name="age" class="form-control" value="<?php echo $age; ?>">
                    </div>

                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <input type="submit" class="btn btn-primary" value="Изменить">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

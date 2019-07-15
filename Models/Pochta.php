<?php

namespace Models;

use PDO;

class Pochta
{
    private $pdo;

    public $id;
    public $name;
    public $age;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Conn::start();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function displayAll()
    {
        $sql = "SELECT * FROM pochtalyons";
        return $this->pdo->query($sql)->fetchAll(\PDO::FETCH_ASSOC);

    }

    public function add ()
    {
        try{
            $sql = "INSERT INTO pochtalyons (idpochtalyon, name, age) VALUES (:id, :name, :age)";
            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(':id', $_REQUEST['id']);
            $stmt->bindParam(':name', $_REQUEST['name']);
            $stmt->bindParam(':age', $_REQUEST['age']);

            if ($stmt->execute())
            {
                header("location: home");
                exit();
            }

        } catch(PDOException $e){
            die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        }

        unset($pdo);

    }
    public function upd()
    {
        if(isset($_POST["id"]) && !empty($_POST["id"]) ){
            $id = $_POST["id"];
            $name = trim($_POST["name"]);
            $age = trim($_POST["age"]);

            if(!empty($name) && !empty($age)){

                $sql = "UPDATE pochtalyons SET name=:name, age=:age WHERE idpochtalyon=:id";

                $stmt = $this->pdo->prepare($sql);
                $stmt->bindParam(":name", $param_name);
                $stmt->bindParam(":age", $param_age);
                $stmt->bindParam(":id", $param_id);
                $param_name = $name;
                $param_age = $age;
                $param_id = $id;
                if($stmt->execute()){
                    header("location: home");
                    exit();
                } else{
                    echo "Что-то пошло не так!";
                }


                unset($stmt);
            }

            unset($pdo);
        }
    }

    public  function del()
    {
        if(isset($_POST["id"]) && !empty($_POST["id"])){
            $sql = "DELETE FROM pochtalyons WHERE idpochtalyon = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id',  $_REQUEST['id']);
                if($stmt->execute()){
                    header("location: home");
                    exit();
                } else{
                    echo "Что-то пошло не так!";
                }

            unset($stmt);

            unset($pdo);}
    }

}
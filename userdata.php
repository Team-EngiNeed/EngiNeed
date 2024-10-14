<?php

/*
DATA BASE
CREATE TABLE contact (
  id INT(11) NOT NULL,
	name VARCHAR(50) NOT NULL,
    email VARCHAR (100) NOT NULL,
    message VARCHAR(500) NOT NULL,
    sent_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    PRIMARY KEY (id)
);
*/



if ($_SERVER["REQUEST_METHOD"] == "POST")
{

$name = $_POST["name"];
$email = $_POST["email"];
$message =$_POST["message"];

try{
    require_once "dbh.inc.php";

    /* $query = "INSERT INTO contact (name, email, message) VALUES (?, ?, ?);";

    $stmt = $pdo->prepare($query);

    $stmt->execute([$name, $email, $message]);

    $pdo = null;
    $stmt = null;
  */

  $query = "INSERT INTO contact (name, email, message) VALUES (:name, :email, :message);";

  $stmt = $pdo->prepare($query);

  $stmt->bindParam(":name", $name);
  $stmt->bindParam(":email", $email);
  $stmt->bindParam(":message", $message);

  $stmt->execute();


    header("Location: ../index.php");

    die();
}

catch(PDOException $e)
{
  die("Query failed: " . $e->getMessage());
}
}

else
{
  header("Location:../about.php");
}

//SQL "INSERT INTO  contact (name, email, message) VALUES ('', '', '');"


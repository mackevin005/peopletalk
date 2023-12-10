<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $username = $_POST["username"];
  $phonenumber = $_POST["phonenumber"];
  $pwd = $_POST["pwd"];
  $email = $_POST["email"];



  try {

    require_once "dbh.inc.php";


    $query = "INSERT INTO students (student_name, phone_no, pwd, email) VALUES (:username, :phonenumber, :pwd, :email);";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":phonenumber", $phonenumber);
    $stmt->bindParam(":pwd", $pwd);
    $stmt->bindParam(":email", $email);

    $stmt->execute();

    $pdo = null;
    $stmt = null;


    header("Location: ../signup.php");

    die();
  } catch (PDOException $e) {

    die("Query failed: " . $e->getMessage());
  }
} else {

  header("Location: ../signup.php");
}

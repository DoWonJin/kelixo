<?php
$dbh = new PDO('mysql:host=localhost:3307;dbname=instagram', 'root', 'eh1105', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        $stmt = $dbh->prepare("INSERT INTO user (name,password) VALUES (:name,:Password)");
        $stmt->bindParam(':name',$name);
        $stmt->bindParam(':password',$password);
        $name=$_POST['name'];
        $password=$_POST['pw'];
        $stmt->execute();

?>

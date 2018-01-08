<?php
$dbh = new PDO('mysql:host=localhost:3307;dbname=instagram', 'root', 'eh1105', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$sql="SELECT *FROM user WHERE name='".$_GET['name']."'";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if($row)
{
   echo "<script>alert(\"중복된 아이디 존재\");</script>";
}
else{
  $stmt=$dbh->prepare("INSERT INTO user (name,password) VALUES (:name,:Password)");
  $stmt->bindParam(':name',$name);
  $stmt->bindParam(':password',$password);
  $name=$_GET['name'];
  $password=$_GET['pw'];
  $stmt->execute();
  //header("Location:login.html");
}



 ?>

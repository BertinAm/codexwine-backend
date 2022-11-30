<?php
$error="";
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $pass = $_POST['password'];

  require_once 'connect.php';
  if($conn){
    $sql = "SELECT account.username FROM userprofile INNER JOIN account ON userprofile.acid = account.acid WHERE (userprofile.uEmail='$email' AND account.password='$pass') ";
    $result = mysqli_query($conn, $sql);
    $row= mysqli_fetch_array($result);
      if($row){
        header("Location: ../APIs/homepage.php");
        exit();
        } else{
          $error="Incorrect username or password!";
        }
  }
}
?>
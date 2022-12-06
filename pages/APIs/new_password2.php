<?php
  $error = "";
  $value= "";
  if(isset($_POST['submit'])){

    session_start();
    $mail = $_SESSION['mail'];
    $tell = $_SESSION['tell'];

    $pass = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    
    require_once 'connect.php';

              if ($pass == $cpassword){
                $result = mysqli_query($conn,"SELECT acid FROM userprofile WHERE uEmail='$mail' OR uTellPhone='$tell' ");
                //$row = mysqli_fetch_array($result);
                while($row = mysqli_fetch_assoc($result)) {
                $acid = $row['acid'];
                }
                $result1 = mysqli_query($conn,"UPDATE account SET password = '$pass' WHERE acid = '$acid' ");
                if($result1){
                header("Location: ../APIs/success.php");
                exit();
                
            session_abort();
                }
                    
              }
              else{
                $error = "Passwords don't match!!";
              }
            }
?>
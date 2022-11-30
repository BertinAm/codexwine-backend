<?php
        $error = "";
        session_start();
        $tel = $_SESSION['tel'];
        if(isset($_POST['submit'])){
                
            $code=$_POST['code'];

            $_SESSION['tell'] = $tel;
            $_SESSION['mail'] = "";

            require_once 'connect.php';
            $result = mysqli_query($conn,"SELECT MAX(date_time) AS datime FROM num_code_validate WHERE uTellPhone='$tel'");
            //$row = mysqli_fetch_array($result);
            while($row = mysqli_fetch_assoc($result)) {
                $val = $row['datime'];
            }
            $result2 = mysqli_query($conn,"SELECT * FROM num_code_validate WHERE (code='$code' AND date_time='$val')");
            $row2= mysqli_fetch_array($result2);

            if($row2){
                header("Location: new_password.php");
                exit();
            } else{
                $error = "Invalid verification code !!";
            }
        } session_abort();
?>
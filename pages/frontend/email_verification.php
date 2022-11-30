<?php
    include '../APIs/email_verification2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/email_verification.css">
</head>
<body>
    <div class="container text-white">
      
        <div class="containar">
          <div class="jumbotron-background">
          <img style="width: 1700px;" src="../../images/loginb3.jpg" class="blur ">
          </div>
   
          <div class="wrapper">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " method="post">
              
                  <div class="header">
                          
                    <div class="iconbtn back"><a href="forgot_password.php" style="text-decoration: none;"></a></div>
                    <div class="headertitle"> <h1>Verify Your Email</h1> </div>
                </div>
                  <img style="margin-top: 1rem; margin-bottom: 2rem; " src="../../images/email+envelope+inbox+mail+message+send+icon-1320085879987098147.svg" id="signupLogo"/>
        
                  <p style="color: black;">Please enter the 5 digit code sent to <?php echo substr($email,0,4).'...@gmail.com'; ?></p>
                  <div class="code">
                      <input style="background: transparent; text-align: center; width: 100px; border: none; border-bottom: 3px solid #000000; outline: none; padding: 1px 3px;" type = "number" name="code" maxlength = "5">
                  </div>
                  <p style="color: red;"><?php echo $error; ?></p>
                  <p >  Haven't recieved code?</p>
                  <p> <a style="text-decoration: underline; color: royalblue; cursor: pointer; " href="forgot_password.php" > Resend code </a> </p>
  
                  <button style="cursor: pointer; height: 38px; width: 170px; background-color: royalblue; " type="submit" name="submit" >Verify</button>
                  
              </form>
          </div>
      </div>
  
      <footer>
          
   
          <div id="copyright">
             
            Codexbase &copy; 2022 Codex Wine
          </div>
          <div  id="owner">
              <span>
                  Tems Of Service
              </span>
              <br>
              <span>
                  Private Policy
              </span>
          </div>
          
       </footer>
      </div>

</body>
</html>
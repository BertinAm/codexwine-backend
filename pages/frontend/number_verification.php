<?php
    include '../APIs/number_verification2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number_verification</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/number_verification.css">
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
                      <div class="headertitle">Verify Your Number</div>
                  </div>
               
                  <img style="margin-top: 1rem; margin-bottom: 2rem; " src="../../images/open-1324438819761869830.svg"  id="signupLogo"/>
        
                  <p>Please enter the 5 digit code sent to <br> <?php echo '+237 6'.'xx xxx '.substr($tel,6,9); ?></p>
                  <div class="code">

                  <input style="background: transparent; text-align: center; width: 100px; border: none; border-bottom: 3px solid #000000; outline: none; padding: 1px 3px;" type = "number" name="code" maxlength = "5">
                  
                  </div>
  
                  <p >  Haven't recieved code?</p>
                  <p> <a style="text-decoration: underline; color: royalblue; cursor: pointer; " > Resend number </a> </p>
                  <p style="color: red;"><?php echo $error; ?></p>
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
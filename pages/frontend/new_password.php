<?php
  include '../APIs/new_password2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Reset Password</title>
 
    <link rel="stylesheet" href="../../css/new_password.css">
</head>
<body>
    <div class="bg-image"></div>

<div class="bg-text">
    <div class="mainDiv">
        <div class="cardStyle">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " method="post" name="signupForm" id="signupForm">
            
            <div class="header">
              
                <div class="iconbtn back"><a href="<?php /*if (strpos($value, '@') !== false) {
                    echo 'email_verification.php';
	                  } else {
                      echo 'number_verification.php';
	                }*/ ?>" style="text-decoration: none;"></a></div>
                <div class="headertitle">Create  New Password</div>
            </div>

            <img  class="my-img" src="../../images/circle+lock+privacy+safe+secure+security+icon-1320196711879442976.svg">
            
            <h3 style="color: black;" >Please enter your new password</h3>
            
          <div class="inputDiv">
            <label class="inputLabel" for="password">New Password</label>
            <input style="border-bottom: 1.5px solid black; "  type="password" id="password" name="password" required>
          </div>
            
          <div class="inputDiv">
            <label style="margin-top: 1rem;" class="inputLabel" for="cpassword">Confirm Password</label>
            <input style="border-bottom: 1.5px solid black; "  type="password" id="confirmPassword" name="cpassword" required>
          </div>
          
            <p style="color: red;"><?php echo $error; ?></p>

          <div class="buttonWrapper">
            <button style=" margin-top: 0.5rem; border-radius: 20px; width: 190px; background-color: royalblue; " type="submit" name="submit" id="submitButton" 
            onclick="validateSignupForm()" class="submitButton pure-button pure-button-primary">
              <span>Save</span>
              
            </button>
          </div>
            
        </form>

        </div>
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


<script>

</script>

</body>
</html>
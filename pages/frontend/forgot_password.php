<?php
    include '../APIs/forgot_password2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/forgot_password.css">
</head>
<body>
    <div class="bg-image"></div>



<div class="bg-text">
    <div class="form-modal">

        <div class="header">
                          
            <div class="iconbtn back"></div>
            <div class="headertitle">Forgot Password</div>
          
            <!-- <p class="two-p">Select a method to verify the account is Yours</p> -->
        </div>
    
        <div class="form-toggle">
            <button id="login-toggle" 
             onclick="toggleLogin()">Email</button>
            <button 
            id="signup-toggle" onclick="toggleSignup()">Phone Number</button>
        </div>
        <!-- style="border-bottom: 4.5px solid royalblue;
        color: royalblue;  -->
        <div id="login-form">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

                <div class="col-lg-6 float-right center1 txt-center card-box2 two-step-div">
                    <img class="my-img" src="../../images/email+envelope+inbox+mail+message+send+icon-1320085879987098147.svg">
                   
                    <p class="two-p">Please enter your email address to
                        <br>recieve a verification code</p>
                    <form id="form">
                        <div class="inputDiv" >
                            <label style="color: black;" class="inputLabel" for="password">   Email Address</label>
                            <input style="border-bottom: 1.5px solid black;  " 
                            type="text" name="email" placeholder=" "/>
                           
                        </div>
                        <p style="color: red;"><?php echo $notice; ?></p>
                        <p style="color: red;"><?php echo $fault; ?></p>
                        <button 
                        style="margin-top: 35px; 
                        background-color: royalblue; " 
                        class="btn btn-primary btn-embossed
                         btn-verify" type="submit" name="submit">Send</button>

                
                    </form>
                </div>
                

                
                
    
            </form>
        </div>
    
        <div id="signup-form">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
               
                <div class="col-lg-6 float-right center1 txt-center card-box2 two-step-div">
                    <img class="my-img" src="../../images/phone-131988534823587945.svg">
                    <p class="two-p">Please enter your phone number to
                        <br>recieve a verification code</p>
                    <form id="form">
                        <div>
                        <input style="background: transparent; text-align: center; width: 200px; border: none; border-bottom: 3px solid #000000; outline: none; padding: 1px 3px;" type = "text" name="tel" maxlength = "9">
                    </div>
                        <p style="color: red;"><?php echo $fault; ?></p>
                        <button style="margin-top: 35px; background-color: royalblue;" class="btn btn-primary btn-embossed btn-verify"  type="submit" name="submit1">Send</button>
                
                    </form>
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

     <script
     src="https://code.jquery.com/jquery-3.4.1.min.js"
     integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
     crossorigin="anonymous"></script>
</script> 

<script>
    function toggleSignup(){
    document.getElementById("login-toggle").style.backgroundColor="#fff";
    document.getElementById("login-toggle").style.color="black";
    document.getElementById("login-toggle").style.borderBottom="2.5px solid white";
    document.getElementById("signup-toggle").style.borderBottom="2.5px solid royalblue";
    document.getElementById("signup-toggle").style.backgroundColor="white";
    // document.getElementById("signup-toggle").style.color="royalblue";
    document.getElementById("signup-toggle").style.color="royalblue";
    document.getElementById("login-form").style.display="none";
    document.getElementById("signup-form").style.display="block";
}

function toggleLogin(){
    document.getElementById("login-toggle").style.backgroundColor="white";
    document.getElementById("login-toggle").style.color="royalblue";
    document.getElementById("signup-toggle").style.backgroundColor="#fff";
    document.getElementById("signup-toggle").style.borderBottom="2.5px solid white";
    document.getElementById("login-toggle").style.borderBottom="2.5px solid royalblue";
    document.getElementById("signup-toggle").style.color="black";
    document.getElementById("signup-form").style.display="none";
    document.getElementById("login-form").style.display="block";
}

</script>

<!-- <script>
    $(document).ready(function () {

$('.not-first'). prop("disabled", true);

$('.btn-verify'). prop("disabled", true);

});   

$(function() {
'use strict';
var body = $('body');

function goToNextInput(e) {
  var key = e.which,
      t = $(e.target),
      sib = t.next('input');

  if (key === 9) {
    return true;
  }

  if (!sib || !sib.length) {
    sib = body.find('input').eq(0);
    $('.btn-verify'). prop("disabled", false);
  }

  sib.select().removeAttr('disabled');
  sib.select().focus();

}

function onFocus(e) {
  $(e.target).select();
}

body.on('keyup', 'input', goToNextInput);
body.on('click', 'input', onFocus);

})
</script> -->

</body>
</html>
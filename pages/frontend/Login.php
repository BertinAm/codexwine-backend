<?php
  include '../APIs/Login2.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>Login Page</title>
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"
    />
    <link rel="stylesheet" href="../assets/css/Contact-Form-Clean.css" />
    <link rel="stylesheet" href="../assets/css/Footer-Dark.css" />
    <link rel="stylesheet" href="../assets/css/styles.css" />
  </head>

  <body>
    <ul class="nav nav-tabs bg-white fixed-top">
      <li class="nav-item">
        <a class="nav-link link-dark" href="#"
          ><img
            src="../assets/img/logo.png"
            width="50"
            height="50"
            alt="codexwine logo"
            loading="eager"
          />CODEXJOBWIN</a
        >
      </li>
    </ul>

    <div id="bgimg_1"></div>
    <div class="bg-white" id="bgimg"></div>

    <div
      id="on_phonegreater_div"
      class="container align-items-center mt-5"
      style="align-items: center; display: flex; justify-content: center"
    >
      <div id="imagediv" class="" style="margin-top:50px; margin-bottom:px;margin-left:55px; margin-right:55px" >
        <div
          class="p-5 mb-0 bg-black round-3 form-div"
          style="
            --bs-bg-opacity: 0.9;                     
            color: rgb(247, 247, 247);
            min-width: none;
          "
        >
          <section class="contact-clean">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " method="post">
              <div
                class="P-2 m-1 align-items-center"
                style="text-align: center; color: rgb(72, 72, 240)"
              >
                <h2 class="text-center text-primary">LOGIN</h2>
              </div>
              <p>Email address&nbsp;</p>
              <div class="rounded-5 mb-3" style="border: 2px solid #1889cd">
                <input
                  class="form-control rounded-5"
                  type="email"
                  name="email"
                  placeholder="Email"
                  value="<?php if(isset($_POST['rem'])) echo $_POST['email'] ?>"
                  required
                />
              </div>
              <p>Password</p>
              <div class="rounded-5" style="border: 2px solid #1889cd">
                <input class="form-control rounded-5" type="password" placeholder="Password.." name="password" value="<?php if(isset($_POST['rem'])) echo $_POST['password'] ?>" required/>
              </div>
              <p style="color: red;"><?php echo $error; ?></p>
              <div class="row mt-4">
                <div class="col">
                  <div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="formCheck-1"
                        name="rem"
                      /><label class="form-check-label" for="formCheck-1"
                        >Remember Me</label
                      >
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div><a href="forgot_password.php">Forgot Password?</a></div>
                </div>
              </div>
              <div
                class="d-grid gap-2 mt-3 mx-auto rounded-4"
                style="
                  background: rgb(82, 150, 219);
                  background: linear-gradient(
                    90deg,
                    rgba(82, 150, 219, 1) 0%,
                    rgba(69, 163, 231, 1) 28%,
                    rgba(24, 137, 205, 1) 48%,
                    rgba(2, 17, 222, 1) 75%
                  );
                "
              >
                <button class="btn" type="submit" name="submit" >Sign in</button>
              </div>
              <div class="mt-3">
                <p>Do you have an account? <a href="#">Create One</a></p>
              </div>
            </form>
          </section>

          <h1 class="display-5 fw-bold"></h1>
          <p class="col-md-8 fs-4"></p>
        </div>
      </div>
    </div>
    <section class="contact-clean on_phone_div">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " method="post">
        <h2 class="text-center">LOGIN</h2>
        <p>Email address&nbsp;</p>
        <div class="rounded-5 mb-3" style="border: 2px solid #1889cd">
          <input
            class="form-control rounded-5"
            type="email"
            name="email"
            placeholder="Email"
            value="<?php if(isset($_POST['rem'])) echo $_POST['email'] ?>"
            required
          />
        </div>
        <p>Password</p>
        <div class="rounded-5" style="border: 2px solid #1889cd">
          <input class="form-control rounded-5" type="password"placeholder="Password.." name="password" value="<?php if(isset($_POST['rem'])) echo $_POST['password'] ?>" required />
        </div>
        <p style="color: red;"><?php echo $error; ?></p>
        <div class="row mt-4">
          <div class="col">
            <div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="formCheck-1"
                  name="rem"
                /><label class="form-check-label" for="formCheck-1"
                  >Remember Me</label
                >
              </div>
            </div>
          </div>
          <div class="col">
            <div><a href="forgot_password.php">Forgot Password?</a></div>
          </div>
        </div>
        <div
          class="d-grid gap-2 mt-3 mx-auto rounded-4"
          style="
            background: rgb(82, 150, 219);
            background: linear-gradient(
              90deg,
              rgba(82, 150, 219, 1) 0%,
              rgba(69, 163, 231, 1) 28%,
              rgba(24, 137, 205, 1) 48%,
              rgba(2, 17, 222, 1) 75%
            );
          "
        >
          <button class="btn" type="submit" name="submit" >Sign in</button>
        </div>
        <div class="mt-3">
          <p>Do you have an account? <a href="#">Create One</a></p>
        </div>
      </form>
    </section>

    
    <footer class="footer-dark mt-5" style="position:relative;">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3 item">
            <h3>Services</h3>
            <ul>
              <li><a href="#">Web design</a></li>
              <li><a href="#">Development</a></li>
              <li><a href="#">Hosting</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3 item">
            <h3>About</h3>
            <ul>
              <li><a href="#">Company</a></li>
              <li><a href="#">Team</a></li>
              <li><a href="#">Careers</a></li>
            </ul>
          </div>
          <div class="col-md-6 item text">
            <h3>CODEXJOBWIN</h3>
            <a class="link-secondary border-secondary" id="a" href="#">
              <p class="lead text-white">Terms of services</p> </a
            ><a class="link-secondary border-secondary" id="a-1" href="#">
              <p class="lead text-light">Privacy Policy</p>
            </a>
          </div>
          <div class="col item social">
            <a href="#"><i class="icon ion-social-facebook"></i></a
            ><a href="#"><i class="icon ion-social-twitter"></i></a
            ><a href="#"><i class="icon ion-social-snapchat"></i></a
            ><a href="#"><i class="icon ion-social-instagram"></i></a>
          </div>
        </div>
        <p class="copyright">Copy write © 2022 Codex Wine</p>
      </div>
    </div>
    </footer> 
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  <!-- done -->
</html>

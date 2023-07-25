

<?php

require 'function.php';

error_reporting(0);
if( isset($_POST["register"])) {
    if( registrasi($_POST) > 0) {
        echo "<script>
                alert('Berhasil Membuat Akun!');
              </script>";
        echo "<script>window.location = 'https://dekuraserver.000webhostapp.com/gemilang/home.php'; </script>";
    }
    else {
        echo mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Gemilang - We are One!</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="style/register.css?v=<?php echo time(); ?>" rel="stylesheet" />
  </head>

  <body>
    <div class="wrapper" id="displ">
      <div class="row">
        <div class="col-lg right-col">
          <div class="wrapper-card" id="regmode">
            <div class="title d-flex justify-content-between align-items-center" data-aos="fade-down">
              <h1>Gemilang</h1>
              <a href="index.php" class="ml-sm-auto ml-md-auto ml-lg-auto mt-sm-3 mt-md-3 mt-lg-3">Sign In ></a>
            </div>
            <div class="content" data-aos="fade-right">
              <div class="title-content mb-4">
                <p>Hello, <span>Good Morning!</span></p>
                <h1>Sign Up Account</h1>
              </div>
              <div class="register text-center">
                <form action="" method="post">
                  <div class="input">
                    <input type="text" name="nama" id="nama" class="mb-4" placeholder="Enter your fullname" />
                  </div>
                  <div class="input">
                    <input type="text" name="username" id="username" class="mb-4" placeholder="Enter your username" />
                  </div>
                  <div class="input">
                    <input type="password" name="password" id="password" class="mb-4" placeholder="Enter your password"  />
                    <!-- <img src="images/eye.png" alt="" class="eye-image d-none d-lg-block" /> -->
                  </div>
                  <div class="input">
                      <input type="password" name="password2" id="password2" class="mb-4" placeholder="Konfirmasi password" />
                  </div> 
                    <!-- <img src="images/eye.png" alt="" class="eye-image d-lg-block" /> -->
                  </div>
                  <div class="blue-button text-center">
                    <button type="submit" name="register" class="sign-up">Sign Up</button>
                    <img src="images/google.png" alt="" class="d-none d-lg-block" />
                    <button type="submit">Create Account with Google </button>
                  </div>
                  <div class="text-sign-in d-flex mt-3">
                    <p>Already have an account?</p>
                    <a href="index.php" class="ml-2">Sign In</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
         <div class="col-lg left-col" id="fotstart">
          <h1>
            Start for free and<br />
            be part of us!
          </h1>
        </div> 
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <!-- <script src="/script/app.js"></script>
    <script src="/script/app2.js"></script> -->
    <script src="script/register.js?v=<?php echo time(); ?>"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>

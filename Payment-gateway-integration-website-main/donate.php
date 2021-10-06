<?php 
$con=mysqli_connect("localhost","id17696582_root","D*8k@_v9^CTmWvp~","id17696582_store");
if($con)
{
  //echo "connection established<br>";
}
else{
  echo "fail";
}
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
                       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                           <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
                                   <link rel="stylesheet" type="text/css" href="style2.css">

    <title>The Sparks Foundation</title>
  </head>
 <body style="background-image: url(c.jpg); background-repeat: no-repeat; background-size: cover; opacity: 0.8; background-position: 50% 35%;">
        <!--Navigation bar-->
    <nav style="color: grey;">
      <div class="logo">
        <h1 >The Sparks Foundation</h1>
      </div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li style="padding-left:25px; padding-right:0px;"><a href="https://mobilepay100.000webhostapp.com/">View customers</a></li>
      </ul>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>


             <?php

    if (isset($_SESSION['success'])) {

   ?> 
         <script>
            swal({
                  title: "Transsection Successfully!",
                  text: "Your amount is Successfully delevered!",
                  icon: "success",
              });
            <?php
            unset($_SESSION['success']);
        //session_unset();
        //session_destroy();
        ?>
        </script>

        


  <?php }  ?>

               <?php

    if (isset($_SESSION['error'])) {

   ?> 
         <script>
            swal({
                  title: "Oops!",
                  text: "Your amount is not Successfully delevered! \n\r Please complete the details again",
                  icon: "error",
              });
            <?php
            unset($_SESSION['error']);
        session_unset();
        session_destroy();
        ?>
        </script>

        


  <?php }  ?>


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 md-3">
                <img src="bg-2.gif" alt="wait for gif" style="width: 100%; height: 100%">
            </div>
            <div class="col-lg-6 md-3"style="background-color:#1e90ff; color: white; padding: 30px;">
                <form action="donate_submit.php" method="post" accept-charset="utf-8">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required pattern=".+@gmail.com" size="30">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Amount</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="amount" required>
                      </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">contact</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="contact" required size="10">
                      </div>
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>
                      <button type="submit" class="btn btn-primary" style="display: inline-block;">Submit</button>
                    </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="app.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <footer>
  <div class="container" style="background-color: darkgrey; color: white;">
    Copyright <span class="glyphicon glyphicon-copyright-mark"></span> Online Banking Site.
    For the Project of The Sparks Foundation | Made by Rishika Sinha
  </div>
</footer>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
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
$_email=$_POST['email'];
$_amount=$_POST['amount'];
$_contact=$_POST['contact'];

/*$sql_1="INSERT INTO sparks.donate_user (email, amount,contact) VALUES ('$_email','$_amount','$_contact')";
//$result_1=mysqli_query($con,$sql_1);
if (mysqli_query($con,$sql_1)) {
  echo "success";
}
else{
  echo "fail";
}*/
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
                           <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
                                   <link rel="stylesheet" type="text/css" href="style2.css">

    <title>The Sparks Foundation</title>
  </head>
  
      
     <body style="background-image: url(a.jpg); background-position: 50% 55%; backround-size: cover; background-repeat: no-repeat; opacity:0.8;">
      
     
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


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                
            </div>
            <div class="col-lg-6">
                                  <div class="card  ">
                    <div class="card-header bg-primary" style="color: white;">                      
                        <div class="col">
                          <h2>The Sparks Foundation</h2>
                        </div>
                        <div class="col">
                          <h1>&#x20b9;<?php echo $_amount;?></h1>
                        </div>                      
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title">Thank You!! For Your Economical Help</h5>
                      <p class="card-text">I suppose the word is “gratified.” We are gratified that you believe in our work enough to give us a grant. Thank you for your trust in us.</p>
                      <div>
                        <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg></span>
                              </div>
                              <input type="text" class="form-control" placeholder="<?php echo $_contact;?>" disabled>

                            </div>
                            
                            <div class="input-group mb-3">
                                                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">
                                  
                                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-mailbox" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/>
  <path fill-rule="evenodd" d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854z"/>
  <path d="M5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/>
</svg>

                                </span>
                              </div>
                              <input type="text" class="form-control" placeholder="<?php echo $_email;?>" disabled>

                            </div>
                      
                                                  </div>
                            
                      <div class="row">
                        <table class="table table-hover">
                                      <tbody>
                                        <tr data-toggle="modal" data-target="#staticBackdrop">
                                          <th scope="row"><img src="bg-3.png" style="height: 45px; width: 85px;"></th>
                                          <td > Credit Card</td>
                                        </tr>
                                        <tr data-toggle="modal" data-target="#staticBackdrop1">
                                          <th scope="row"><img src="pay-1.jpeg" style="height: 45px; width: 85px;"></th>
                                          <td>UPI money Transfer</td>
                                        </tr>
                                        <tr data-toggle="modal" data-target="#staticBackdrop2">
                                          <th scope="row"><img src="pay-2.jpeg" style="height: 45px; width: 85px;"></th>
                                          <td colspan="1">Net Banking</td>
                                        </tr>
                                      </tbody>
                                    </table>
                      </div>
                    </div>
                    <div class="card-footer text-muted">


                      <div class="intput-group-text">

                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zm-7-1a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-7zm0-3a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
</svg>
This payment is secured by Sparks.
                        
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3">
              
            </div>
        </div>
    </div>




    <!--strating of model credit card-->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary" style="color: white;">
        <h5 class="modal-title" id="staticBackdropLabel">The Sparks Foundation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: white;">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="card.php" method="post" accept-charset="utf-8">
          <div class="container">
            <div class="row">
              <div class="col-lg-9">
                <div class="form-group">
                  <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Card Number" name="card_num" size="15" required min="15">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Exp-Date" name="exp" required>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Card Holder's Name" name="card_holder" required>
                  <br>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <input type="number" class="form-control" id="exampleInputPassword1" placeholder="CVV" required="true" name="cvv" size="3" required min="3">
                </div>
              </div>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" checked required>
              <label class="form-check-label" for="exampleCheck1" required>Check me out</label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Pay &#x20b9; <?php echo $_amount;?></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
    <!--ending  of model credit card-->


        <!--strating of model upi card-->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary" style="color: white">
        <h5 class="modal-title" id="staticBackdropLabel">The Sparks Foundation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: white;">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="upi.php" method="post" accept-charset="utf-8">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                                <label class="" checked>UPI-ID</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Google-pay, Phone-pay,BHIM" required="true" name="upi" size="10" min="10">
                </div>
              </div>

            </div>
          </div>
          
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Pay &#x20b9; <?php echo $_amount;?></button>
          
        </form>
      </div>
    </div>
  </div>
</div>
    <!--ending  of model credit card-->


            <!--strating of model netbanking card-->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary" style="color: white">
        <h5 class="modal-title" id="staticBackdropLabel">The Sparks Foundation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: white;">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <p>Services will available soon</p>
      </div>
    </div>
  </div>
</div>

    <?php $_SESSION['email']=$_email; 
          $_SESSION['contact']=$_contact;
          $_SESSION['amount']=$_amount;
    ?>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="script.js"></script>
    <script src="app.js"></script>
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
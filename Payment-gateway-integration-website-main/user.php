<?php 
$con=mysqli_connect("localhost","id15395733_root","fJNL1_v0*ol$/2[G","id15395733_sparks");
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

$id=$_GET['id'];
//$success=$_GET['success'];
//$error=$_GET['error'];
$select_query="SELECT * FROM user_name WHERE user_name.id=$id";
$select_query_result=mysqli_query($con,$select_query);
$total_row_fetch=mysqli_num_rows($select_query_result);
$row=mysqli_fetch_array($select_query_result);
//echo "total no of data<br>".$total_row_fetch;
//while($row=mysqli_fetch_array($select_query_result))
//{
 /*function sum($var1,$var2)
 {
  $add=$var1+$var2;
  return $add;
 }*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

         <link rel="stylesheet" type="text/css" href="style1.css">

         <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <title>Sparks Foundation</title>
  </head>
  <body>

        <!--starting of navigaton bar-->
<nav style="">
  <div class="logo">
    <h1 >The Sparks</h1>
  </div>
  <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="data.php">View_all_customers</a></li>
  </ul>
  <div class="burger">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
  </div>
</nav>
<script src="app.js"></script>
<!--Ending of navigaton bar-->


<div class="container">
  <div class="row mt-5">
    <div class="col">
      <center>
        <h1 class="text-success">Hii <?php echo $row['Name'];?>!!</h1>
      </center>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-lg-6">
      <svg width="25em" height="25em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
        <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
      </svg>
    </div>
    <div class="col-lg-6">
      <dl class="row">
        <dt class="col-sm-4">Description</dt>
        <dd class="col-sm-8"> We are a B2B brand that is exists to help over 1M business owners succeed by focusing on visibility & resources.</dd>

        <dt class="col-sm-4">Our Motive</dt>
        <dd class="col-sm-8">
          <p> to achieve a profit by earning more from the interest charged on loans than the interest paid to depositors.</p>
          
        </dd>

        <dt class="col-sm-4">Account No</dt>
        <dd class="col-sm-8"><?php echo $row['account_no']; ?></dd>

        <dt class="col-sm-4 text-truncate">IFCE - No</dt>
        <dd class="col-sm-8"><?php echo $row['ifce']; ?></dd>

        <dt class="col-sm-4">Contact Details</dt>
        <dd class="col-sm-8">
          <dl class="row">
            <dt class="col-sm-4">Email</dt>
            <dd class="col-sm-8"><?php echo $row['email']; ?></dd>
          </dl>
          <dl class="row">
            <dt class="col-sm-4">Contact</dt>
            <dd class="col-sm-8"><?php echo $row['contact']; ?></dd>
          </dl>
          <dl class="row">
            <dt class="col-sm-4">Amount</dt>
            <dd class="col-sm-8"><?php echo $row['balance']; ?></dd>
          </dl>
        </dd>
        <a href="#"><dt class="col-sm-12 btn btn-success" data-toggle="modal" data-target="#staticBackdrop">Transfer</dt></a>
        </dl>
      </div>
    </div>
  </div>

    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form action="transfer.php?id=<?php echo $id;?>" method="post" accept-charset="utf-8">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Amount</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="amount">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <div class="modal-footer">
          <button type="submit" class="btn btn-success" >Transfer</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>

              <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Understood</button>-->
      </div>

      </div>
    </div>
  </div>
</div>

 

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

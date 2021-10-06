<?php 
$con=mysqli_connect("localhost","root","","sparks");
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

$email5=mysqli_real_escape_string($con,$_SESSION['email']);
$contact=mysqli_real_escape_string($con,$_SESSION['contact']);
$amount=mysqli_real_escape_string($con,$_SESSION['amount']);
$upi=mysqli_real_escape_string($con,$_POST['upi']);
$sql_1="INSERT INTO card(email,contact,card_num,card_holder,exp,cvv,upi,amount) VALUES('$email5','$contact','0','0','0','0','$upi','$amount')";
//$result_1=mysqli_query($con,$sql_1);
if (mysqli_query($con,$sql_1)) {
  echo "success";
  $_SESSION['card_holder']=$upi;
  $_SESSION['email']=$email5;
  header('location:send_mail.php');
}
else{
  echo "fail";
}

?>
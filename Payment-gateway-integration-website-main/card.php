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

$email=mysqli_real_escape_string($con,$_SESSION['email']);
$contact=mysqli_real_escape_string($con,$_SESSION['contact']);
$card_num=mysqli_real_escape_string($con,$_POST['card_num']);
$card_holder=mysqli_real_escape_string($con,$_POST['card_holder']);
$cvv=mysqli_real_escape_string($con,$_POST['cvv']);
$exp=mysqli_real_escape_string($con,$_POST['exp']);
$amount=$_SESSION['amount'];
echo $email;
echo $card_num;
echo $card_holder;
echo $exp;
echo $cvv;
$sql_1="INSERT INTO sparks.card (email,contact,card_num,card_holder,exp,cvv,upi,amount) VALUES ('$email', '$contact', '$card_num', '$card_holder', '$exp', '$cvv', '0', '$amount')";
//$result_1=mysqli_query($con,$sql_1);
if (mysqli_query($con,$sql_1)) {
  echo "success";
  $_SESSION['card_holder']=$card_holder;
  $_SESSION['email']=$email;
  header('location:send_mail.php');
}
else{
  echo "fail";
}

?>
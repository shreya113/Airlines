<?php
$con=mysqli_connect('localhost','root','','booking');
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
   $name = $_POST['name']; 
  $pass = $_POST['password'];
    
    
    $sql = "SELECT * FROM user WHERE name = '$name' and pass = '$pass'";
    $result = mysqli_query($con,$sql);
    $count = mysqli_num_rows($result);
    echo $count;

    if($count != 0){
    	echo "true";
      header("location:http://localhost/booking3/ticket1/ticket1.php");
    }
    else{
    	echo "wrong!!!!!!!!!!!! go back to login page";

    }
    





 }     
?>
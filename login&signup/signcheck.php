<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['name']; 
    $pass = $_POST['password'];
    $email= $_POST['email'];

$con=mysqli_connect('localhost','root','','booking');
$query="INSERT INTO user (name,pass,email) VALUES ('$name','$pass','$email')";


$run=mysqli_query($con,$query);
 echo "hi ",$name ;
 if ($run==TRUE) {

  echo "\n your data is inserted successfully now you able to LOGIN";
  header("location:");
}
else
{
  echo" wrong my bro!!!!!!!!!!!! \n please re-enter password and username ";
  
}
}

?>
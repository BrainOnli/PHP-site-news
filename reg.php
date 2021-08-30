<?php 	

$conn = mysqli_connect("localhost", "root","","staff");

if($conn === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
        }
          
$first_name =  $_REQUEST['first_name'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];

  
$sql = "INSERT INTO college  VALUES ('$first_name','$password','$email')";
  
if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully." 
        . " Please browse your localhost php my admin" 
        . " to view the updated data</h3>"; 

    echo nl2br("\n$first_name\n  "
        . "$address\n $email");

    echo "<a href='index.php'>Back to login</a>";

} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
}
  
mysqli_close($conn);

?>
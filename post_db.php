<?php 					
$conn = mysqli_connect("localhost", "root","","staff");

if($conn === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
        }

$title = $_REQUEST['title'];
// $img = $_REQUEST['image'];
$discription = $_REQUEST['discription'];
$date = $_REQUEST['date'];
$image = $_REQUEST['image'];

$sql = "INSERT INTO content  VALUES ('$image','$title','$discription','$date')";

if(mysqli_query($conn, $sql)){
    header("location: post.php");

} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
}

mysqli_close($conn);
 

 ?>
 <pre>
     <?php var_dump($_FILES['image']) ?>
 </pre>
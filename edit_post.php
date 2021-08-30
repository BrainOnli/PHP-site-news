<?php 
session_start();
$conn = mysqli_connect('localhost', 'root','','staff');
if(!$conn) {
	die('Error connect to DataBase'. mysqli_connect_error());
} 
					
$title = $_REQUEST['title'];
$img = $_REQUEST['image'];
$discription = $_REQUEST['discription'];
$date = $_REQUEST['date'];
$image = $_REQUEST['image'];
$post_id = $_REQUEST['id_post']

$sql = "UPDATE content SET title = '$title'  WHERE id = '$post_id'";
// $sql = "INSERT INTO content  VALUES ('$image','$title','$discription','$date')";

if(mysqli_query($conn, $sql)){
    header("location: edit.php");
    echo 'goode!';

} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
}
// if($title != null) {
//     $sql = "UPDATE content SET title = $title WHERE id = $post_id";
//     if(mysqli_query($conn, $sql)){
//         echo 'Edit good';
//         echo nl2br("\n$first_name\n  "
//         . "$address\n $email");
//     }
//     echo 'Bad';
//     echo nl2br("\n$first_name\n  "
//         . "$address\n $email");
// }

mysqli_close($conn);
 

 ?>
 <pre>
 	<?php echo $title ?>
    <br>
    <?php echo $img ?>
    <br>
    <?php echo $discription ?>
    <br>
    <?php echo $post_id ?>
 </pre>
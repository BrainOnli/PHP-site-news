<?php  
$target_path = "/uploads";  
$target_path = $target_path.basename ($_FILES ['fileToUpload'] ['имя']);  
  
if (move_uploaded_file ($_FILES ['fileToUpload'] ['tmp_name'], $target_path)) {  
 echo "Файл успешно загружен!";  
} еще{  
 echo "Извините, файл не загружен, попробуйте еще раз!";  
}  
?>  
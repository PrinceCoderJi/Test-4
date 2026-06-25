<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload files by using php  </title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        Name: <input type="text" name="myname"><br><br>
        <input type="file" name="profile"><br><br>
        <input type="submit" value="upload Files" name="submit">
    </form>
</body>
</html>

<?php

if(isset($_FILES['profile'])){

   $file_name = $_FILES['profile']['name'];
   $file_path = $_FILES['profile']['full_path'];
    $file_type = $_FILES['profile']['type'];
   $file_tmpname = $_FILES['profile']['tmp_name'];
   $file_error = $_FILES['profile']['error'];
   $file_size = $_FILES['profile']['size'];


   $foldername = "uploads";
   if(!file_exists($foldername)){
      mkdir($foldername,0777,true);
      echo "Folder created";

   }
   else{
    echo "alreaddy exists";
   }

      move_uploaded_file($file_tmpname,$file_path);
      echo "successfully uploaded";









}







?>

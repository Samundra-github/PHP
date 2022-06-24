<?php
  if (isset($_FILES['image'])) {
    
    $file_name = $_FILES['image']['name'];
    $file_path = $_FILES['image']['full_path'];
    $file_size = $_FILES['image']['size'];
    $file_tmp  = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    if (move_uploaded_file($file_tmp, "Uploaded File/". $file_name)) {
      echo "File Uploaded Succefully.";

    } else {
      echo "File couldn't uploaded. Please trya again";
      
    }
    
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
      <input type="file" name="image" /> <br> <br>
      <input type="submit" />
    </form>
</body>
</html>
<?php

    if(!empty($_GET['file'])) {

        $filename = basename($_GET['file']);
        $filepath = 'Download File/'. $filename;
        if(!empty($filename) && file_exists($filepath)) {

            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$filename");
            header("Content-Type: application/pdf");

            readfile($filepath);
            exit;
        }
        else {
            echo "This File Does Not Exist.";
        }
    } 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Download</title>
</head>
<body>
  
        <h2 style="color: Red;" >Welcome To PHP Download</h2>
        <p style="color: Green;" >Click below To Download</p>
        <a href="downloadFile.php?file=Profile1.pdf">Download Here</a>

</body>
</html>

<?php
    
    // Start session and get data
    session_start();
    if (isset($_SESSION['username'])) {
        echo "This is Session : ";
        echo "<br>Welcome " . $_SESSION['username'];
        echo "<br> Your Favorite Player is " . $_SESSION['favPlayer'];
    } else {
        echo "Please Login to continue.";
    }

?>
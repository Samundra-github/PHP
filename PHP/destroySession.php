<?php
    // Destroy session and get data
    
    session_start();
    session_unset();
    session_destroy();
    echo "<br>You have been Logged Out. Please Login.";

?>
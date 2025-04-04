WAP in php to destroy a session
<br>
<?php

    // Starting session
    session_start();
     
    // Removing session variable
    if(isset($_SESSION["lastname"])){
        unset($_SESSION["lastname"]);
    }
    else{
        echo "Session already destroyed.";
    }
    echo "<br>";
    echo "This Program is written by Aaryan Goel 0221BCA163"
?>
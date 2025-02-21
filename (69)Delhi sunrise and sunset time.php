WAP in php to demonstrate sunrise() and sunset() time of Delhi
<br>
<!DOCTYPE html>
<html>
<body>

<?php

    // Calculate the sunrise and sunset time for New Delhi, India
    // Latitude: 28.70 North
    // Longitude: 77.10 East
    // Zenith ~= 90
    // Offset: +5.5 GMT (India Standard Time)
    
    echo "New Delhi, India <br>";
    echo("Date: " . date("D M d Y"));
    echo("<br>Sunrise time: ");
    echo(date_sunrise(time(), SUNFUNCS_RET_STRING, 28.70, 77.10, 90, 5.5));
    echo("<br>Sunset time: ");
    echo(date_sunset(time(), SUNFUNCS_RET_STRING, 28.70, 77.10, 90, 5.5));

?>

<br>
"This Program is written by Aaryan Goel 0221BCA163"
</body>
</html>

WAP in php to demonstrate multi dimensional array
<br>
<!DOCTYPE html>
<html>
<head>
    <title>E-School</title>
</head>
<body>
    <?php
    $marks = array(
        "roshan" => array(
            "physics" => 35,
            "maths" => 30,
            "chemistry" => 39
        ),
        "twinkle" => array(
            "physics" => 30,
            "maths" => 32,
            "chemistry" => 29
        ),
        "zara" => array(
            "physics" => 31,
            "maths" => 22,
            "chemistry" => 39
        )
    );
    /* Accessing multi-dimensional array values */
    echo "Marks for Roshan in physics: " . $marks['roshan']['physics'] . "<br/>";
    echo "Marks for Twinkle in maths: " . $marks['twinkle']['maths'] . "<br/>";
    echo "Marks for Zara in chemistry: " . $marks['zara']['chemistry'] . "<br />";
    echo "This Program is written by Aaryan Goel 0221BCA163"
    ?>
</body>
</html>
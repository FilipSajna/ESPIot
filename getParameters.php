<?php
        echo '<h1>getParameters page</h1>';
        echo '<h2>https://espwebboss.azurewebsites.net/getParameters.php?a=10&b=2</h1>';
        
        $sn1 = $_GET["a"];
        $sn2 = $_GET["b"];
        
        $text = "a=" . $sn1 . " b=" . $sn2;
        $sum = $sn1 + $sn2;
        
        echo $text;
        echo "<br>";
        echo "Sum:" . $sum;
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Measured Air Quality</title>
    <style>
        html {
            font-family: Helvetica;
            display: inline-block;
            margin: 0px auto;
            text-align: center;
        }

        body {
            margin-top: 50px;
        }

        h1 {
            color: #444444;
            margin: 50px auto 30px;
        }

        p {
            font-size: 24px;
            color: #444444;
            margin-bottom: 10px;
        }
    </style>
</head>


<body>
    <div id="webpage">
        <h1>Measured Air Quality</h1>

        <?php

        $temp = $_GET["temp"];
        $hum = $_GET["hum"];
        $co2 = $_GET["co2"];
        $tvoc = $_GET["tvoc"];

        $text = "Temperature : " . $temp ;
        $text2 = "Humidity  : " . $hum;
        $text3 = "CO2 : " . $co2;
        $text4 = " TVOC : " . $tvoc;

        echo $text;
        echo $text2;
        echo $text3;
        echo $text4;
?>

    </div>
</body>


</html>
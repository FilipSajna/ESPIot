<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>exam</title>
</head>
<body>
    <form>
        <input type="text" name="display" value="" disabled>
        <br>
        <input type="button" value="1" onclick="display.value += '1'">
        <input type="button" value="2" onclick="display.value += '2'">
        <input type="button" value="3" onclick="display.value += '3'">
        <input type="button" value="+" onclick="display.value += '+'">
        <br>
        <input type="button" value="4" onclick="display.value += '4'">
        <input type="button" value="5" onclick="display.value += '5'">
        <input type="button" value="6" onclick="display.value += '6'">
        <input type="button" value="-" onclick="display.value += '-'">
        <br>
        <input type="button" value="7" onclick="display.value += '7'">
        <input type="button" value="8" onclick="display.value += '8'">
        <input type="button" value="9" onclick="display.value += '9'">
        <input type="button" value="*" onclick="display.value += '*'">
        <br>
        <input type="button" value="C" onclick="display.value = ''">
        <input type="button" value="0" onclick="display.value += '0'">
        <input type="button" value="=" onclick="display.value = eval(display.value)">
        <input type="button" value="/" onclick="display.value += '/'">
    </form>

</body>
</html>

<?php
        echo '<h1>IoT exam calculator</h1>';
        echo '<h2>https://espwebboss.azurewebsites.net/exam.php</h2>';
    ?>
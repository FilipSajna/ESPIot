<html>
<head></head>
<body>
<form action="phpform.php" method="post">
<label for = "name">Name : </label>
<input type="text" name="name" required><br>
<input type="submit" name="submit">
</body>
</html>

<?php
if(isset($_POST['name']))
{
$names=$_POST['name'];
file_put_contents('ESPIot/txtfiles/FirstNames.txt', $names, FILE_APPEND);
}
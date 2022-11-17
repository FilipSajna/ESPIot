<html>
<head></head>
<body>
<form action="phpform.php" method="post">
<label for = "name">Name : </label>
<input type="text" name="name" required><br>
<input type="submit">
</body>
</html>

<?php
if(isset($_POST['name']))
{
$names=$_POST['name'];
$fp = fopen('txtfiles/FirstNames.txt', 'a');
fwrite($fp, $names);
fclose($fp);
}
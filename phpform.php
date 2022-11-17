<html>
<head></head>
<body>
<form action="phpform.php" method="post">
<label for = "name">Name data : </label>
<input type="text" name="textdata" required><br>
<input type="submit" name="submit">
</body>
</html>

<?php
if(isset($_POST['textdata']))
{
$data=$_POST['textdata'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
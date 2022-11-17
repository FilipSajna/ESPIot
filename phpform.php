<html lang = "en">

<head>
    <title>Contact form<title>
</head>

<body>

<header>
    <h2 align="left">Atipatapati</h2>
  </header>

<form action="phpform.php" method="post">
Name :      <input type="text" name="name" required><br>
Surname :   <input type="text" name="surname" required><br>
E-mail :    <input type="email" name="email" required><br>
Adress :    <input type="text" name="adress"required><br>
Number :    <input type="number" name="number" required><br>
Postal code : <input type="number" name="psc" required><br>
State :     <input type="text" name="state" required><br>
Phone number : <input type="tel" name="phonenumber" pattern="^\d{4}\d{3}\d{3}$" placeholder="Napr. 0940 093 090" required><br>
<input type="submit">
<input type="reset">
</form>

</body>
</html>
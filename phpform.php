<html lang = "en">

<head><title>Contact form</title><head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  grid-area: header;
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
  font-size: 35px;
}

.grid-container {
  display: grid;
  grid-template-areas: 
    'header header header header header header' 
    'left middle middle middle middle right' 
    'footer footer footer footer footer footer';
} 

.left,
.middle,
.right {
  padding: 10px;
  height: 300px;
}

.left {
  grid-area: left;
}

.middle {
  grid-area: middle;
}

.right {
  grid-area: right;
}

.footer {
  grid-area: footer;
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

@media (max-width: 600px) {
  .grid-container  {
    grid-template-areas: 
      'header header header header header header' 
      'left left left left left left' 
      'middle middle middle middle middle middle' 
      'right right right right right right' 
      'footer footer footer footer footer footer';
  }
}
</style>

<body>

<header><div class = "header"><h2 align = "center">Atipatapati</h2></div></header>

<form action="phpform.php" method="post" style="text-align: center; ">
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
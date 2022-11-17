<html lang = "en">

<head><title>Contact form</title><head>
<style>
* {
    box-sizing: border-box;
}

body {
    background-image: url("content/bck1.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
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

.label {
    font-size : 20px;
    font-family : Arial;
}

label {
    vertical-align: top;
    display: inline;
}

:required {
    border: 0.5px solid blue;
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
<label for = "name" class = "label">Name : </label>      <input type="text" name="name" required><br>
<label for = "surname" class = "label">Surname : </label>   <input type="text" name="surname" required><br>
<label for = "email" class = "label">E-mail : </label>    <input type="email" name="email" required><br>
<label for = "adress" class = "label">Adress : </label>    <input type="text" name="adress"required><br>
<label for = "number" class = "label">Number : </label>    <input type="number" name="number" required><br>
<label for = "psc" class = "label">Postal code : </label> <input type="number" name="psc" required><br>
<label for = "state" class = "label">State : </label>     <input type="text" name="state" required><br>
<label for = "phonenumber" class = "label">Phone number : </label> <input type="tel" name="phonenumber" pattern="^\d{4}\d{3}\d{3}$" placeholder="Napr. 0940 093 090" required><br>
<input type="submit" class = "label">
<input type="reset" class = "label">
</form>

</body>
</html>
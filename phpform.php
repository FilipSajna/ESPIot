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
    background-color: rgba(255,255,255);
    opacity: 0.9;
    padding: 10px;
    text-align: center;
    font-size: 30px;
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
    background: rgba(255,255,255);
    border-radius: 0.8rem;
    padding: 26px;
    opacity: 0.6;
}

.middle {
    grid-area: middle;
}

.right {
    grid-area: right;
    text-align: right;
    background: rgba(255,255,255);
    border-radius: 0.8rem;
    padding: 26px;
    opacity: 0.6;
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
    display: inline;
}

:required {
    border: 1px solid white;
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
<div class="grid-container">

<div class = "header"><h2 align = "center">Atipatapati</h2></div>

<div class = "left">Atipatapati</div>

<div class = "middle">
<form method="post" style="text-align: center;">
<label for = "name" class = "label">Name : </label>      <input type="text" name="name" required><br>
<label for = "surname" class = "label">Surname : </label>   <input type="text" name="surname" required><br>
<label for = "email" class = "label">E-mail : </label>    <input type="email" name="email" required><br>
<label for = "adress" class = "label">Adress : </label>    <input type="text" name="adress"required><br>
<label for = "number" class = "label">Number : </label>    <input type="number" name="number" required><br>
<label for = "psc" class = "label">Postal code : </label> <input type="number" name="psc" required><br>
<label for = "state" class = "label">State : </label>     <input type="text" name="state" required><br>
<label for = "phonenumber" class = "label">Phone number : </label> <input type="tel" name="phonenumber" pattern="^\d{4}\d{3}\d{3}$" placeholder="E.g : 0940 093 090" required><br>
<input type="submit" class = "label">
<input type="reset" class = "label">
</form>
</div>

<div class = "right">Atipatapati2</div>

</div>
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

if(isset($_POST['surname']))
{
$surnames=$_POST['surname'];
$fp = fopen('txtfiles/Surnames.txt', 'a');
fwrite($fp, $surnames);
fclose($fp);
}

if(isset($_POST['email']))
{
$emails=$_POST['email'];
$fp = fopen('txtfiles/emails.txt', 'a');
fwrite($fp, $emails);
fclose($fp);
}

if(isset($_POST['adress']))
{
$adresses=$_POST['adress'];
$fp = fopen('txtfiles/adresses.txt', 'a');
fwrite($fp, $adresses);
fclose($fp);
}

if(isset($_POST['number']))
{
$AdressNumbers=$_POST['number'];
$fp = fopen('txtfiles/AdressNumbers.txt', 'a');
fwrite($fp, $AdressNumbers);
fclose($fp);
}

if(isset($_POST['psc']))
{
$pscs=$_POST['psc'];
$fp = fopen('txtfiles/pscs.txt', 'a');
fwrite($fp, $pscs);
fclose($fp);
}

if(isset($_POST['state']))
{
$states=$_POST['state'];
$fp = fopen('txtfiles/states.txt', 'a');
fwrite($fp, $states);
fclose($fp);
}

if(isset($_POST['phonenumber']))
{
$phonenumbers=$_POST['phonenumber'];
$fp = fopen('txtfiles/phonenumbers.txt', 'a');
fwrite($fp, $phonenumbers);
fclose($fp);
}
?>
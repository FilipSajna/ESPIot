<html lang = "en">

<head>
    <meta charset="UTF-8">
    <title>Contact form</title>
    <head>
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
    padding: 10px;
    text-align: center;
    background: rgba(255,255,255);
    border-radius: 0.8rem;
    opacity: 0.6;
    padding-top: 10px;
    position: absolute;
    bottom: 0;
    left: 0;
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

<div class = "header"><h2 align = "center">Contact form</h2></div>

<div class = "middle">
<form method="post" style="text-align: center;">
<label class = "label">Name : </label>      <input type="text" name="name" required><br>
<label class = "label">Surname : </label>   <input type="text" name="surname" required><br>
<label class = "label">E-mail : </label>    <input type="email" name="email" required><br>
<label class = "label">Adress : </label>    <input type="text" name="adress" required><br>
<label class = "label">Number : </label>    <input type="number" name="number" required><br>
<label class = "label">Postal code : </label> <input type="number" name="psc" required><br>
<label class = "label">State : </label>     <input type="text" name="state" required><br>
<label class = "label">Phone number : </label> <input type="tel" name="phonenumber" pattern="^\d{4}\d{3}\d{3}$" placeholder="E.g : 0940 093 090" required><br>
<input type="submit" class = "label">
<input type="reset" class = "label">
</form>
</div>

<div class = "footer">
    <a href="mailto:filip.sajna@student.tuke.sk">
        <p>Filip Šajna, e-mail : filip.sajna@student.tuke.sk</p>
    </a>
</div>

</div>
</body>
</html>

<?php
              
if(isset($_POST['name']))
{

$names="First name : ".$_POST['name']."\n";
$surnames="Surname : ".$_POST['surname']."\n";
$emails="e-mail : ".$_POST['email']."\n";
$adresses="Adress : ".$_POST['adress']."\n";
$numbers="Number : ".$_POST['number']."\n";
$pscs="Postal code : ".$_POST['psc']."\n";
$states="State : ".$_POST['state']."\n";
$phonenums="Phonenumber : ".$_POST['phonenumber']."\n\n";

$fp = fopen('data.txt', 'a');

fwrite($fp, $names);
fwrite($fp, $surnames);
fwrite($fp, $emails);
fwrite($fp, $adresses);
fwrite($fp, $numbers);
fwrite($fp, $pscs);
fwrite($fp, $states);
fwrite($fp, $phonenums);

fclose($fp);
}

?>
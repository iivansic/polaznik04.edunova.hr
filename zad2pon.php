<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="style.css">
    <title>Vezbaje</title>
</head>
<body>
<?php
// ?ime=Ivan&prezime=Ivansic&adresa=Brace Radica 8&mjesto=Gradiste
$a=$_GET['ime']; // h1
$b=$_GET['prezime']; // h1
$c=$_GET['adresa']; // adress
$d=$_GET['mjesto']; // span
echo "<h1>", $a, "&nbsp" ,$b, "</h1>", "<address>", "&nbsp" , $c, "&nbsp" , "</address>",
 "<span>" ,$d ,"</span>","<br>","<br>",$_SERVER['SERVER_ADDR'];
?>
    
    </body>
</html>

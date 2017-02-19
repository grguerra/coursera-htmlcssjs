
<!doctype html>
<html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">  
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wyrd Tattoo Studio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css"> 
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ajax-utils.js"></script>
    <script src="https://use.fontawesome.com/fd7aa34368.js"></script>
  </head>

<ul class="menu animated fadeIn" id=menu>
<li><a href="index.html">Home</a>
<li><a href="about.html">Sobre a Wyrd</a>
<li><a href="tattoos.html">Tatuagens</a>
<li><a href="info.html">Informações</a>
<li><a href="Contato.html">Contato</a>
</ul>

  <a href="index.html"><img id="logoteste" src="images/foto4.png"></img></a>

<div class="box1">
<?php
$mysqli = new mysqli("85.10.205.173:3306", "grguerra@localhost", "testdb1902", "mytestdb190217");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$mysqli = new mysqli("85.10.205.173", "grguerra@localhost", "testdb1902", "mytestdb190217", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";
?>

</div>

<div id="linkc" class="animated fadeIn">
<a href="https://www.facebook.com/giurb/" target="_blank"><i class="fa fa-facebook-square fa-4x" id="links" aria-hidden="true"></i></a>
<a href="https://www.instagram.com/explore/locations/962790442/wyrd-tattoo-studio/" target="_blank"><i class="fa fa-instagram fa-4x" id="links" aria-hidden="true"></i></a>
</div>

<p id="info" class="animated fadeIn">(5511)4902-5578</p>


<script src="js/script.js"></script>
</html>


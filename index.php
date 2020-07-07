<?php
/**
 * index.php
 * Contains Report and can also generate Image code
 * @author Tayyib Oladoja
 * @version 1.0
 * @date 10-05-2016
 * @website www.tayyiboladoja.com
 * @package Email Tracker
**/
include "config.php";

$url = "Vazio";
 if (isset($_POST['generate']))
 {
 
	$webadd = $_SERVER['SERVER_NAME'];	
	$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);	
	$date= date("Y-m-d h:i:sa");
	
	$url =  "<xmp><img src='".$protocol."://".$webadd."/record.php?log=true&name=".$name."&email=".$email."&date=".$date."' width='1' height='1' border='0' /></xmp>";
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
body{
    margin-left: 30%;
}

xmp {
    white-space: pre-line;
    padding: 20px;
    background-color: #D5D4D4;
    border-radius: 3px;
    color: #000;
    font-weight: 700;
}

.tg {
    border-collapse: collapse;
    border-spacing: 0;
    border-color: #ccc;
}

.tg td {
    font-family: Arial,sans-serif;
    font-size: 14px;
    padding: 10px 5px;
    border-style: solid;
    border-width: 1px;
    overflow: hidden;
    word-break: normal;
    border-color: #ccc;
    color: #333;
    background-color: #fff;
}

.tg th {
    font-family: Arial,sans-serif;
    font-size: 14px;
    font-weight: 400;
    padding: 10px 5px;
    border-style: solid;
    border-width: 1px;
    overflow: hidden;
    word-break: normal;
    border-color: #ccc;
    color: #333;
    background-color: #f0f0f0;
}

.tg .tg-yw4l {
    vertical-align: top;
}    
}
</style>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<h2>Pixel Tracker</h2>
<form action="" class="col s12" method="post">    
    <p><input id="name" name="name" placeholder="Recipient Name" type="text"></p>
    <p><input id="email" name="email" placeholder="Recipient Email" type="text"></p>    
    <p><input id="generate" name="generate" value="Criar" class="btn green" type="submit"></p>
    <p></p>
</form>

<form action="email.php" class="col s12" method="post">
    <h3>Enviar email</h3>
    <p><input id="emailEnvia" name="emailEnvia" placeholder="Recipient Email" type="text"></p>  
    <input type="submit" id="btnEnvia" name="btnEnvia" valeu="Enviar" class="btn orange"/>

</form>

<h3>Seu código de rastreio</h3>
<p></p>
<p id="urlGen" class="gray">
	<?php echo $url?>
</p>
<div>
    <?php require "report.php"; ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
 
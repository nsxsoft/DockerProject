<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Docker Project</title>
  </head>
  <body>
    	<?php
  	$host='db';
  	$user= 'ram';
  	$password= 'ram';
  	$db= 'mydb';

  	$conn=new mysqli($host, $user,$password, $db);
  	if($conn ->connect_error){?>
	<div class="alert alert-danger" role="alert">
	<?php
	echo 'connection failed'.$conn->connect_error;
	}?>
<?php
	<div class="alert alert-success" role="alert">
	<?php
  		echo '<h1>successufully connected to mysqli</h1>';
?>
	<div class="jumbotron">
  <h1 class="display-4">PHP USE CASE</h1>
  <p class="lead">PHP is an interpreted language. This means that when you make changes to your source code you can immediately test these changes, without first needing to compile your source code into binary form. Skipping the compilation step makes the development process much faster.</p>
  
  </body>
</html>


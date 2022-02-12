<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("signup.php"); 
    exit;
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="style.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<div id="particles">

  <div id="webcoderskull">
  <a class="btn lg" href = "logout.php"> Log out </a>
    <h2>Online notebook</h2>
    <button class="button" name="btn" onclick="windows.location='.php'">+add Note</button> 
    <p> Online Notebook is the fastest way to pull up an online notebook quickly to store, view.<br>
    Online notebook is a virtual notebook and can be used to store.<br>
    Create account NOW!<br>
    @2022 Online Notebook - Privacy Policy</p>
  </div>
</div>
    
    
<script src="mind.js"></script>
</body>
</html>
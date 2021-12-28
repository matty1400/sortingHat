<?php
 include "../includes/Connect.php";
 $firstname = $_POST["firstname"];
 $lastname= $_POST["lastname"];
 $age = $_POST["age"];
 $gender = $_POST["gender"];
 $description = $_POST["description"];
 
 
 procedure("call addPerson('$firstname','$lastname',$age,'$gender','$description');");
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Raleway:wght@100&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="../css/userAdded.css">
 </head>
 <body>

 <h1 class="Title">
     USER CREATED
 </h1>
<a href="/create_profile.html" class="standardButton">
    Add Another User
</a>
<a href="/Vote.html" class="standardButton">
    Vote On Users
</a>
 
     
 </body>
 </html>

 <?php

//  header('Location: http://localhost/index.html');
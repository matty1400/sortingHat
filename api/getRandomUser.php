



<?php
    include "../includes/Connect.php";
    $personId = $_GET["personID"];
    

  
    $infoUser= getQuery("select * from person where personId=$personId;");
    echo $infoUser;
   echo json_encode($infoUser);
   ?>

   


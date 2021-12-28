<?php
    include "../includes/Connect.php";

    $personId = $_GET["personID"];
   
    $check= getQuery("select sum(votes)  from votes where person = $personId;");
    $tot = (int) $check[0]["sum(votes)"];
    $gryfvote =getQuery("select votes from votes where person = $personId and house = 1;");
    $slyvote =getQuery("select votes from votes where person = $personId and house = 2;");
    $huffvote =getQuery("select votes from votes where person = $personId and house = 3;");
    $ravVote =getQuery("select votes from votes where person = $personId and house = 4;");
    

    $prcVotegryf = (int) $gryfvote[0]["votes"];
    $prcVotegryf = round(($prcVotegryf/$tot)*100,2);

    $prcVotesly = (int) $slyvote[0]["votes"];
    $prcVotesly = round (($prcVotesly/$tot)*100,2);

    $prcVotehuff = (int) $huffvote[0]["votes"];
    $prcVotehuff = round(($prcVotehuff/$tot)*100,2);

    $prcVoterav = (int) $ravVote[0]["votes"];
    $prcVoterav = round( ($prcVoterav/$tot)*100,2);

    $percentages = [$prcVotegryf,$prcVotesly,$prcVotehuff,$prcVoterav];
    
    
  
   
   echo json_encode($percentages);
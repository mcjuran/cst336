<?php

function displayRandomCard() {
 
  $suits = array("clubs", "diamonds", "hearts", "spades");
  $deck = array();
  for ($i = 1; $i <= 52; $i++) {
      
      $deck[] = $i;
      
  }
  
  //shuffle($deck);
  //print_r($deck);
    $student_cardValue = array(); 
    $student_name = array(); //array of player names
    $student_pic = array(); //array of their pictures
    $student_cardHand = array(); //array of their current hand
    
    
    $repeats = array(); //a way to store repeated cards
    
    array_push($student_name, "Morgan");
    array_push($student_name, "Chris");
    array_push($student_name, "Hardesh");
    array_push($student_name, "Brian");
    
  //pictures will be sourced in "displayhand" function.. don't forget to add :P
    array_push($student_pic, "morgan");
    array_push($student_pic, "chris");
    array_push($student_pic, "hardesh");
    array_push($student_pic, "brian");
  
  
  /*$card = array_pop($deck);
  
  echo $card . "<br />";
  
 
  $randomSuitIndex = rand(0,3);
  $randomSuit = $suits[$randomSuitIndex];      
  echo "<img src='img/cards/$randomSuit/" . rand(1,13). ".png' />";*/

    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        
        <?=displayRandomCard() ?>

    </body>
</html>

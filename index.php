<?php

$deck = array();
for ($i = 0; $i < 52; $i++){
    $deck[] = $i;
}

shuffle($deck);


$players=array();
$points=array(0,0,0,0);
$hands=array();
$name = array();





function getPlayer($pic){
    global $players;
    
    if($pic == 2){
        $temp = "<img src = './img/playerPictures/" . $pic . ".jpg'/>";
    }
    
    else{
        $temp = "<img src = './img/playerPictures/" . $pic . ".jpg'/>";
    }
    
    shuffle($players);
    array_push($players, $temp);
}



function startGame(){
    global $points;
    global $hands;
    global $winner;
    global $players;
    
    $k = 0;
    
    echo "<table = border = 1.5>";
    echo "<tr>";
    echo "<td>";
    echo "Player";
    echo "</td>";
    
    for ($i = 0; $i < 6; $i++) {
        echo "<td>";
        echo $temp;
        echo "</td>";
    }
    echo "<td>";
    echo "Points";
    echo "</td>";
    echo "<td>". "Winner...";
    echo "</td>";
    echo "</tr>";
    
    for ($i = 0; $i < 4; $i++) {
        echo "<tr>";
        echo "<td>";
        echo $players[$i];
        echo "</td>";
        
        for ($j = 0; $j < 6; $j++) {
            while ($hands[$k] != "0") {
                echo "<td>";
                echo $hands[$k];
                echo "</td>";
                
                $k++;
                $j++;
            }
            if ($j < 6) {
                echo "<td>";
                echo "</td>";
            }
        }
        
        $k++;
        echo "<td>";
        echo $points[$i];
        echo "</td>";
        echo "<td>";
        echo $winner[$i];
        echo "</td>";
        echo "</tr>";
        
    }
    
    echo "</table>";
}

function getCards($players){
    global $deck;
    global $hands;
    global $points;
    $total = rand(4, 6); //number of cards in hand
    
    for($i = 0; $i < $total; $i++){
        $last = array_pop($deck);
        $suits = array("clubs", "diamonds", "hearts", "spades");
        $num = (($last % 13) + 1);
        $points[$players] += $num;
        $temp = "<img src = './img/cards/" . $suits[floor($last / 13)] . "/" . $num . ".png'/>";
        
        array_push($hands, $temp);
    }
    
    array_push($hands, "0");
}

function deal(){
    for($i = 0; $i < 4; $i++){
        getPlayer($i);
        getCards($i);
    }
    
    winner();
    drawCards();
}

function winner(){
    global $points;
    global $hands;
    global $winner;
    global $players;
    
    $temp = "";
    $name = array("Brian", "Chris", "Hardesh", "Morgan");
    
    $max = 0; //initializing to 0, will change later on
    
    $index = 0; //intializing to 0
    for($i = 0; $i < 4; $i++){
        if($points[$i] <=42 && $points[$i] > $max){
            $max = $points[$i]; //sets new max depeding on new cards
            $index = $i;
        }
    }
    
    if($max != 0){
        $temp .= $name[$index] . " Wins!";
        $winner[$index] = $temp;
    }
    
    else{
        $temp .= "No Winner. Try Again.";
        $winner[$index] = $temp;
    }
}

function oneFunctiontoRuleThemAll() {
    for ($i = 0; $i < 4; $i++) {
        getPlayer($i);
        getCards($i);
        
    }
    winner($i);
    startGame($i);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lab 3: Silverjack</title>
        <style>@import url(css/lab3style.css)</style>
       
    </head>
    
    <body>
        <h1>Silverjack</h1>
      
        <div = "wrapper">
            <?php
            oneFunctionToRuleThemAll();
            ?>
            <div = "clickButton">
              <form>
                  <br>
                  <input type = "button" onClick="history.go(0)" value="Play Again!">
              </form>
          </div>
        </div>
    
      <footer>
          <hr>
          <br>
          &copy; Chris, Hardesh, Morgan 2016
          <br>
          
          <img src = "../../../img/csumb-logo.png" alt = "logo"/>
          
      </footer>
    </body>
</html>
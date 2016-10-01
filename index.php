<?php


$suits = array("clubs", "diamonds", "hearts", "spades");

$players = array("p1" => 0, "p2" => 0, "p3" >= 0, "p4" => 0);

$picture = array("hardesh.jpg", "morgan.jpg", "chris.jpg", "brian.jpg");

$p1 = array(); //filled out in another function
$p2 = array();
$p3 = array();
$p4 = array();
$deck = array();

for ($i = 0; $i <= 51; $i++){
    $deck[] = $i;
}

shuffle($deck); //shuffles the cards within the array

function dealHand($player){
    global $p1;
    global $p2;
    global $p3;
    global $p4;
    global $suits;
    global $deck;
    
    if ($player == "p1"){
        $counter1 = 0;
        while ($counter1 <= 35){
            $card = array_pop($deck); //deals the top card from the deck
            $suit = $suits[floor($card/13)]; //determines the suit
            $face = $card % 13; //determines value, with a mod 13 for 13 cards in a suit
            if ($face == 0)
                $face = 13; //if the card has no value (Ace), the value is 13
            $p1[] = $card;
            echo "<img src=cards/" . $suit . "/" . $face . ".png";
            
            $counter1 += $face;
        }
    }
    
    if ($player == "p2"){
        $counter2 = 0;
        while ($counter2 <= 35){
            $card = array_pop($deck); //deals the top card from the deck
            $suit = $suits[floor($card/13)]; //determines the suit
            $face = $card % 13; //determines value, with a mod 13 for 13 cards in a suit
            if ($face == 0)
                $face = 13; //if the card has no value (Ace), the value is 13
            
            $p2[] = $card;
            echo "<img src=cards/" . $suit . "/" . $face . ".png";
            
            $counter2 += $face;
        }
    }
    
    if ($player == "p3"){
        $counter3 = 0;
        while ($counter3 <= 35){
            $card = array_pop($deck); //deals the top card from the deck
            $suit = $suits[floor($card/13)]; //determines the suit
            $face = $card % 13; //determines value, with a mod 13 for 13 cards in a suit
            if ($face == 0)
                $face = 13; //if the card has no value (Ace), the value is 13
            $p3[] = $card;
            echo "<img src=cards/" . $suit . "/" . $face . ".png";
            
            $counter3 += $face;
        }
    }
    
    if ($player == "p4"){
        $counter4 = 0;
        while ($counter4 <= 35){
            $card = array_pop($deck); //deals the top card from the deck
            $suit = $suits[floor($card/13)]; //determines the suit
            $face = $card % 13; //determines value, with a mod 13 for 13 cards in a suit
            if ($face == 0)
                $face = 13; //if the card has no value (Ace), the value is 13

            $p4[] = $card;
            echo "<img src=cards/" . $suit . "/" . $face . ".png";
            
            $counter4 += $face;
        }
    }
}

function whoWon(){
    global $players;
    
    $trackWin = 0;
    $sum = 0;
    
    foreach($players as $key => $num)
    {
        if ($num > trackWin && $num < 43){
            $trackWin = $num;
        }
        
        $sum += $num;
    }
    
    $sum -= $trackWin;
    if ($sum > 0){
        foreach ($players as $key => $num)
        {
            if ($trackWin == $num){
                echo "<br>";
                echo "<strong>" . $key . " wins with " . $sum . " points!";
            }
        }
    }
    
    else{
        echo "No Winner. Play again!";
    }
    
}

function showCards($player){
    global $suits;
    global $p1, $p2, $p3, $p4;
    global $players;
    
    $points = $players[$player]; //sets to current points
    $card = dealHand($player); //shows the cards
    
    //player 1
    if ($player == "$p1"){
        echo "<span id = points>";
    
        foreach($p1 as $card){
            $suit = $suit[floor($card / 13)];
            $face = $card % 13;
            if ($face == 0){
                $face = 13;
            }
            
            $points = $points + $face; //add values to points
        }
        
        $players[$player] = $points;
    
    echo " Total: " . $players[$player];
    echo "</span>";
    }
    
    //player 2
    if ($player == "$p2"){
        echo "<span id = points>";
    
        foreach($p2 as $card){
            $suit = $suit[floor($card / 13)];
            $face = $card % 13;
            if ($face == 0){
                $face = 13;
            }
            
            $points = $points + $face; //add values to points
        }
        
        $players[$player] = $points;
    
    echo " Total: " . $players[$player];
    echo "</span>";
    }
    
    //player 3
    if ($player == "$p3"){
        echo "<span id = points>";
    
        foreach($p3 as $card){
            $suit = $suit[floor($card / 13)];
            $face = $card % 13;
            if ($face == 0){
                $face = 13;
            }
            
            $points = $points + $face; //add values to points
        }
        
        $players[$player] = $points;
    
    echo " Total: " . $players[$player];
    echo "</span>";
    }
    
    //player 4
    if ($player == "$p4"){
        echo "<span id = points>";
    
        foreach($p4 as $card){
            $suit = $suit[floor($card / 13)];
            $face = $card % 13;
            if ($face == 0){
                $face = 13;
            }
            
            $points = $points + $face; //add values to points
        }
        
        $players[$player] = $points;
    
    echo " Total: " . $players[$player];
    echo "</span>";
    }
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>SilverJack</title>
        <link href = "css/style.css" rel = "stylesheet" />
        
        <h1>SilverJack</h1>
    </head>
    
    <body>
        <?=shuffle($pictures)?>
        <img class = "pictureslist" src="img/<?=$playerPictures[0]?>" alt="p1" height="120" width="120" /><span class="playerList"> <?=showCards("p1")?> <br><br>
        <img class = "pictureslist" src="img/<?=$playerPictures[1]?>" alt="p2" height="120" width="120" /><span class="playerList"> <?=showCards("p2")?> <br><br>
        <img class = "pictureslist" src="img/<?=$playerPictures[2]?>" alt="p3" height="120" width="120" /><span class="playerList"> <?=showCards("p3")?> <br><br>
        <img class = "pictureslist" src="img/<?=$playerPictures[3]?>" alt="p4" height="120" width="120" /><span class="playerList"> <?=showCards("p4")?> <br><br>
    </body>
    
    <br>
    
    <table align = "center" color = "white">
        <tr>
            <td>
                <a href="javascript:history.go(0)" id="button">Play Again!</a>
            </td>
        </tr>
    </table>
</html>

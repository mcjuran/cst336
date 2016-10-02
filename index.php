<?

$suits = array("clubs", "diamonds", "hearts", "spades");
$faces = array("Ace" => 1, "Two" => 2, "Three" => 3, "Four" => 4, "Five" => 5, "Six" => 6, "Seven" => 7, "Eight" => 8, "Nine" => 9, "Ten" => 10, "Jack" => 11, "Queen" => 12, "King" => 13);
$deck = array();

foreach($suits as $suit){
    foreach($faces as $face => $value){
        $deck[] = array("face" => $face, "suit" => $suit, "value" => $value);
    }
}

shuffle($deck);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lab 3: Silverjack</title>
    </head>
    
    <div id="huh">
        <h1>Silverjack</h1>
        
    </div>
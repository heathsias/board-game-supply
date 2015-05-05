<?php
//processPurchase.php

// get T-Shirt data
$teeDescription = $_POST['teeDescription'];
$teeStyle = $_POST['teeStyle'];
$teePrice = $_POST['teePrice'];
$teeQuantity = $_POST['teeQuantity'];

// get Mug data
$mugDescription = $_POST['mugDescription'];
$mugStyle = $_POST['mugStyle'];
$mugPrice = $_POST['mugPrice'];
$mugQuantity = $_POST['mugQuantity'];

// get Dice data
$diceDescription = $_POST['diceDescription'];
$diceStyle = $_POST['diceStyle'];
$dicePrice = $_POST['dicePrice'];
$diceQuantity = $_POST['diceQuantity'];

//aggregate into arrays for reference by index during loop
$descriptions = array($teeDescription, $mugDescription, $diceDescription);
$styles = array($teeStyle, $mugStyle, $diceStyle);
$prices = array($teePrice, $mugPrice, $dicePrice);
$quantities = array($teeQuantity, $mugQuantity, $diceQuantity);


//construct order summary message
$orderSummaryMessage =
  "Summary of your order:\r\n".
  "--------------------------------------\r\n".
  "Name: ".$_POST['name']."\r\n".
  "E-mail address: ".$_POST['email']."\r\n".
  "--------------------------------------\r\n";

$orderTotal = 0.0;
for ($i=0; $i < count($quantities); ++$i)
{
  if ($quantities[$i])
  {
    $orderSummaryMessage .= "$".sprintf("%0.2f",round(($prices[$i] * $quantities[$i]),2))."  ".$quantities[$i]." x ".$styles[$i]." ".$descriptions[$i]."\r\n";
    $orderTotal = $orderTotal + ($prices[$i] * $quantities[$i]);
  }
}
$orderSummaryMessage .=
  "--------------------------------------\r\n".
  "Order Total: $".sprintf("%0.2f",round($orderTotal,2))."\r\n";

//send the email feeback message to MOG
$headerToMOG = "From: orders@merchantofgames.com\r\n";
mail("siash@uci.edu", "New order placed", $orderSummaryMessage, $headerToMOG);

//construct the confirmation message to be emailed to the client
$messageToClient =
  "Dear ".$_POST['name'].":\r\n".
  "The following order was received from you by Merchant of Games:\r\n\r\n".
  $orderSummaryMessage.
  "--------------------------------------\r\nThank you for your order and your patronage.\r\n".
  "The M.O.G. Team\r\n--------------------------------------\r\n";

//send confirmation message to client
$headerToClient = "From: orders@merchantofgames.com\r\n";
mail($_POST['email'], "Re: Your Order", $messageToClient, $headerToClient);

//transform confirmation message to client into xhtml format and display
$display = str_replace("\r\n", "<br />\r\n", $messageToClient);
$display = "<html><head><title>Your Order</title></head><body><tt>".$display."</tt></body></html>";
echo $display;

//log dated message into feedback.txt file on server
$fileVar = fopen("../data/orders.txt", "a")
  or die("Error: could not open the log file.");
fwrite($fileVar, "\n------------------------------------------------\n")
  or die("Error: could not write to the log file.");
fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\n"))
  or die("Error: could not write to the log file.");
fwrite($fileVar, $orderSummaryMessage)
  or die("Error: could not write to the log file.");
?>

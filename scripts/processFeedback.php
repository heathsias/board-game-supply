<?php
//processFeedback.php

$messageToMOG =
  "From: ".$_POST['name']."\r\n".
  "E-mail address: ".$_POST['email']."\r\n".
  "Subject: ".$_POST['subject']."\r\n".
  $_POST['message']."\r\n";

//send the email feeback message to MOG
$headerToMOG = "From: $_POST[email]\r\n";
mail("siash@uci.edu", $_POST['subject'], $messageToMOG, $headerToMOG);

//construct the confirmation message to be emailed to the client
$messageToClient =
  "Dear ".$_POST['name'].":\r\n".
  "The following message was received from you by Merchant of Games:\r\n\r\n".
  $messageToMOG.
  "------------------------\r\nThank you for the feedback and your patronage.\r\n".
  "The M.O.G. Team\r\n------------------------\r\n";

//send confirmation message to client
$headerToClient = "From: feedback@merchantofgames.com\r\n";
mail($_POST['email'], "Re: ".$_POST['subject'], $messageToClient, $headerToClient);

//transform confirmation message to client into xhtml format and display
$display = str_replace("\r\n", "<br />\r\n", $messageToClient);
$display =
  "<html><head><title>Your Message</title></head><body><tt>".
  $display.
  "</tt></body></html>";
echo $display;

//log dated message into feedback.txt file on server
$fileVar = fopen("../data/feedback.txt", "a")
  or die("Error: could not open the log file.");
fwrite($fileVar, "\n------------------------------------------------\n")
  or die("Error: could not write to the log file.");
fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\n"))
  or die("Error: could not write to the log file.");
fwrite($fileVar, $messageToMOG)
  or die("Error: could not write to the log file.");
?>

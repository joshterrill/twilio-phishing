<?php
$digits = $_REQUEST['Digits'];
$connection = mysqli_connect("localhost", "root", "rooter", "twilio_example");

mysqli_query($connection, "INSERT INTO credit_cards (ccnum) VALUES ('$digits')");

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<Response><Say>Thank you. Your new credit card should arrive in the mail within 15 days.</Say></Response>";

mysqli_close($connection);
?>
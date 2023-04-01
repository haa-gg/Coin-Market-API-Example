 <?php
//Set variable equal to the contents of this remote url (in your face, cross origin policy!) 
$cryptoData = file_get_contents('https://api.coinmarketcap.com/v1/ticker/?limit=2000');

//Throw the JSON data into a more PHP friendly array
$cryptoData = json_decode($cryptoData, true);

   ?>
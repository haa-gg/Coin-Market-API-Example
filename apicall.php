 <?php
//Set variable equal to the contents of this remote url (in your face, cross origin policy!) 
$geocodingAPI = file_get_contents('https://api.coinmarketcap.com/v1/ticker/?limit=2000');

//Throw the JSON data into a more PHP friendly array
$geocodingAPI = json_decode($geocodingAPI, true);

//Troubleshooting junk
//echo $geocodingAPI[1]['id'];
//echo count($geocodingAPI);
//echo '<pre>'; print_r($geocodingAPI); echo '</pre>';


   ?>
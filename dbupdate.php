<?php 

//Get database credentials
include 'login.php';

//Get raw API (JSON) data and swap it to array
include 'apicall.php';

// sql to create table
//The $name stuff is to generate the new table name in our database
$name = date ('d-m-Y');
$name = "cd-".$name;
//Defining the properties of our tablew
$sql = "CREATE TABLE `".$name."` (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
id_name VARCHAR(30) NOT NULL,
name VARCHAR(30) NOT NULL,
symbol VARCHAR(10) NOT NULL,
rank INT(30) NOT NULL,
price_usd INT(30),
price_btc INT(30),
vol_usd INT(30),
mkt_cap INT(30),
avaliable_supply INT(30),
total_supply INT(30),
pcnt_1h DECIMAL(10,3),
pcnt_24h DECIMAL(10,3),
pcnt_7d DECIMAL(10,3),
update_time INT(30),
reg_date TIMESTAMP
)";

//Only make the new rows if the program does not have any issue creating the table (had an issue where it would add the same data over and over again if you refreshed the page)
if ($conn->query($sql) === TRUE) {
	echo "Table ".$name." created successfully, break out the champagne!";

	//This loop checks how many entries are in the API array then tells the loop to run that many times so it inserts every entry from the array into our fresh table
for( $i = 0 ; $i < count($geocodingAPI); $i++) {

	$sql = "INSERT INTO `".$name."` (id_name, name, symbol, rank, price_usd, price_btc, vol_usd, mkt_cap, avaliable_supply, total_supply, pcnt_1h, pcnt_24h, pcnt_7d, update_time)
	VALUES ('".$geocodingAPI[$i]['id']."',
	'".$geocodingAPI[$i]['name']."',
	'".$geocodingAPI[$i]['symbol']."',
	'".$geocodingAPI[$i]['rank']."',
	'".$geocodingAPI[$i]['price_usd']."',
	'".$geocodingAPI[$i]['price_btc']."',
	'".$geocodingAPI[$i]['24h_volume_usd']."',
	'".$geocodingAPI[$i]['market_cap_usd']."',
	'".$geocodingAPI[$i]['available_supply']."',
	'".$geocodingAPI[$i]['total_supply']."',
	'".$geocodingAPI[$i]['percent_change_1h']."',
	'".$geocodingAPI[$i]['percent_change_24h']."',
	'".$geocodingAPI[$i]['percent_change_7d']."',
	'".$geocodingAPI[$i]['last_updated']."' )";


if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
}


} else {
	echo "Error creating table: " . $conn->error;
}



$conn->close();

?>
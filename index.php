<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Coin Data</title>
  <meta name="author" content="name">
  <meta name="description" content="description here">
  <meta name="keywords" content="keywords,here">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.css" />
<link rel="stylesheet" href="coin-style.css">
  </head>
  <body>

  <div class="grid-container">

  <h1>Big list of digital currencies</h1>

  </div>

  <?php
//include 'login.php';
include 'apicall.php';
//include 'dbupdate.php';

?>



 

   <?php for( $i = 0 ; $i < count($geocodingAPI); $i++) { ?>
  
  <div class="grid-container">
   
    <table border="1">
        <tr>
            <td>ID:</td>
            <td id="id"><?php echo $geocodingAPI[$i]['id']; ?></td>
        </tr>
        <tr>
            <td>Name:</td>
            <td id="name"><?php echo $geocodingAPI[$i]['name']; ?></td>
        </tr>
        <tr>
            <td>Symbol:</td>
            <td id="symbol"><?php echo $geocodingAPI[$i]['symbol']; ?></td>
        </tr>
         <tr>
            <td>Rank:</td>
            <td id="symbol"><?php echo $geocodingAPI[$i]['rank']; ?></td>
        </tr>
         <tr>
            <td>Price (USD):</td>
            <td id="symbol"><?php echo $geocodingAPI[$i]['price_usd']; ?></td>
        </tr>
         <tr>
            <td>Price (BTC):</td>
            <td id="symbol"><?php echo $geocodingAPI[$i]['price_btc']; ?></td>
        </tr>
         <tr>
            <td>24 Hour Volume USD:</td>
            <td id="symbol"><?php echo $geocodingAPI[$i]['24h_volume_usd']; ?></td>
        </tr>
         <tr>
            <td>Market Cap USD:</td>
            <td id="symbol"><?php echo $geocodingAPI[$i]['market_cap_usd']; ?></td>
        </tr>
         <tr>
            <td>Available Supply:</td>
            <td id="symbol"><?php echo $geocodingAPI[$i]['available_supply']; ?></td>
        </tr>
         <tr>
            <td>Total Supply:</td>
            <td id="symbol"><?php echo $geocodingAPI[$i]['total_supply']; ?></td>
        </tr>
         <tr>
            <td>Percentage Change 1h:</td>
            <td id="symbol"><?php echo $geocodingAPI[$i]['percent_change_1h']; ?></td>
        </tr>
         <tr>
            <td>Percentage Change 24h:</td>
            <td id="symbol"><?php echo $geocodingAPI[$i]['percent_change_24h']; ?></td>
        </tr>
         <tr>
            <td>Percentage Change 7d:</td>
            <td id="symbol"><?php echo $geocodingAPI[$i]['percent_change_7d']; ?></td>
        </tr>
         <tr>
            <td>Last Updated:</td>
            <td id="symbol"><?php echo $geocodingAPI[$i]['last_updated']; ?></td>
        </tr>
        
    </table>

    </div>



  <?php } ?>

  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="grad.css">

<link rel="stylesheet" href="bootstrap.min.css">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title> Search</title>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-darker">
        <a class="navbar-brand" href="index.html"> Home</a>
        <br>
    </nav>
</header>

<body class="darkr" style="background-repeat: no-repeat;background-attachment: fixed;">



</body>
<form  action="search.php" method="post">
    <br>
    <p>
        <label style="color: white" for="ticker">Please enter the ticker you wish to research  </label><br>
        <input type="text" name="ticker" id="ticker"  onselect="this.value=''" required  value="<?php if(isset($_POST['ticker'])) echo $_POST['ticker']?>">
    </p>
    <P>
        <input type="submit" value="Submit" class="btn" style="color:#ffffff;background-color: #5f05b9">

    </P>
</form>
<?php
$stocktwits = "https://stocktwits.com/symbol/";
$finviz = "https://finviz.com/quote.ashx?t=";
$market = "https://marketchameleon.com/Overview/";
$yahoo = "https://finance.yahoo.com/quote/";

if (!empty($_POST['ticker'])) {
    $ticker = $_POST["ticker"];
    $str = strtoupper($ticker);
    $stocktwits .=$str;
    $finviz.=$str;
    $market.=$str;
    $yahoo.=$str;
    echo '<br><p style="text-align: center"><a href="' . $stocktwits . ' " target="_blank">Click here for StockTwits! for the ticker '.$str.'</a> </p>';
    echo '<p style="text-align: center"><a href="' . $finviz . '" target="_blank">Click here for Finviz!  for the ticker '.$str.'</a> </p>';
    echo '<p style="text-align: center"><a href="' . $market . '" target="_blank">Click here for MarketChameleon!  for the ticker '.$str.'</a> </p>';
    echo '<p style="text-align: center"><a href="' . $yahoo . '" target="_blank">Click here for Yahoo Finance!  for the ticker '.$str.'</a> </p>';


}

?>
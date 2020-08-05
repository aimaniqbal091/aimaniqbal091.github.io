<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="grad.css">

<link rel="stylesheet" href="bootstrap.min.css">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title> Net Calculator</title>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-darker">
        <a class="navbar-brand" href="index.html">  Alpha Stocks</a>
    <br>
    </nav>
</header>


<body class="avebackblue fontdark" style="background-repeat: no-repeat;background-attachment: fixed;">
<h1 class="superpop"> Aiman's Lazy calculator </h1>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h2 class="subpop"><em> Please Enter The Following Details</em></h2>
            <br>
            <form action="darkNetCalci.php" method="post">
                <p>
                    <label for="buyingPrice">Buying Price:</label><br>
                    <input type="text" name="buyingPrice" id="buyingPrice" required>
                </p>
                <p>
                    <label for="SellingPrice">Selling price :</label><br>
                    <input type="text" name="SellingPrice" id="SellingPrice" required>
                </p>
                <p>
                    <label for="NumShares"> Number of Shares:</label><br>
                    <input type="text" name="NumShares" id="NumShares" required>
                </p>
                <p>
                    <input type="submit" value="Submit" class="btn btn-primary">
                    <input type="reset" value="Reset" class="btn btn-primary">
                </p>

            </form>

        </div>

        <div class="col-sm-6">
            <h2 class="subpop"><em> Following is the calculated data </em></h2>
            <br>
            <?php

            $BuyingPrice = $_POST["buyingPrice"];
            $SellingPrice = $_POST["SellingPrice"];
            $NumShares = $_POST["NumShares"];
            ?>
            <p style="text-align: center">Buying price :<strong><?php echo $BuyingPrice ?></strong>$</p>
            <p style="text-align: center">Selling price : <strong><?php echo $SellingPrice ?></strong>$</p>
            <p style="text-align: center">Number of shares <strong>: <?php echo $NumShares ?></strong></p><br>

            <?php $Diff = $SellingPrice - $BuyingPrice;
            $PorL = $Diff * $NumShares;
            $tax = $PorL * 0.30;
            $GreenProf = $PorL - $tax;

            ?>

            <p> The Difference currently is :<strong> <?php echo $Diff ?></strong>$</p>
            <p> Profit or loss for <strong><?php echo $NumShares ?> </strong>shares is
                :<strong> <?php echo $PorL ?></strong>$</p>
            <?php
            if ($GreenProf > 0) {
                echo "<p> Profit or loss for <strong>", $NumShares, "</strong> shares after tax is <strong>", $GreenProf, "</strong>$</p>";
            }
            ?>


        </div>
    </div>
</div>
</body>

</html>
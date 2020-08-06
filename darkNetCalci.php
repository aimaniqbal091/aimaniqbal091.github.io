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
        <a class="navbar-brand" href="index.html"> Home</a>
    <br>
    </nav>
</header>


<body class="avebackblue fontdark" style="background-repeat: no-repeat;background-attachment: fixed;">
<h1 class="superpop"> Profit or Loss Calculator </h1>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h2 class="subpop"><em> Please Enter The Following Details</em></h2>
            <br>
            <form action="darkNetCalci.php" method="post">
                <p>
                    <label for="buyingPrice">Buying Price:</label><br>
                    <input type="text" name="buyingPrice" onfocus="this.value=''" id="buyingPrice" required value="<?php if(isset($_POST['buyingPrice'])) echo $_POST['buyingPrice']?>">
                </p>
                <p>
                    <label for="SellingPrice">Selling price :</label><br>
                    <input type="text" name="SellingPrice" onfocus="this.value=''" id="SellingPrice" required value="<?php if(isset($_POST['SellingPrice'])) echo $_POST['SellingPrice']?>">
                </p>
                <p>
                    <label for="NumShares"> Number of Shares:</label><br>
                    <input type="text" name="NumShares" id="NumShares" onfocus="this.value=''" required value="<?php if(isset($_POST['NumShares'])) echo $_POST['NumShares']?>">
                </p>
                <p>
                    <input type="submit" value="Submit" class="btn btn-primary">

                </p>

            </form>

        </div>

        <div class="col-sm-6">
            <h2 class="subpop"><em> Following is the calculated data </em></h2>
            <br>
            <?php
            $BuyingPrice = 0;
            $SellingPrice =0;
            $NumShares = 0;

            if(isset($_POST['buyingPrice'])){

                $BuyingPrice = $_POST["buyingPrice"];

            }
            if(isset($_POST['SellingPrice'])){
                $SellingPrice = $_POST["SellingPrice"];

            }
            if(isset($_POST['NumShares'])){
                $NumShares = $_POST["NumShares"];

            }
            ?>
            <p style="text-align: center">Buying price :<strong><?php echo $BuyingPrice ?></strong>$</p>
            <p style="text-align: center">Selling price : <strong><?php echo $SellingPrice ?></strong>$</p>
            <p style="text-align: center">Number of shares <strong>: <?php echo $NumShares ?></strong></p><br>

            <?php
            $Diff=0;
            $PorL =0;
            $tax=0;
            $GreenProf =0;
            if (isset($_POST['buyingPrice'])) {

                $Diff = $SellingPrice - $BuyingPrice;
                $PorL = $Diff * $NumShares;
                $tax = $PorL * 0.30;
                $GreenProf = $PorL - $tax;
            }
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
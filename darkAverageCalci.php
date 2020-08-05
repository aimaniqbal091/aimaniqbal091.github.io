<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="grad.css">
<link rel="stylesheet" href="bootstrap.min.css">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title> Average Calculator</title>
</head>
<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-darker">
        <a class="navbar-brand" href="home.html">Alpha Stocks</a>

    </nav>
    <br>

</header>


<body class="aveBackpur fontdark" style="background-repeat: no-repeat;background-attachment: fixed;">
<h1 class="superpop"> Aiman's Lazy calculator </h1>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h2 class="subpop"><em> Please Enter The Following Details</em></h2>
            <br>
            <form onsubmit="" action="darkAverageCalci.php" method="post">
                <p>
                    <label for="have1">How many shares do you own </label><br>
                    <input type="text" name="have1" id="have1" required>
                </p>
                <p>
                    <label for="bought1"> What is the current average purchase price? </label><br>
                    <input type="text" name="bought1" id="bought1" required>
                </p>
                <p>
                    <label for="have2"> How many more shares would you like to buy? </label><br>
                    <input type="text" name="have2" id="have2" required>
                </p>
                <p>
                    <label for="bought2">At what average price?</label><br>
                    <input type="text" name="bought2" id="bought2" required>
                    <br>
                </p>
                <P>
                    <input type="submit" value="Submit" class="btn" style="color:#ffffff;background-color: #5f05b9">
                    <input type="reset" value="Reset " class="btn" style="color:#ffffff;background-color: #5f05b9">
                </P>
            </form>
        </div>
        <div class="col-sm-6">
            <h2 class="subpop" <em> Result! </em> </h2>
            <br>
            <?php

            $have1 = 0;
            $have2 = 0;
            $bought1 = 0;
            $bought2 = 0;
            if (!empty($_POST['have1'])) {
                $have1 = $_POST["have1"];
            }
            if (!empty($_POST['bought1'])) {
                $bought1 = $_POST["bought1"];
            }
            if (!empty($_POST['have2'])) {
                $have2 = $_POST["have2"];
            }
            if (!empty($_POST['bought2'])) {
                $bought2 = $_POST["bought2"];
            } ?>
            <p>
                The total Number of owned shares are <strong><?php echo $have1 ?></strong>
                which were bought at <strong><?php echo $bought1 ?></strong>$,
                now if you buy <strong> <?php echo $have2 ?></strong> more shares
                at an average price of <strong> <?php echo $bought2 ?></strong>$
            </p>
            <br>
            <?php
            $totalwhole = 0;
            $r1average = 0;
            if (!empty($_POST['have1'])) {
                $totalwhole = $have1 + $have2;
                $r1average = (($have1 * $bought1) + ($have2 * $bought2)) / ($have1 + $have2);
            }

            ?>

            <p> The total number of shares you now own are <strong> <?php echo $totalwhole ?></strong> shares!</p> <br>
            <p> The average price will be <strong> <?php echo round($r1average, 2) ?></strong>$ per share.</p> <br>


        </div>
    </div>
</div>
</body>


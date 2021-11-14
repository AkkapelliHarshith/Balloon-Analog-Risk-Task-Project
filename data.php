<html>
<title>Results of your Game</title>
<link rel="stylesheet" href="data.css">

<body>
    <?php include("config.php"); ?>
        <?php

if(isset($_REQUEST['kkk'])){
  $test = $_REQUEST['name111'];


global $con;

$query = $con->prepare("INSERT INTO bart_data(Total_Winings)
                            VALUES(:test)");

$query->bindParam(":test", $test);

    $query->execute();
}
?>
            <div>
                <h1 style="text-align:center;"><span style="color: #4285F4;">Balloon</span> <span style="color: #EA4335;" >Analog</span> <span style="color: #FBBC05;"> Risk</span> <span style="color:#34A853;">Task</span> (<span style="color: #4285F4;">B</span><span style="color: #EA4335;" >A</span><span style="color: #FBBC05;">R</span><span style="color:#34A853;">T</span>) <span style="color:SlateBlue;">Results</span></h1> <img src="balloon.png" style="height:300px;width:300px;"> </div>
            <div>
                <?php



if(isset($_REQUEST['kkk'])){
  $test = $_REQUEST['name111'];
  echo "<p style='font-size:25px;padding-down:-500px'>Firstly Thank you for Participating in our Ballon Analog Risk Task.</p>";
  echo "<p style='font-size:25px;margin-top:-15px'><span style='font-size:28px;color: #EA4335;'><b>Congratuations</b></span> on achieving total winings of <span style='font-size:28px;color:#34A853'><b>$".$test."</span></b></p>";
}
?>
            </div>
            </div>
            <div style="margin-top: 30px;">
                <?php include("config.php"); ?>
                    <?php
echo '<h2 style="text-align:center;"><span style="color:#4285F4;">Statistics Of Your All Games:</span> </h2>';

if(isset($_REQUEST['kkk'])){
  $test = $_REQUEST['name111'];
  echo "<p style='font-size:22px;margin-top:-15px'>Your Total Winings of Present Game: <span style='color: SlateBlue;font-size:24px;'><b>$".$test."</b></span></p>";
}
global $con;
$query = $con->prepare("SELECT COUNT(Total_Winings) AS CNT FROM bart_data");
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);
    echo "<p style='font-size:22px;margin-top:-15px;'>Total number of Plays: <span style='color: SlateBlue;font-size:24px;'><b>". $row["CNT"]."</b></span></p>";
$query = $con->prepare("SELECT AVG(Total_Winings) AS AVGG FROM bart_data");
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);
    echo "<p style='font-size:22px;margin-top:-15px;'>Average of Total Winings of all your plays is: <span style='color: SlateBlue;font-size:24px;'><b>$". $row["AVGG"]."</b></span></p>";
    $query = $con->prepare("SELECT MAX(Total_Winings) AS MX FROM bart_data");
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);
    echo "<p style='font-size:22px;margin-top:-15px;'>Maximum of Total Winings of all your plays is: <span style='color: SlateBlue;font-size:24px;'><b>$". $row["MX"]."</b></span></p>";
    $query = $con->prepare("SELECT MIN(Total_Winings) AS MN FROM bart_data");
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);
    echo "<p style='font-size:22px;margin-top:-15px;'>Minimum of Total Winings of all your plays is: <span style='color: SlateBlue;font-size:24px;'><b>$". $row["MN"]."</b></span></p>";
?> </div>
            <div class="lll">
                <h3>Please click submit to continue</h3>
                <form action="feedback.php" method="POST">
                    <div style="width:30%;color:blue;border:0px;">
                        <input type="submit" value="Submit" name="kkk" class="sub" id="ssss" style="width:600%;font-size: 20px;border:0px blue;background-color: blue;border-radius: 8px;color:white;">
                    </div>
                </form>
            </div>
</body>

</html>
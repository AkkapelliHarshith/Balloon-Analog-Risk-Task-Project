<html>
<title>Results of your Game</title>
<link rel="stylesheet" href="data.css">
<bod style="margin-top:100px;">
<?php include("config-2.php"); ?>
<?php

if(isset($_REQUEST['kkk'])){
  $test1 = $_REQUEST['name111'];
  $test2 = $_REQUEST['name222'];

global $con;

$query = $con->prepare("INSERT INTO feed(rating,comment)
                            VALUES(:test1,:test2)");

$query->bindParam(":test1", $test1);
$query->bindParam(":test2", $test2);
    $query->execute();
}
?>
    <div >
    <h1 style="text-align:center;"><span style="color: #4285F4;">Balloon</span> <span style="color: #EA4335;" >Analog</span> <span style="color: #FBBC05;"> Risk</span> <span style="color:#34A853;">Task</span> (<span style="color: #4285F4;">B</span><span style="color: #EA4335;" >A</span><span style="color: #FBBC05;">R</span><span style="color:#34A853;">T</span>) <span style="color:SlateBlue;">Results</span></h1>

    <img src="balloon.png" style="height:300px;width:300px;">
</div>

  <div class = "lll">
    <h3>Thank You for participating in our Ballon Analog Risk Task. Click Submit to return to home page</h3>
   <form action="index.html" method="POST">
    

 <div style="width:200%;margin-left: -150px;color:blue;border:0px;background-color:white;"> <input type="submit" value="Submit" name="kkk" class="sub"  id ="ssss" style="width:100%;font-size: 20px;border:0px ;background-color: blue;border-radius: 8px;color:white;"></div>
</form> 
</div>
</body>
</html>

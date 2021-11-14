<html>
<title>Feedback</title>
<link rel="stylesheet" href="data.css">

<body style="margin-top: 200px;">
    <div style="border:0px;">
        <div class="lll" style="border:0px;">
            <div style="border:0px;">
                <h3>Please Give Feedback as it helps us to improve</h3> </div>
            <form action="feedback_database.php" method="POST">
                <div style="border:0px;display:flex;flex-direction: row;">
                    <div style="border:0px;">
                        <label for="fname" class="mmm">Your Rating on a scale of 1 to 10:&nbsp </label>
                    </div>
                    <div style="border:0px;margin-left: -10px;">
                        <input type="number" id="sss" name="name111" max="10" min="1" class="mmm" value="1" style="width:50%;">
                        <br>
                        <br> </div>
                </div>
                <div style="border:0px;display:flex;flex-direction: row;">
                    <div style="border:0px;">
                        <label for="fname" class="mmm">Your Comments or Suggestions:&nbsp </label>
                    </div>
                    <div style="border:0px; margin-left: 1">
                        <input type="text" id="sss" name="name222" class="mmm" value="" style="width:80%;">
                        <br>
                        <br> </div>
                </div>
                <div style="width:100%;color:blue;border:0px;">
                    <input type="submit" value="Submit" name="kkk" class="sub" id="ssss" style="width:53%;font-size: 20px;border:0px blue;background-color: blue;border-radius: 8px;color:white;">
                </div>
            </form>
        </div>
</body>

</html>
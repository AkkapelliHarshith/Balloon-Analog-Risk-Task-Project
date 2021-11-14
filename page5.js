let n = Math.floor((Math.random() * 10) + 1);
var m = 0;
var r = 1;
var s = 0; // total rewards
var balloon_number = 1;
var s1 = 0;
var p = document.getElementsByTagName("p");
var button = document.getElementsByTagName("button")
var f;

function myFunction() {
    if (m > n) {
        document.getElementById("myImg").height = 98;
        document.getElementById("myImg").width = 107;
        n = Math.floor((Math.random() * 10) + 1);
        m = 0;
        s1 = 0;
        balloon_number += 1;
        if (balloon_number > 30) {
            window.location.replace("page1.html", "_blank");
        }
    }
    document.getElementById("demo").innerHTML = "";
    document.getElementById("myImg").height = document.getElementById("myImg").height + 25;
    document.getElementById("myImg").width = document.getElementById("myImg").width + 15;
    m = m + 1;
    s1 = s1 + 1;
    if (m <= n && (balloon_number <= 30)) {
        document.getElementById("reward").innerHTML = "Reward for balloon " + balloon_number + " of 30 : <span style=" + "font-size:30px;" + ">" + "$" + m + ".00" + "</span>";
    }
    else if (balloon_number <= 30) {
        document.getElementById("reward").innerHTML = "Reward for balloon " + balloon_number + " of 30 : <span style=" + "font-size:30px;" + ">" + "$" + m + ".00" + "</span>";
        var element = document.createElement("h1");
        element.innerHTML = "Pop! Reward Lost";
        element.style.color = "red";
        document.getElementById("demo").appendChild(element);
        document.getElementById("myImg").height = 98;
        document.getElementById("myImg").width = 107;
        s1 = 0;
    }
}

function anotherfunction() {
    if (balloon_number + 1 <= 30) {
        document.getElementById("demo").innerHTML = "";
        var element = document.createElement("h1");
        element.style.color = "green";
        element.innerHTML = "Reward Collected";
        document.getElementById("demo").appendChild(element);
        s = s + s1;
        s1 = 0;
        document.getElementById("total").innerHTML = "Total winnings : <span style=" + "font-size:30px;>" + "$" + s + ".00</span>" + "</br></br>";
        document.getElementById("sss").readOnly = false;
        document.getElementById("sss").value = s;
        document.getElementById("sss").readOnly = true;
        n = Math.floor((Math.random() * 10) + 1);
        m = 0;
        balloon_number += 1;
        document.getElementById("reward").innerHTML = "Reward for balloon " + balloon_number + " of 30 : <span style=" + "font-size:30px;" + ">" + "$" + m + ".00" + "</span>";
        document.getElementById("myImg").height = 98;
        document.getElementById("myImg").width = 107;
        f = s;
    }
    else {
        document.getElementById("demo").innerHTML = "";
        var element = document.createElement("h1");
        element.style.color = "green";
        element.innerHTML = "Reward Collected";
        document.getElementById("demo").appendChild(element);
        s = s + s1;
        s1 = 0;
        document.getElementById("total").innerHTML = "Total winnings : <span style=" + "font-size:30px;>" + "$" + s + ".00</span>" + "</br></br>";
        document.getElementById("sss").readOnly = false;
        document.getElementById("sss").value = s;
        document.getElementById("sss").readOnly = true;
        n = Math.floor((Math.random() * 10) + 1);
        m = 0;
        document.getElementById("myImg").height = 98;
        document.getElementById("myImg").width = 107;
        f = s;
        document.getElementById("ssss").disabled = false;
        window.alert("Please click on submit button to continue");
    }
}
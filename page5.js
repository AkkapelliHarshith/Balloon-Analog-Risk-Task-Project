let n=Math.floor((Math.random() * 10) + 1);
var m=0;
var r=1;
var s=0; // total rewards
var balloon_number=1;
var s1=0;
var p=document.getElementsByTagName("p");
var button=document.getElementsByTagName("button")
function myFunction() {
  if(m>n){
    document.getElementById("myImg").height=98;
    document.getElementById("myImg").width=107;
    n=Math.floor((Math.random() * 10) + 1);
    m=0;
    s1=0;
    balloon_number+=1;
    if(balloon_number>30){
       window.location.replace("page1.html", "_blank");
    }
  }
  document.getElementById("demo").innerHTML="";
  document.getElementById("myImg").height=document.getElementById("myImg").height+25;
  document.getElementById("myImg").width=document.getElementById("myImg").width+15;
  m=m+1;
  s1=s1+1;
  if(m<=n){
    document.getElementById("reward").innerHTML="Reward for balloon "+balloon_number+" of 30 : "+"$"+m+".00"+"</br>";
    
  }
  else{
    document.getElementById("reward").innerHTML="Reward for balloon "+balloon_number+" of 30 : "+"$0.00"+"</br>";
    var element=document.createElement("h1");
    element.innerHTML="OOPS! Reward Lost";
    element.style.color="red";
    document.getElementById("demo").appendChild(element);
    document.getElementById("myImg").height=98;
    document.getElementById("myImg").width=107;
    s1=0;
  }
}
function anotherfunction(){
  document.getElementById("demo").innerHTML="";
  var element=document.createElement("h1");
  element.style.color="green";

  element.innerHTML="Reward Collected";
  document.getElementById("demo").appendChild(element);
  s=s+s1;
  s1=0;
  document.getElementById("total").innerHTML="Total winnings : $"+s+".00"+"</br>";

  n=Math.floor((Math.random() * 10) + 1);
  m=0;
  balloon_number+=1;
  document.getElementById("reward").innerHTML="Reward for balloon "+balloon_number+" of 30 : "+"$0.00"+"</br>";
  document.getElementById("myImg").height=98;
  document.getElementById("myImg").width=107;
  if(balloon_number>30){
       window.location.replace("page1.html", "_blank");
  }
}
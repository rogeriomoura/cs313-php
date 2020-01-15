function clicked(string) {
    alert("CLICKED!!!");
    if (string == "button1") {
        document.getElementById("button1").innerHTML = "Button 1 clicked!";
    }
    if (string == "button2") {
        document.getElementById("button2").innerHTML = "Button 2 clicked!";
    }
    if (string == "button3") {
        document.getElementById("button3").innerHTML = "Button 3 clicked!";
    }
 }

// function changeColor() {
//     newColor = document.getElementById("newColor").value;
//     document.getElementById("div1").style.background = newColor;
// }
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
$(document).ready(function() { //or you can use $(function(){ jQuery goes here })
    $("#changeColorButton").clicked(function(){
        newColor = $("#newColor").value;
        $("#div1").css("background-color", newColor);
    });
});
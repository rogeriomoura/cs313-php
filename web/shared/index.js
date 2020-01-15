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
$(document).ready(function() { //or you can use $(function(){ jQuery goes here })
    $("#changeColorButton").click(function() {
        var newColor = $("#newColor").val();
        $("#div1").css("background", newColor);
    });

    $("#fadeButton").click(function(){
        $("#div3").fadeToggle("slow");
    });
});
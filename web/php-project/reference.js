$(document).ready(function() { //or you can use $(function(){ jQuery goes here })
    $("#offerRideButton").click(function() {
        window.location.href = "../php-project/offer-ride.php";
    });

    $("#searchRideButton").click(function(){
      window.location.href = "../php-project/search-ride.php";
    });

    $("#backBtn").click(function(){
      alert("Back button clicked.");
      window.location.href = "../php-project/ride-board.php";
    });
});

//Validates the form for offer ride. If it's empty it stops the submit process
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Get the forms we want to add validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
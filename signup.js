$(document).ready(function() {
    $('#signupForm').submit(function(event) {
      event.preventDefault();
      var email = $('#email').val();
      var password = $('#password').val();
  
      // Envoyer les données du formulaire au serveur avec une requête AJAX
      $.ajax({
        url: 'signup.php',
        method: 'POST',
        data: { email: email, password: password },
        success: function(response) {
          alert(response);
        }
      });
    });
  });
  
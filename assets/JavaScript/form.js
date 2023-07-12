document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('myForm');
    
    form.addEventListener('submit', function(event) {
      event.preventDefault(); // Empêche l'envoi du formulaire
      
      // Affiche la pop-up
      alert('Votre formulaire a été envoyé !');
  
    });
  });
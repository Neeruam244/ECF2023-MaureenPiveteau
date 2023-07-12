// Étape 1 : Associez un gestionnaire d'événements à l'élément déclencheur
const boutonFiltrer = document.getElementById('bouton-filtrer');
boutonFiltrer.addEventListener('click', filtrer);

// Étape 2 : Empêchez le comportement par défaut de l'élément déclencheur
function filtrer(event) {
  event.preventDefault();
  
  // Étape 3 : Créez une requête AJAX
  const xhr = new XMLHttpRequest();

  // Étape 4 : Configurez la requête AJAX
  xhr.open('GET', 'votre-url-de-filtrage?parametre1=valeur1&parametre2=valeur2', true);

  // Étape 5 : Définissez une fonction de rappel
  xhr.onload = function() {
    if (xhr.status === 200) {
      // Étape 6 : Mettez à jour les éléments de la page avec les résultats filtrés
      const resultat = xhr.responseText;
      // Mettez à jour les éléments de la page avec les données filtrées
    }
  };

  // Envoyez la requête AJAX
  xhr.send();
}
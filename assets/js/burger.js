var ajouterAuPanierBtn = document.getElementById('ajouter-au-panier-btn');

  // Ajouter un gestionnaire d'événement de clic au bouton
  ajouterAuPanierBtn.addEventListener('click', function() {
    // Récupérer le nom du produit
    var nomProduit = document.querySelector('.card-title').textContent;

    // Récupérer le prix du produit depuis une source appropriée, par exemple, une balise data-attribute sur le bouton
    var prixProduit = 10.99; // Remplacez cette valeur par le prix réel du produit

    // Créer un objet contenant les détails du produit
    var produit = {
      nom: nomProduit,
      prix: prixProduit
    };

    // Convertir l'objet produit en une chaîne JSON
    var produitJSON = JSON.stringify(produit);

    // Encoder l'objet JSON pour l'envoyer dans l'URL
    var produitEncode = encodeURIComponent(produitJSON);

    // Rediriger vers la page commande.html avec les détails du produit
    window.location.href = 'commande.html?produit=' + produitEncode;
  });

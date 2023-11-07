// Sélectionner l'élément input pour la recherche
const searchItem = document.querySelector('#searchInput');

// Sélectionner le bouton pour lancer la recherche
const searchBtn = document.querySelector('button#searchBtn');

// Sélectionner tous les produits
const produits = document.querySelectorAll('.produit');

// Sélectionner la section principale
const mainSection = document.querySelector('.main-section');

// Fonction pour la recherche
function search() {
    console.log( produits); // Afficher dans la console le message "hello" et le tableau des produits
    if (!searchItem.value) return; // Si la valeur de l'input est vide, arrêter la fonction
    mainSection.innerHTML = ''; // Vider le contenu de la section principale
    let match = false; // Initialiser une variable de correspondance à faux
    produits.forEach(produit => { // Parcourir tous les produits
        let title = produit.querySelector('.card-title').innerText.toLowerCase(); // Récupérer le titre du produit en minuscules
        if (title.includes(searchItem.value.toLowerCase())) { // Si le titre contient la valeur recherchée en minuscules
            mainSection.appendChild(produit) // Ajouter le produit à la section principale
            match = true; // Définir la variable de correspondance à vrai
        }
    });
    if (!match) {
        mainSection.innerHTML = < div class = "d-flex mx-auto" >
            <h3 class="text-danger text-center">No '${searchItem.value}' Found</h3>
        </div>;
    }
    
}

//Ajouter un événement de clic sur le bouton de recherche
searchBtn.addEventListener('click', search);

// Ajouter un événement de pression de touche sur l'ensemble du document
document.addEventListener('keyup', (e) => {
    if (e.keyCode !== 13) return; // Si la touche pressée n'est pas "Enter", arrêter la fonction
    let isFocused = (document.activeElement === searchItem); // Vérifier si l'élément actif est l'input de recherche
    if (isFocused) {
        this.search(); // Lancer la fonction de recherche si l'input est actif
    }
});
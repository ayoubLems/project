<?php
// Définir le chemin de la racine du site web
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/projet/backend";

// Inclure le fichier de connexion à la base de données
require_once($path . 'connect.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Initialisation de la session
session_start();


// Exécutez la requête SQL pour récupérer les noms des produits ajoutés
$sql = "SELECT product_name_fr FROM produit";
$result = mysqli_query($connection, $sql);

// Récupérez les données de session pré-remplies
$product_name_fr = $_SESSION['product_name_fr'];
$energy_kcal_value_kcal = $_SESSION['energy_kcal_value_kcal'];
$fat_value_g = $_SESSION['fat_value_g'];
$saturated_fat_value_g = $_SESSION['saturated_fat_value_g'];
$carbohydrates_value_g = $_SESSION['carbohydrates_value_g'];
$sugars_value_g = $_SESSION['sugars_value_g'];
$fiber_value_g = $_SESSION['fiber_value_g'];
$proteins_value_g = $_SESSION['proteins_value_g'];
$salt_value_g = $_SESSION['salt_value_g'];
$sodium_value_g = $_SESSION['sodium_value_g'];
?>

<?php require($path . 'templates/header.php') ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord</title>
    <!-- Inclure les liens vers les bibliothèques Chart.js et d'autres ressources nécessaires -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <!-- Ajoutez ici d'autres liens vers les ressources CSS ou JavaScript nécessaires -->
    <style>
        /* Style pour rendre les canvas responsifs */
        canvas {
            display: block; /* Removes the inline default behavior */
            max-width: 600px; /* Set a maximum width */
            max-height: 400px; /* Set a maximum height */
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
   <!-- Zone 1: Tableau des produits ajoutés -->
   <div class="d-flex mt-4 mx-4">
    <h2>Tableau de bord</h2>
    </div>
    <h3>Produits ajoutés</h3>
    <table border="1">
        <tr>
            <th>Nom du produit</th>
            <td><?php echo htmlspecialchars($product_name_fr); ?></td>
        </tr>
    </table>
   

    <!-- Zone 2: Graphique en cercle pour la consommation d'énergie -->
    <h2>Consommation d'énergie (kcal)</h2>
    <canvas id="energyChart" style="display: block; box-sizing: border-box; max-width: 100%;"></canvas>

    <script>
    var energy_kcal_value_kcal = <?php echo json_encode($energy_kcal_value_kcal); ?>;
    var ctx = document.getElementById('energyChart').getContext('2d');
    //ctx.canvas.width = 100; // Largeur souhaitée
    //ctx.canvas.height = 100; // Hauteur souhaitée
    var energyChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Consommé', 'Restant'],
        datasets: [{
            data: [energy_kcal_value_kcal, 2500 - energy_kcal_value_kcal], // Le total est de 2500 kcal
            backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(255, 99, 132, 0.2)'],
            borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)'],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        scales: {
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Valeur'
                }
            }
        }, 
        plugins: {
            legend: false,
            title: {
                display: true,
                text: 'Consommation d\'énergie (kcal)'
            }
        },
        layout: {
            padding: {
                left: 10,
                right: 10,
                top: 0,
                bottom: 0
            }
        },
        maintainAspectRatio: true,
        responsive: true,
        aspectRatio: 1, // Vous pouvez ajuster la valeur ici pour définir le ratio souhaité
        width: 100, // Largeur souhaitée en pixels
        height: 100 // Hauteur souhaitée en pixels
    }
});

    </script>

    <!-- Zone 3: Graphique pour la consommation de chaque composant nutritionnel -->
    <h2>Consommation de composants nutritionnels</h2>
    <canvas id="nutritionChart" style="display: block; box-sizing: border-box; max-width: 100%;"></canvas>
    <script>
    var nutritionData = {
        labels: ['Gras (g)', 'Gras saturés (g)', 'Glucides (g)', 'Sucres (g)', 'Fibres (g)', 'Protéines (g)', 'Sel (g)', 'Sodium (mg)'],
        datasets: [{
            data: [<?php echo "$fat_value_g, $saturated_fat_value_g, $carbohydrates_value_g, $sugars_value_g, $fiber_value_g, $proteins_value_g, $salt_value_g, $sodium_value_g"; ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(0, 0, 0, 0.2)',
                'rgba(128, 128, 128, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(0, 0, 0, 1)',
                'rgba(128, 128, 128, 1)'
            ],
            borderWidth: 1
        }]
    };

    var ctx2 = document.getElementById('nutritionChart').getContext('2d');
    //ctx2.canvas.width = 100; // Largeur souhaitée
    //ctx2.canvas.height = 100; // Hauteur souhaitée
    var nutritionChart = new Chart(ctx2, {
    type: 'bar',
    data: nutritionData,
    options: {
        responsive: true,
        maintainAspectRatio: true,
        legend: {
            display: false
        },
        scales: {
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Valeur'
                }
            }
        },
        plugins: {
            legend: false,
            title: {
                display: true,
                text: 'Consommation de composants nutritionnels'
            }
        },
        layout: {
            padding: {
                left: 10,
                right: 10,
                top: 0,
                bottom: 0
            }
        },
        maintainAspectRatio: true,
        responsive: true,
        aspectRatio: 1, // Vous pouvez ajuster la valeur ici pour définir le ratio souhaité
        width: 100, // Largeur souhaitée en pixels
        height: 100 // Hauteur souhaitée en pixels
    }
});


    // Fonction pour redimensionner les graphiques lorsque la fenêtre est redimensionnée
    function resizeCharts() {
    if (energyChart instanceof Chart) {
        energyChart.resize();
    }

    if (nutritionChart instanceof Chart) {
        nutritionChart.resize();
    }
}

    // Écouteur d'événements pour le redimensionnement de la fenêtre
    window.addEventListener('resize', resizeCharts);

    </script>
</body>
</html>
<?php require($path . 'templates/footer.php') ?>

<?php
// Connexion à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=Shop_online', 'root', 'root');

// Requête SQL avec jointure pour récupérer les noms des articles
$sql = "SELECT Articles.Title as nom_produit, SUM(ligne_commande.quantite) as total_achats FROM ligne_commande INNER JOIN Articles ON ligne_commande.id_produit = Articles.id GROUP BY ligne_commande.id_produit ORDER BY total_achats DESC";

// Exécution de la requête SQL
$stmt = $pdo->query($sql);

// Récupération des résultats de la requête
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Préparation des données pour le graphique
$labels = [];
$values = [];
foreach ($data as $row) {
    $labels[] = $row['nom_produit'];
    $values[] = $row['total_achats'];
}

// Création du graphique avec la bibliothèque Chart.js
?>
<html>
<head>
    <title>Graphique des ventes</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body >
  
<div style="position: absolute;
  top: 30px;
  left: 10px;
  width: 50%;
  height: 50%;
  transform: scale(0.8);">
    <h4 style="text-align:center;">Quantités par Articles</h4>
    

 
    <canvas id="myChart"></canvas>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?= json_encode($labels) ?>,
                datasets: [{
                    label: 'Nombre d\'articles vendus',
                    data: <?= json_encode($values) ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
       </div>
</body>
</html>

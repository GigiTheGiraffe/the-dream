<?php
require_once "password.php";
require_once "get-currency.php";

$servername = "localhost";
$password = $secret;
$username = "root";
$dbname = "dream";

try {
    // Création de la connexion PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Définir le mode d'erreur de PDO sur exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Préparation de la requête d'insertion
    $stmt = $conn->prepare("INSERT INTO utilisateur (iso, rate) VALUES (:iso, :rate)");
    // Delete les données existantes
    $conn->exec("DELETE FROM utilisateur");
    // Boucle à travers les devises et leurs taux
    foreach ($currencies_rates as $iso => $rate) {
        // Liaison des paramètres
        $stmt->bindParam(':iso', $iso);
        $stmt->bindParam(':rate', $rate);

        // Exécution de la requête
        $stmt->execute();
    }

    echo "New records created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
/*// créer l'array $ nécessaire pour utiliser les iso dans index.php et get-currency
try {
    // Créer une connexion PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Définir le mode d'erreur de PDO sur exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Préparer et exécuter la requête SQL
    $sql = "SELECT iso, rate FROM utilisateur";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Récupérer les résultats
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Transformer les résultats en tableau associatif
    $isoRates = [];
    foreach ($results as $row) {
        $isoRates[$row['iso']] = $row['rate'];
    }

    // Afficher le tableau associatif pour vérification
    print_r($isoRates);

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

// Fermer la connexion
$conn = null;
*/


// Fermeture de la connexion
?>

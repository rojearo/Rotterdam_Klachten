<?php
// Database configuratie
$host = 'localhost';
$dbname = 'rotterdam_klachten';
$user = 'root';
$password = '';

// Probeer verbinding te maken met de database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Fout bij de databaseverbinding: " . $e->getMessage());
}

// Select query voor de klachten tabel
$query = "SELECT * FROM Klachten";

try {
    // Bereid de query voor uitvoering voor
    $statement = $pdo->prepare($query);

    // Voer de query uit
    $statement->execute();

    // Haal de resultaten op als associatieve array
    $resultaten = $statement->fetchAll(PDO::FETCH_ASSOC);

    // Doe iets met de resultaten (bijvoorbeeld printen)
    foreach ($resultaten as $rij) {
        print_r($rij);
    }

} catch (PDOException $e) {
    die("Fout bij het uitvoeren van de query: " . $e->getMessage());
}

// Sluit de databaseverbinding
$pdo = null;
?>

<?php
// var_dump($_POST);exit();
include('config.php');

// Maak verbinding met de database
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // Bereid de SQL statement voor
    $stmt = $conn->prepare("INSERT INTO Afspraak (basiskleur1, basiskleur2, basiskleur3, basiskleur4, telefoonnummer, email, afspraakdatum, behandeling, datum_tijd_verzending) VALUES (:basiskleur1, :basiskleur2, :basiskleur3, :basiskleur4, :telefoonnummer, :email, :afspraakdatum, :behandeling, :datum_tijd_verzending)");
  
    // Bind de parameterwaarden aan de statement
    $stmt->bindParam(':basiskleur1', $basiskleur1);
    $stmt->bindParam(':basiskleur2', $basiskleur2);
    $stmt->bindParam(':basiskleur3', $basiskleur3);
    $stmt->bindParam(':basiskleur4', $basiskleur4);
    $stmt->bindParam(':telefoonnummer', $telefoonnummer);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':afspraakdatum', $afspraakdatum);
    $stmt->bindParam(':behandeling', $behandeling);
    $stmt->bindParam(':datum_tijd_verzending', $datum_tijd_verzending);
  
    // Vul de parameterwaarden in
    $basiskleur1 = $_POST['basiskleur1'];
    $basiskleur2 = $_POST['basiskleur2'];
    $basiskleur3 = $_POST['basiskleur3'];
    $basiskleur4 = $_POST['basiskleur4'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $email = $_POST['email'];
    $afspraakdatum = $_POST['afspraakdatum'];
    $behandeling = implode(',', $_POST['behandeling']);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}



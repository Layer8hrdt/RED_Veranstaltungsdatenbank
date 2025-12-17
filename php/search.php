<!-- Einmalig Datenbankverbindung herstellen -->
<?php
require_once '../config/db_config.php'
?>
<!-- LOGIK FÜR DIE VERANSTALTUNGSSUCHE -->
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suchergebnisse</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="searchbody">
    <?php
  
    
    //Schleife, die alle Eingaben aus dem Suchformular holt und in jeweils einer Variable speichert
    if (isset($_POST["absenden"]) && $_POST["absenden"] == "1") {
        $kategorie = trim($_POST["kategorie"]);
        $art = trim($_POST["art"]);
        $stadtteil = trim($_POST["stadtteil"]);
        $titel = trim($_POST["titel"]);
        $ort = trim($_POST["ort"]);
    }


    //SQL Query
    $sql_basis = "SELECT vk1.bezeichnung AS Kategorie, va1.bezeichnung AS Art, st.bezeichnung AS Stadtteil, vo.name AS Ort, titel FROM veranstaltung v
                INNER JOIN veranstaltungskategorie1 vk1 ON v.veranstaltungskategorie1_id = vk1.veranstaltungskategorie1_id
                INNER JOIN veranstaltungsart1 va1 ON v.veranstaltungsart1_id = va1.veranstaltungsart1_id
                INNER JOIN veranstaltungsort vo ON v.veranstaltungsort_id = vo.veranstaltungsort_id
                INNER JOIN stadtteil st ON st.stadtteil_id = vo.stadtteil_id ";



    // if Abfragen, die die Variablen nur dann an die Variable $whereclause anhängt (verkettet mit .=), wenn die Variable nicht leer ist
    // Filter wird immer mit einer wahren Bedingung initialisiert (WHERE = 1=1)

    $whereclause = "WHERE 1=1 ";
    if (!empty($kategorie)) {
        $whereclause .= " AND vk1.bezeichnung LIKE '%$kategorie%'";
    }

    if (!empty($art)) {
        $whereclause .= " AND va1.bezeichnung LIKE '%$art%'";
    }

    if (!empty($stadtteil)) {
        $whereclause .= " AND st.bezeichnung LIKE '%$stadtteil%'";
    }

    if (!empty($titel)) {
        $whereclause .= " AND v.titel LIKE '%$titel%'";
    }

    if (!empty($ort)) {
        $whereclause .= " AND vo.name LIKE '%$ort%'";
    }

    
    
    
    //An die Basis Query die WHERE Klauseln anhängen und dann in der Variable §sql speichern
    $sql = $sql_basis . $whereclause;


    // Die Datenbankverbindung und die SQL Query der Datenbank übergeben und in der Variable $result speichern
    $result = mysqli_query($conn, $sql);

    //Daten aus $result auslesen
    if (mysqli_num_rows($result) > 0) {

        echo "<h2>Gefundene Veranstaltungen:</h2>";
        echo "<ul>";

        while ($row = mysqli_fetch_assoc($result)) {
            // Ausgabe der Felder
            echo "<br>";
            echo "<li id='resultList'>";
            echo "📅 Titel: <strong>" . htmlspecialchars($row['titel']) . "</strong><br>";
            echo "🏷️ Kategorie: " . htmlspecialchars($row['Kategorie']) . "<br>";
            echo "🎭 Art: " . htmlspecialchars($row['Art']) . "<br>";
            echo "🎭 Ort: " . htmlspecialchars($row['Ort']) . "<br>";
            echo "📍 Stadtteil: " . htmlspecialchars($row['Stadtteil']);
            echo "</li>";
            echo "<br>";
        }

        echo "</ul>";
    } else {
        echo "Es wurden keine Veranstaltungen gefunden";
    }









    ?>
</body>

</html>
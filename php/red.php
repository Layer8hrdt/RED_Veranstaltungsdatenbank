<!-- SELECT * FROM LOGIK FÜR DIE EINZELNEN BUTTONS -->
<?php
require_once '../config/db_config.php'
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ergebnisse</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Ergebnisse</h1>
    <?php

    //Alle Zielgruppen abrufen
    if (isset($_POST['zielgruppe']) && $_POST['zielgruppe'] == '1') {

        $sql = "SELECT * FROM zielgruppe";


        $result = mysqli_query($conn, $sql);

        // Prüfen, ob die Abfrage geklappt hat UND ob Zeilen da sind
        if ($result && mysqli_num_rows($result) > 0) {

            echo "<h2>Gefundene Zielgruppen:</h2>";
            echo "<ul class='buttonresult'>";

            // Die nächste Zeile holen
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>" . htmlspecialchars($row['bezeichnung']) . "</li>";
            }

            echo "</ul>";
        } else {
            echo "Keine Daten gefunden";
        }
    }


    //Alle Veranstaltungen abrufen
    if (isset($_POST['veranstaltung']) && $_POST['veranstaltung'] == '1') {

        $sql = "SELECT * FROM veranstaltung";


        $result = mysqli_query($conn, $sql);

        // Prüfen, ob die Abfrage geklappt hat UND ob Zeilen da sind
        if ($result && mysqli_num_rows($result) > 0) {

            echo "<h2>Gefundene Veranstaltungen:</h2>";
            echo "<ul class='buttonresult'>";

            // Die nächste Zeile holen
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>" . htmlspecialchars($row['titel']) . "</li>";
            }

            echo "</ul>";
        } else {
            echo "Keine Daten gefunden";
        }
    }

    //Alle Veranstaltungsorte abrufen
    if (isset($_POST['veranstaltungsort']) && $_POST['veranstaltungsort'] == '1') {

        $sql = "SELECT * FROM veranstaltungsort";


        $result = mysqli_query($conn, $sql);

        // Prüfen, ob die Abfrage geklappt hat UND ob Zeilen da sind
        if ($result && mysqli_num_rows($result) > 0) {

            echo "<h2>Gefundene Veranstaltungsorte:</h2>";
            echo "<ul class='buttonresult'>";

            // Die nächste Zeile holen
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>" . htmlspecialchars($row['name']) . "</li>";
            }

            echo "</ul>";
        } else {
            echo "Keine Daten gefunden";
        }
    }


    //Alle Veranstaltungskategorien1 abrufen
    if (isset($_POST['veranstaltungskategorie1']) && $_POST['veranstaltungskategorie1'] == '1') {

        $sql = "SELECT * FROM veranstaltungskategorie1";


        $result = mysqli_query($conn, $sql);

        // Prüfen, ob die Abfrage geklappt hat UND ob Zeilen da sind
        if ($result && mysqli_num_rows($result) > 0) {

            echo "<h2>Gefundene Veranstaltungskategorien(1):</h2>";
            echo "<ul class='buttonresult'>";

            // Die nächste Zeile holen
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>" . htmlspecialchars($row['bezeichnung']) . "</li>";
            }

            echo "</ul>";
        } else {
            echo "Keine Daten gefunden";
        }
    }


    //Alle Veranstaltungsarten1 abrufen
    if (isset($_POST['veranstaltungsart1']) && $_POST['veranstaltungsart1'] == '1') {

        $sql = "SELECT * FROM veranstaltungsart1";


        $result = mysqli_query($conn, $sql);

        // Prüfen, ob die Abfrage geklappt hat UND ob Zeilen da sind
        if ($result && mysqli_num_rows($result) > 0) {

            echo "<h2>Gefundene Veranstaltungsarten(1):</h2>";
            echo "<ul class='buttonresult'>";

            // Die nächste Zeile holen
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>" . htmlspecialchars($row['bezeichnung']) . "</li>";
            }

            echo "</ul>";
        } else {
            echo "Keine Daten gefunden";
        }
    }















    ?>
</body>

</html>
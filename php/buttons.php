<!-- SELECT * FROM LOGIK FÜR DIE EINZELNEN BUTTONS -->

<!-- Einmalig Datenbankverbindung herstellen -->
<?php
require_once '../config/db_config.php'
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ergebnisse</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>Ergebnisse</h1>
    <?php


    // Funktion, der beim drücken des jeweiligen Buttons eine Query übergibt
    function readData($buttonName, $column, $headline, $conn)
    {


        if (isset($_POST[$buttonName]) && $_POST[$buttonName] == '1') {

            $sql = "SELECT * FROM $buttonName";


            $result = mysqli_query($conn, $sql);


            if ($result && mysqli_num_rows($result) > 0) {

                echo "<h2>$headline: </h2>";
                echo "<ul class='buttonresult'>";

                // Die nächste Zeile holen
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li>" . htmlspecialchars($row[$column]) . "</li>";
                }

                echo "</ul>";
            } else {
                echo "Keine Daten gefunden";
            }
        }
    }

    readData("zielgruppe", "bezeichnung", "Gefundene Zielgruppen", $conn);
    readData("veranstaltung", "titel", "Gefundene Veranstaltungen", $conn);
    readData("veranstaltungsort", "name", "Gefundene Veranstaltungsorte", $conn);
    readData("veranstaltungskategorie1", "bezeichnung", "Gefundene Veranstaltungskategorien (1)", $conn);
    readData("veranstaltungsart1", "bezeichnung", "Gefundene Veranstaltungsarten (1)", $conn);


    ?>
</body>

</html>
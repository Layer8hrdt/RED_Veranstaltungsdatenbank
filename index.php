<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RED</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="buttonresults">
    <h1 id="headerStart">RED - Regionale Event Datenbank</h1>
    <nav>
        <ul>
            <li><a href="">Start</a></li>
            <li><a href="">Top-Events</a></li>
            <li><a href="">Wohin am Wochenende?</a></li>
        </ul>
    </nav>
    <p>RED Veranstaltungssuche</p>

    <!-- Formular für die Veranstaltungssuche -->
    <form action="php/red.php" method="post">

        <label for="kategorie">Kategorie:</label>
        <input type="text" id="kategorie" name="kategorie"><br><br>

        <label for="art">Art:</label>
        <input type="text" id="art" name="art"><br><br>

        <label for="ort">Ort:</label>
        <input type="text" id="ort" name="ort"><br><br>

        <label for="stadtteil">Stadtteil:</label>
        <input type="text" id="stadtteil" name="stadtteil"><br><br>

        <label for="freitext">Freitext:</label><br>
        <textarea id="freitext" name="freitext" rows="5" cols="40"></textarea><br><br>

        <button type="submit">Absenden</button>
        <button type="reset">Zurücksetzen</button>

        <br><br>
        <!-- Button zum abrufen aller Zielgruppen -->
        <form action="php/red.php" method="POST">
            <input type="hidden" name="zielgruppe" value="1">
            <button type="submit">Zielgruppen abrufen</button>
        </form>


        <!-- Button zum abrufen aller Veranstaltungen-->
        <form action="php/red.php" method="POST">
            <input type="hidden" name="veranstaltung" value="1">
            <button type="submit">Veranstaltungen abrufen</button>
        </form>

        <!-- Button zum abrufen aller Veranstaltungsorte -->
        <form action="php/red.php" method="POST">
            <input type="hidden" name="veranstaltungsort" value="1">
            <button type="submit">Veranstaltungsorte abrufen</button>
        </form>

        <!-- Button zum abrufen aller Veranstaltungskategorien (1)-->
        <form action="php/red.php" method="POST">
            <input type="hidden" name="veranstaltungskategorie1" value="1">
            <button type="submit">Veranstaltungskategorien (1) abrufen</button>
        </form>

        <!-- Button zum abrufen aller Veranstaltungsarten (1) -->
        <form action="php/red.php" method="POST">
            <input type="hidden" name="veranstaltungsart1" value="1">
            <button type="submit">Veranstaltungsarten (1) abrufen</button>
        </form>

</html>
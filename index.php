<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RED Veranstaltungssuche</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Geom:ital,wght@0,300..900;1,300..900&display=swap');
    </style>
</head>

<body class="startbody">
    <h1 class="headerStart" id="headerStart">RED - Regionale Event Datenbank</h1>
    <nav>
        <ul>
            <li><a href="#headerStart">Start</a></li>
            <li><a href="">Top-Events</a></li>
            <li><a href="">Wohin am Wochenende?</a></li>
        </ul>
    </nav>
    <p>RED Veranstaltungssuche</p>

    <!-- Formular für die Veranstaltungssuche -->
    <form class="suchformular" action="php/search.php" method="post">
        <div>
            <label for="kategorie">Kategorie:</label>
            <input type="text" id="kategorie" name="kategorie" placeholder="z.B. Musik">
        </div>
        <div>
            <label for="art">Art:</label>
            <input type="text" id="art" name="art" placeholder="z.B. Konzert">
        </div>

        <div>
            <label for="ort">Ort:</label>
            <input type="text" id="ort" name="ort" placeholder="z.B. Stadthalle">
        </div>
        <div>
            <label for="stadtteil">Stadtteil:</label>
            <input type="text" id="stadtteil" name="stadtteil" placeholder="z.B. Altstadt">
        </div>
        <div>
            <label for="titel">Titel (Freitext):</label>
            <input type="text" id="titel" name="titel">
        </div>
        <div>
            <button type="submit" id="absenden" name="absenden" value="1">Absenden</button>
            <button type="reset">Zurücksetzen</button>
        </div>

    </form>


    <!-- Button zum abrufen aller Zielgruppen -->
    <form action="php/buttons.php" method="POST">
        <input type="hidden" name="zielgruppe" value="1">
        <button type="submit">Zielgruppen abrufen</button>
    </form><br>


    <!-- Button zum abrufen aller Veranstaltungen-->
    <form action="php/buttons.php" method="POST">
        <input type="hidden" name="veranstaltung" value="1">
        <button type="submit">Veranstaltungen abrufen</button>
    </form><br>

    <!-- Button zum abrufen aller Veranstaltungsorte -->
    <form action="php/buttons.php" method="POST">
        <input type="hidden" name="veranstaltungsort" value="1">
        <button type="submit">Veranstaltungsorte abrufen</button>
    </form><br>

    <!-- Button zum abrufen aller Veranstaltungskategorien (1)-->
    <form action="php/buttons.php" method="POST">
        <input type="hidden" name="veranstaltungskategorie1" value="1">
        <button type="submit">Veranstaltungskategorien (1) abrufen</button>
    </form><br>

    <!-- Button zum abrufen aller Veranstaltungsarten (1) -->
    <form action="php/buttons.php" method="POST">
        <input type="hidden" name="veranstaltungsart1" value="1">
        <button type="submit">Veranstaltungsarten (1) abrufen</button>
    </form><br>

</html>
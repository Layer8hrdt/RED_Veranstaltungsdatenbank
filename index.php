<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RED Veranstaltungssuche</title>
    <link rel="stylesheet" href="css/style_main.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Geom:ital,wght@0,300..900;1,300..900&display=swap');
    </style>
</head>

<body class="start_body">
    <!-- Header mit Navigationsleiste -->
    <div class="headerStart">
        <img src="images/nuernburg.png." alt="Nürnburg" class="startImage">
        <h1 id="top">RED - Regionale Event Datenbank</h1>
    </div>
    <nav>
        <ul>
            <li><a href="#top">⭐ Start</a></li>
            <li><a href="">🎉 Top-Events</a></li>
            <li><a href="">❓ Wohin am Wochenende?</a></li>
            <li><a href="#suche">🔍Veranstaltungen suchen</a></li>
            <li><a href="">📧 Kontakt</a></li>
        </ul>
    </nav>
    <!-- Buttons zum abrufen bestimmter Datensätze -->
    <div class="abrufbuttons">
        <!-- Button zum abrufen aller Zielgruppen -->
        <form action="php/buttons.php" method="POST">
            <input type="hidden" name="zielgruppe" value="1">
            <button type="submit" class="btn">Zielgruppen</button>
        </form>


        <!-- Button zum abrufen aller Veranstaltungen-->
        <form action="php/buttons.php" method="POST">
            <input type="hidden" name="veranstaltung" value="1">
            <button type="submit" class="btn">Veranstaltungen</button>
        </form>

        <!-- Button zum abrufen aller Veranstaltungsorte -->
        <form action="php/buttons.php" method="POST">
            <input type="hidden" name="veranstaltungsort" value="1">
            <button type="submit" class="btn">Veranstaltungsorte</button>
        </form>

        <!-- Button zum abrufen aller Veranstaltungskategorien (1)-->
        <form action="php/buttons.php" method="POST">
            <input type="hidden" name="veranstaltungskategorie1" value="1">
            <button type="submit" class="btn">Veranstaltungskategorien</button>
        </form>

        <!-- Button zum abrufen aller Veranstaltungsarten (1) -->
        <form action="php/buttons.php" method="POST">
            <input type="hidden" name="veranstaltungsart1" value="1">
            <button type="submit" class="btn">Veranstaltungsarten</button>
        </form>
    </div>
    <!-- Bilderkacheln-->
    <div class="bilder">
        <img src="images/v001.jpg" alt="">
        <img src="images/v002.jpg" alt="">
        <img src="images/v003.jpg" alt="">
        <img src="images/v004.jpg" alt="">
        <img src="images/v005.jpg" alt="">
        <img src="images/v006.jpg" alt="">
        <img src="images/v007.jpg" alt="">
        <img src="images/v008.jpg" alt="">
        <img src="images/v009.jpg" alt="">
        <img src="images/v010.jpg" alt="">
        <img src="images/v011.jpg" alt="">
        <img src="images/v012.jpg" alt="">
        <img src="images/v013.jpg" alt="">
        <img src="images/v014.jpg" alt="">
    </div>

    <!-- Formular für die Veranstaltungssuche -->
    <form class="suchformular" action="php/search.php" method="post" autocomplete="off">
        <div>
            <label for="kategorie" id="suche">Kategorie:</label>
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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



</html>
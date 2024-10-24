<form action="passwortgenerator.php" method="get">
        <label for="laenge">Bitte gib die gewünschte Länge ein (Maximal 81 Zeichen):</label>
        <input type="number" id="laenge" name="laenge" min="1" max="81" required>
        <button type="submit">Passwort generieren</button>
</form>

<?php if (isset($_GET['laenge'])): ?>
    <?php $laenge = intval($_GET['laenge']); ?>
    <?php if ($laenge < 1 || $laenge > 81): ?>
        die("Ungültige Länge. Bitte gib eine Zahl zwischen 1 und 81 ein.");
    ?>
    <?php else: ?>
        <?php 
            $kleine_buchstaben = "abcdefghijklmnopqrstuvwxyz";
            $grosse_buchstaben = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $zahlen = "0123456789";
            $symbole = "!@#$%^&*()_-+=?><[]";
            $zusammengesetzt = $kleine_buchstaben . $grosse_buchstaben . $zahlen . $symbole;
            $passwort = substr(str_shuffle($zusammengesetzt), 0, $laenge);
        ?>
        <div class="sectionHeader">Generiertes Passwort:</div>
            <?php htmlspecialchars($passwort); ?>
    <?php endif; ?>
<?php else: ?>
    <p>Keine Zahl eingegeben.</p>
<?php endif; ?>
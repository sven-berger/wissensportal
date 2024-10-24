<?php
$eingabe = 15;
while ($eingabe !== 7) {
    if ($eingabe === 7) {
        echo "<p>Herzlichen Glückwunsch, du hast gewonnen!</p>";
        break;
    } else {
        echo "<p>Leider nichts gewonnen, versuche es erneut.</p>";
        break;
    }
}
?>
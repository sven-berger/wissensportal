<?php
$eingabe = 7;

while ($eingabe !== 7) {
    if ($eingabe === 7) {
        echo "Herzlichen Glückwunsch, du hast gewonnnen!";
        break;
    } else {
        echo "Leider nichts gewonnen, versuche es erneut.";
        break;
    }
}

?>
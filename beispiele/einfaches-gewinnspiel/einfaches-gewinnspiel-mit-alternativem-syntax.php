<?php
    $eingabe = 15;
?>

<?php while ($eingabe !== 7): ?>
    <?php if ($eingabe === 7): ?>
        <p>Herzlichen Glückwunsch, du hast gewonnen!</p>
        <?php break; ?>
    <?php else: ?>
        <p>Leider nichts gewonnen, versuche es erneut.</p>
        <?php break; ?>
    <?php endif; ?>
<?php endwhile; ?>
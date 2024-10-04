<?php
    $bereich = 'Wissensportal';
    $pageTitle = 'Wissensportal';
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes/header.inc.php");
?>
    
<?php if (isset($_GET['snippet'])): ?>

    <?php
        $snippetName = $_GET['snippet'];
        $sql = "SELECT * FROM snippets WHERE url = :url";
        $stmt = $connection->prepare($sql);    
        $stmt->execute([':url' => $snippetName]);
        $snippet = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($snippet) {
            $url = htmlspecialchars($snippet['url']);
            $title = htmlspecialchars($snippet['title']);
            $description = htmlspecialchars($snippet['description']);
            $phpSnippet = htmlspecialchars($snippet['php_snippet']);
            $pythonSnippet = htmlspecialchars($snippet['python_snippet']);
            $javascriptSnippet = htmlspecialchars($snippet['javascript_snippet']);
        } else {
            echo "<section class='section'><div class='sectionContent'>Snippet nicht gefunden oder keine Übereinstimmung.</div></section>";
            require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.inc.php");
            exit;
        }
    ?>

<?php if (!empty($phpSnippet)): ?>
    <h3 class="section-title">PHP</h3>
    <pre><code class="language-php"><?php echo $phpSnippet; ?></code></pre>
<?php endif; ?>

<?php if (!empty($pythonSnippet)): ?>
    <h3 class="section-title">Python</h3>
    <pre><code class="language-python"><?php echo $pythonSnippet; ?></code></pre>
<?php endif; ?>

<?php if (!empty($javascriptSnippet)): ?>
    <h3 class="section-title">JavaScript</h3>
    <pre><code class="language-javascript"><?php echo $javascriptSnippet; ?></code></pre>
<?php endif; ?>

<section class="section">
    <div class="sectionContent">
        <a href="https://wissensportal.codevoyage.de/acp/edit.php?id=<?php echo $snippet['id']; ?>">Bearbeiten</a> |
        <a href="https://wissensportal.codevoyage.de/acp/delete.php?id=<?php echo $snippet['id']; ?>">Löschen</a>
    </div>
</section>

<?php else: ?>

    <? include "lib/index.lib.php"; ?>
    
<?php endif; ?>

<?php    
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.inc.php");
?>
<?php

function getSnippetTitle(PDO $connection, $snippetName) {
    $sql = "SELECT * FROM snippets WHERE url = :url";
    $stmt = $connection->prepare($sql);
    $stmt->execute([':url' => $snippetName]);
    $snippet = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($snippet) {
        return htmlspecialchars($snippet['title']);
    }
}

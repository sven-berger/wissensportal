<?php

$bereich = 'Administrationsbereich';
$pageTitle = 'Snippet abschicken';
require_once ($_SERVER['DOCUMENT_ROOT'] . "/acp/includes/header.inc.php");

$url = $_POST['url'];
$title = $_POST['title'];
$description = $_POST['description'];
$php_snippet = $_POST['php_snippet'];
$python_snippet = $_POST['python_snippet'];
$javascript_snippet = $_POST['javascript_snippet'];


$sql = "INSERT INTO snippets (url, title, description, php_snippet, python_snippet, javascript_snippet) 
        VALUES (:url, :title, :description, :php_snippet, :python_snippet, :javascript_snippet)";
$stmt = $connection->prepare($sql);
$stmt->execute([
    ':url' => $url,
    ':title' => $title,
    ':description' => $description,
    ':php_snippet' => $php_snippet,
    ':python_snippet' => $python_snippet,
    ':javascript_snippet' => $javascript_snippet
]);

header("Location: https://wissensportal.codevoyage.de/index.php");

require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.inc.php");
?>
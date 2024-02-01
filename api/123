<?php
include_once "./db.php";
$news = $News->find($_GET['id']);
    echo "<span style='font-weight:bolder'>" . $news['title'] . "</span>";
    echo "<br>";
    echo nl2br($news['text']);

?>

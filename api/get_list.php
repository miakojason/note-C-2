<?php include_once "./db.php";
$rows = $News->all(['type' => $_GET['type'], 'sh' => 1]);
foreach ($rows as $row) {
    echo "<div>";
    echo "<a href='Javascript:getNews({$row['id']})'>";
    echo $row['title'];
    echo "</a>";
    echo "</div>";
}

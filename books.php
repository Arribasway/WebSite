<!DOCTYPE HTML>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Books Page</title>
 </head>
 <body>
<?php
    include 'includes/header.inc.php';
    include 'includes/db.inc.php';
    include 'includes/functions.php';
    $data=GetBooks($connection);
    while ($row=mysqli_fetch_assoc($data)){

    echo '<div class="book">';
    echo "<h3>" . $row["Title"] . "</h3>";
    echo "<img height=300 width=200 src=" . $row["book_image"] . " alt=" . ">";
    echo "<p>" . $row["Author"] . "</p>";
    echo "<p>" . $row["Publisher"] . "</p>";
    echo '</div>';
}
?>
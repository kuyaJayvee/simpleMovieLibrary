<?php

include('conn.php');

$query = "SELECT * FROM `library`";
$stmt = $pdo->prepare($query);
$stmt->execute();

  // retrieve data from database   
 while($row = $stmt->fetch()) {
    $image = $row['image'];
    $title = $row['title'];
    $director = $row['director'];
    $genre = $row['genre'];
    $date_release = $row['date_release'];
    $stars = $row['stars'];
    $plot = $row['plot'];

    echo "<tr>
                <td><img src='includes/imgstorage/$image' height='150' width='150'></td>
                <td>$title</td>
                <td>$director</td>
                <td>$genre</td>
                <td>$date_release</td>
                <td>$stars</td>
                <td>$plot</td>
        </tr>";
 }
?>
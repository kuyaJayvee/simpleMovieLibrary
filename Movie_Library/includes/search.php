<?php

include('conn.php');

//get the value of input
$value = $_POST['name'];

// check if the input field is empty
// else load table.php

if ($value !== "") {
    $sql = "SELECT * FROM `library` WHERE CONCAT(title,director,genre,stars) LIKE '%$value%'";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch()) {
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
    } else {
        echo "<tr><td colspan='7'>0 result's found</td></tr>";
    }
} else {
    header("location:read.php");
}

?>

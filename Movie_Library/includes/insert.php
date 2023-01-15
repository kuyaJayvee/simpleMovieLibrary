<?php 
session_start();
include('conn.php');

if(isset($_POST['insert']) && isset($_FILES['upload'])) {
    $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $director = trim(filter_var($_POST['director'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $genre = trim(filter_var($_POST['genre'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $release = trim(filter_var($_POST['release'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $stars = trim(filter_var($_POST['stars'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $plot = trim(filter_var($_POST['plot'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));  

     //for image input
    $valid_ext = ['png','jpeg','jpg','jfif'];
    $name = $_FILES['upload']['name'];
    $type = $_FILES['upload']['type'];
    $tmp_name = $_FILES['upload']['tmp_name'];
    
    $newLocation = "imgstorage/${name}";   
    $split = explode('/', $type);
    $valid_type = strtolower(end($split));

    if(in_array($valid_type,$valid_ext)) {
        if(!file_exists($newLocation)) {

            move_uploaded_file($tmp_name,$newLocation);
            //Insert to databse
            try {
                $query =  "INSERT INTO `library`(image,title,director,genre,date_release,stars,plot) VALUES (?,?,?,?,?,?,?)";

                $stmt = $pdo->prepare($query);
                $stmt->execute([$name, $title, $director, $genre, $release, $stars, $plot]);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            header("location: .././index.php");
            exit();
        } else {
            $_SESSION['error'] = "<div class='bg-danger h3 p-2 rounded'><b>Error! </b>File name already exist!</div>";
            header("location: .././index.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "<div class='bg-danger h3 p-2 rounded'><b>Error! </b>Please choose a valid file type</div>";
        header("location: .././index.php");
        exit();
    }


 }
?>
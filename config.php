

<?php

session_start();


$conn = mysqli_connect('localhost','root','', 'login-reg-stepan');

if(!$conn){
    die("<script>alert('Connection Failed')</script>");
}


$name = '';
$email = '';
$desc = '';
$id = 0; 

$edit_state = false;

if(isset($_POST['save'])){

    if(empty($_POST['name'])) {
        echo "<script>alert('Enter The Name')</script>";
    } else {
        $name = $_POST['name'];
    }
    
    if(empty($_POST['email'])) {
        echo "<script>alert('Enter The Email')</script>";
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['desc'])) {
        echo "<script>alert('Enter The Description')</script>";
    } else {
        $desc = $_POST['desc'];
    }

    if(empty($_FILES['image']['name'])) {
        echo "<script>alert('Select The Image')</script>";
    } else {
        $image = $_FILES['image']['name'];
    }

    if(!empty($name) && !empty($email) && !empty($desc) && isset($image)) {

        $result = mysqli_query($conn, "INSERT INTO `info` (`id`, `name`, `email`, `desc`, `image`) VALUES (NULL, '$name', '$email', '$desc', '$image')");

        if($result){
            move_uploaded_file($_FILES['image']['tmp_name'],"$image");
            header("Location: welcome.php");
        }

    }

}

if(isset($_GET["edit"])) {
    $edit_state = true;
    $id = $_GET["edit"];

    $result = mysqli_query($conn, "SELECT * FROM `info` WHERE `info` . `id` = '$id'");
    $record = mysqli_fetch_array($result);
    $updatedName = $record["name"];
    $updatedEmail = $record["email"];
    $updatedDesc = $record["desc"];
    $updatedImage = $record["image"];

    if(isset($_POST["update"])) {

        if(empty($_POST["name"])) {
            echo "<script>alert('Enter The Name')</script>";
        } else {
            $alreadyUpdatedName = mysqli_real_escape_string($conn, $_POST["name"]);
        }

        if(empty($_POST["email"])) {
            echo "<script>alert('Enter The Email')</script>";
        } else {
            $alreadyUpdatedEmail = mysqli_real_escape_string($conn, $_POST["email"]);
        }

        if(empty($_POST["desc"])) {
            echo "<script>alert('Enter The Description')</script>";
        } else {
            $alreadyUpdatedDesc = mysqli_real_escape_string($conn, $_POST["desc"]);
        }

        if(empty($_FILES["image"]["name"])) {
            echo "<script>alert('Enter The Image')</script>";
        } else {
            $alreadyUpdatedImage = mysqli_real_escape_string($conn, $_FILES["image"]["name"]);
        }

        if(isset($alreadyUpdatedName) && isset($alreadyUpdatedEmail) && isset($alreadyUpdatedDesc) && isset($alreadyUpdatedImage)) {
    
            $result = mysqli_query($conn, "UPDATE `info` SET `name` = '$alreadyUpdatedName', `email` = '$alreadyUpdatedEmail', `desc` = '$alreadyUpdatedDesc', `image` = '$alreadyUpdatedImage' WHERE `info`.`id` = $id");

            if($result) {
                move_uploaded_file($_FILES['image']['tmp_name'],"$alreadyUpdatedImage");
                header("Location: welcome.php");
            }

        }
        
    }
}

$result = mysqli_query($conn, "SELECT * FROM `info`");

?>
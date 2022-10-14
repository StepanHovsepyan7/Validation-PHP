

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
    $name = $_POST['name'];
    $email  = $_POST['email'];
    $desc = $_POST['desc'];
    $image = $_FILES['image']['name'];

    $result = mysqli_query($conn, "INSERT INTO `info` (`id`, `name`, `email`, `desc`, `image`) VALUES (NULL, '$name', '$email', '$desc', '$image')");


    if($result){
        move_uploaded_file($_FILES['image']['tmp_name'],"$image");
        header("Location: welcome.php");
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

        $alreadyUpdatedName = mysqli_real_escape_string($conn, $_POST["name"]);
        $alreadyUpdatedEmail = mysqli_real_escape_string($conn, $_POST["email"]);
        $alreadyUpdatedDesc = mysqli_real_escape_string($conn, $_POST["desc"]);
        $alreadyUpdatedImage = mysqli_real_escape_string($conn, $_FILES["image"]["name"]);

        $result = mysqli_query($conn, "UPDATE `info` SET `name` = '$alreadyUpdatedName', `email` = '$alreadyUpdatedEmail', `desc` = '$alreadyUpdatedDesc', `image` = '$alreadyUpdatedImage' WHERE `info`.`id` = $id");

        if($result) {
            move_uploaded_file($_FILES['image']['tmp_name'],"$alreadyUpdatedImage");
            header("Location: welcome.php");
        }
        
    }
}


$result = mysqli_query($conn, "SELECT * FROM `info`");

?>
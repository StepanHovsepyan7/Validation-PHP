<?php

include 'config.php';

// session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users1 WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);

	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Email or Password is Wrong.')</script>";
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styleIndex.css">
  <link rel="stylesheet" href="css/media.css">
  <title>Login</title>
</head>
<body>
<div class="parent">
        <div class="parent2">
            <form action="" method="post" >
                <h1>Login</h1>
                <br>
                <input class="inp1" placeholder="Email" name="email"  type="email" value="<?php echo $email?>">
                <br><br>
                <br>
                <input class="inp1" type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                <br><br>
                <br>
                <input value="Submit" class="sub" name="submit"  type="submit">
                <br><br>
                <div class="accDiv">
                    <span class="acospan">Dont Have an Acount ? </span>
                    <a href="registration.php"><span class="log">Sign Up</span></a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>



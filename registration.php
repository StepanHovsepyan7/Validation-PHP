<!-- sxalneer

logini ejum
-----
if (isset($_SESSION['password'])) {
    header("Location: index.php");
}
 petq e liner 

 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

$number = $_POST['telephone']; --- sa petq e lini telephone formayi name@ grac er number $number = $_POST['number'];
INSERT INTO users1 (username, email, password, telephone)

-->

<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
  	$number = $_POST['telephone'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users1 WHERE email='$email'";
		$result = mysqli_query($conn, $sql);


		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users1 (username, email, password, telephone)
					VALUES ('$username', '$email', '$password', $number )";
			$result = mysqli_query($conn, $sql);

			if ($result) {
				echo "<script>alert('User Registration Completed.')</script>";
				$username = "";
				$email = "";
        $number = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/media.css">

  <title>Validation</title>
</head>
<body>
  <div class="container">
  <div class="parent">
    <div class="parent2">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 3rem; color: white; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" class="inp1" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email"  class="inp1" value="<?php echo $email; ?>" required>
			</div>
      <div class="input-group">
				<input type="number" placeholder="Number" name="telephone"  class="inp1" class="inp1 inpNumC" value="<?php echo $number; ?>" required>
			</div>

			<div class="input-group">
				<input type="password" placeholder="Password" name="password"  class="inp1"  value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword"  class="inp1" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
      <input value="Submit" class="sub sub2" name="submit"  type="submit">
          <br><br>
            <div class="accDiv">
                <span class="acospan">Do yuo Have an Acount ? </span>
                  <a href="index.php"><span class="log">Sign In</span></a>
            </div>
		</form>
    </div>
	</div>
  </div>

</body>
</html>
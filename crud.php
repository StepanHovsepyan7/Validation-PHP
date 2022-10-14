<?php include 'config.php';

error_reporting(0);

if(isset($_GET['del'])){
    $id = $_GET['del'];
    $edit_state = true;

    $result = mysqli_query($conn, "DELETE FROM `info` WHERE `info` . `id`='$id'");

    if($result) {
        header("Location: welcome.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  
    <div class="bigContainer">
    <div class="container contBigDiv  row1 ">
        <div class="row row1 justify-content-center text-center">
          <a href="welcome.php">
          <button class="btn   btn-outline-dark mb-5 btnnn text-white">
                Go to welcome page
            </button>
          </a>
        </div>
        <div class="row row1">
            <div class="col-md-8 ">
                <form class=" row g-3 formBig" action="" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="id" class="form-control inputs" >

                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control inputs" value="<?php echo $updatedName;?>" >
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" value="<?php echo $updatedEmail ?>" class="form-control inputs">
                </div>
 
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Info</label>
                    <input type="text"  name="desc" value="<?php echo $updatedDesc ?>" class="form-control inputs"  placeholder="Game Info">
                </div>

                <div class="col-12">
                    <label for="inputAddress" class="form-label">Image</label>
                    <input type="file" name="image" value="<?php echo $updatedImage ?>"  name="desc" class="form-control inputs" placeholder="1234 Main St" accept = ".jpg,.jpeg,.png">
                </div>

                <div class="col-12">
                    <?php if($edit_state == false){ ?>
                           <button type="submit" name="save" class="btn  btn-dark mb-2">save</button>
                           <?php } else { ?>
                           <button type="submit" name="update" class="btn  btn-dark mb-2">update</button>
                      <?php }?>
                </div>
            </form>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
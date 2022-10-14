<?php

require("config.php");

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/bg.css">
    <title>Welcome</title>
</head>
<body>

 <div style="text-align: center; color:white;">
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
 </div>



   <header>
    <section>
    <div class="bigheader">
        <div class="divLogo">
            <img class="logo" src="img/logo.png" alt="">
            <button class="buynow">BUY NOW</button>
        </div>
            <div class="headerContent" data-aos="fade-up">
                <h1>Geco - eSports Gaming <br>
                HTML5 Template</h1>
                <p>Geco is a gaming, news and entertainment content. Its clean, modern & powerful,<br>
                contrast design is perfect for your gaming site</p>
            </div>
        </div>
        <div class="bluediv">
        <div class="bigheader2">
            <h1>Stunning Home Style</h1>
            <br>
            <p>Choose a homepage to start navigating Geco. Build strong & impressive <br> websites using Geco premade templates.</p>
        </div>
        
        </div>
    </section>
   </header>  

     <!-- Stunning All Page -->


   <main>
    <section>
        <div class="gamesParent" data-aos="fade-down-right">
            <div class="game1">
                <img src="img/game1.jpg" alt="">
                <img src="img/game2.jpg" alt="">
                <img src="img/game3.jpg" alt="">
            </div>
        </div>
        <div class="gamesParent2" >
            <div class="game1">
                <img class = "imii" src="img/game4.jpg" >
                <img class = "imii" src="img/game5.jpg" >
            </div>
            <form action="crud.php">
                <input value="CREATE" class = "submit2" type="submit">  
            </form>
        <?php while($row = mysqli_fetch_array($result)){ ?>

            <div class="classGameParent" >
                <div class="classGameParentDIV">
                    <img src="<?php echo $row['image'] ?>" alt="">
                    <br><br>
                <div>
                <a href="crud.php?del=<?php echo $row['id'];?>">
                    <i class="fa-solid fa-trash-can"></i>
                </a>
                <a href="crud.php?edit=<?php echo $row['id'];?>"> 
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                </div>
                    <br>
                    <span><?php echo $row['name']?></span>
                    <br><br>
                    <span><?php echo $row['email']?></span>
                    <br>
                    <br>
                    <span><?php echo $row['desc']?></span>
                </div>
            </div>
            
            <?php }?>    
            <div class="bluediv2">
            <div class="bigheader2"  >
                <h1>Stunning All Page</h1>
                <p>Choose a homepage to start navigating Geco. Build strong & impressive <br> websites using Geco premade templates.</p>
            </div>
        </div>
    </section>

   
     <!-- Stunning All Page -->

    <section>
       <div class="demo-area pt-90 pb-40 mt-5">
       <div class="container-fluid" data-aos="fade-down-right">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 text-center">
                    <img class="imigg" src="img/a1.jpg" alt="">
                    <a href="">About Us</a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 text-center">
                    <img class="imigg" src="img/a2.jpg" alt="">
                    <a href="">Upcoming Games</a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 text-center">
                    <img class="imigg" src="img/a3.jpg" alt="">
                    <a href="">Game Overview</a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 text-center">
                    <img class="imigg" src="img/a4.jpg" alt="">
                    <a href="">Our Community</a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 text-center">
                    <img class="imigg" src="img/a5.jpg" alt="">
                    <a href="">Game Shop</a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 text-center">
                    <img class="imigg" src="img/a6.jpg" alt="">
                    <a href="">News Media</a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 text-center">
                    <img class="imigg" src="img/a7.jpg" alt="">
                    <a href="">Blog Single</a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 text-center">
                    <img class="imigg" src="img/a8.jpg" alt="">
                    <a href="">Contact Page</a>
                </div>
            </div>
        </div>
       </div>   
    </section>


        <div class="bluediv3">
            <div class="bluedivFlex">
                <img src="img/icon.png" alt="">
                <h1 >Quick & Fast Support</h1>
                <p>Need technical help? Do not hesitate to send us a message via our</p>
            </div>
            <div class="bluedivFlex2">
                <a class="supA" href="welcome.php">
                    <span class="supA">support forum.</span>
                    <span>We're happy to help.</span>
                </a>
            </div>
            <div class="bluedivFlex3">
                    <button class="buynow2">SEE ALL</button>
            </div>
        </div>


        <!-- Feeling in love? Purchase Geco !-->
        
        <div class="bg2">
        <div class="content">
            <h1>Feeling in love? Purchase Geco !</h1>
            <p>Impressive design, powerful features, and easy customization</p>
            <button>PURCHASE NOW</button>
        </div>
        <div style="text-align: center;">
          <img class="demo" src="img/demo.png" alt="">
        </div>
        </div>

   </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/aos.js"></script>
    <script>
      AOS.init({
        duration: 2000,
        once: true,
      });
    </script>
</body>
</html>
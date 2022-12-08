<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/welcome.css">
    <link rel="stylesheet" href="css/profile.css">
    <title>Profile</title>

</head>
<body>
    <div class="top-container">
        <header class="header">
            <ul>
                <span class="span-1">
                    <h1>Amigo</h1>
                </span>

                <li class="nav-item active title-1">
                    <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                

                <li class="nav-item active">
                    <a class="nav-link" href="profile.php"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png">
                        <?php echo " ". $_SESSION['username']?></a>
                </li>


            </ul>
        </header>
    </div>
    <div class="profile-main">
        <header>

            <div class="container">

                <div class="profile">

                    <div class="profile-image">

                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets1.lottiefiles.com/packages/lf20_cctd16u8.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;" hover loop  autoplay></lottie-player>

                    </div>

                    <div class="profile-user-settings">

                        <h1 class="profile-user-name"><?php echo " ". $_SESSION['username']?></h1>

                        <button class="btn profile-edit-btn"><a href="editprofile.php">Edit Profile</a></button>

                        <button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog"
                                aria-hidden="true"></i></button>

                    </div>

                    <div class="profile-stats">

                        <ul>
                            <li><span class="profile-stat-count">164</span> posts</li>
                            <li><span class="profile-stat-count">188</span> followers</li>
                            <li><span class="profile-stat-count">206</span> following</li>
                        </ul>

                    </div>

                    <div class="profile-bio">

                        <p><span class="profile-real-name"><?php echo " ". $_SESSION['username']?></span> Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit 📷✈️🏕️</p>

                    </div>

                </div>
                <!-- End of profile section -->

            </div>
            <!-- End of container -->

        </header>

        
    </div>

</body>
</html>
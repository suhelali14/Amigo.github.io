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
    <link rel="stylesheet" href="css/plumbing.css">
    <link rel="stylesheet" href="css/services.css">
    <title>plumbing</title>
</head>

<body>

    <div>
        <input type="checkbox" name="" id="check">
        <label for="check" id="btn_b"><svg xmlns="http://www.w3.org/2000/svg" class="menu" width="30" height="30"
                style="fill: rgba(255, 255, 255, 1);transform: rotate(180deg);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);">
                <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
            </svg></label>
        <div class="mainmenu">
            <header class="header">
                <a href="#"><img class="logo" src="images/logo.png" alt="logo"></a>
                <br>
                <h1>Amigoo</h1>
            </header>
            <nav class="navbar">
                <ul>
                    <div id="iconul1">
                        <li><a id="navname1" href="welcome.php">Home</a>
                            <lord-icon id="iconnav1" src="https://cdn.lordicon.com/etqbfrgp.json" trigger="hover"
                                colors="outline:#131432,primary:#92140c,secondary:#f24c00,tertiary:#b26836,quaternary:#ebe6ef"
                                style="width:32px;height:32px">
                            </lord-icon>
                        </li>
                    </div>
                    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                    <div id="iconul2">
                        <li><a id="navname" href="welcome.php">Services</a>
                            <lord-icon id="iconnav2" src="https://cdn.lordicon.com/tsnvgrkp.json" trigger="hover"
                                colors="primary:#4be1ec,secondary:#cb5eee" style="width:35px;height:35px">
                            </lord-icon>
                        </li>
                    </div>
                    <div id="iconul3">
                        <li><a id="navname" href="index.html#contactus">Contact us</a>
                            <lord-icon id="iconnav3" src="https://cdn.lordicon.com/gzmgulpl.json" trigger="hover"
                                colors="outline:#121331,primary:#4bb3fd,secondary:#ebe6ef"
                                style="width:35px;height:35px">
                            </lord-icon>
                        </li>
                    </div>
                    <div id="iconul4">
                        <li><a id="navname" href="logout.php">Log out</a>
                            <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                            <lord-icon id="iconnav4" src="https://cdn.lordicon.com/yhtqafjk.json" trigger="hover"
                                style="width:35px;height:35px">
                            </lord-icon>
                        </li>
                    </div>
                    <div class="icon-name">
                        <li class="nav-item active">
                            <a class="nav-link" href="profile.php"> <img
                                    src="https://img.icons8.com/metro/26/000000/guest-male.png">
                                <?php echo " ". $_SESSION['username']?></a>
                        </li>
                    </div>
        </div>
        </ul>
        </nav>
    </div>
    <header class="header1">
        <h1>Amigoo</h1>
    </header>

    </div>
    <hr style="border-style: none; border-top-style:dotted ; width: 30%; border-color: gray; border-width: 2.5px;">
    <br>


    <div class="services-a">
        <div class="card-container" style="justify-content: space-between;">
            <span class="pro">PRO</span>
            <img class="round" src="https://terryrossplumbing.com/wp-content/uploads/Plumber-300x300.png" alt="user" />
            <h3>Niranjan</h3>
            <h6>Old Sanghvi</h6>
            <p>professional Engineer<br /> having good skills</p>
            <div class="buttons">
                <button class="primary">
                     <a href="https://wa.me/7558436263?text=Book%20Service!">Message</a>
                </button>
                <button class="primary ghost">
                    Call
                </button>
            </div>
            <div class="skills">
                <h6>About</h6>
                <ul>
                    <li>Having Experience of 7 years</li>

                </ul>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="card-container">
            <span class="pro">PRO</span>
            <img class="round" src="https://terryrossplumbing.com/wp-content/uploads/Plumber-300x300.png" alt="user" />
            <h3>Rohan T</h3>
            <h6>Dighi</h6>
            <p>professional Engineer<br /> having good skills</p>
            <div class="buttons">
                <button class="primary">
                    <a href="https://wa.me/9307177952?text=Book%20Service!">Message</a>
                </button>
                <button class="primary ghost">
                    Call
                </button>
            </div>
            <div class="skills">
                <h6>About</h6>
                <ul>
                    <li>Having Experience of 4 years</li>

                </ul>
            </div>
        </div>
        <br>

</body>

</html>
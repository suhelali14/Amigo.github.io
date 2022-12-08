
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
    <title>About</title>
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/keyindex.css">
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
                        <li><a id="navname" href="#service">Services</a>
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
                        <lord-icon
                            id="iconnav4"
                            src="https://cdn.lordicon.com/yhtqafjk.json"
                            trigger="hover"
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
    <br>
    <br>
    <div class="container1">
        <div class="subcont1">
            <div class="card" id="plumbing">
                <div class="imgbx">
                    <img src="https://cdn.dribbble.com/users/902228/screenshots/14255501/media/a495c8b61891dacfe1d896ca9ad2879b.jpg"
                        alt="">
                </div>
                <div class="content" name="service">
                    <div class="details">
                        <h2>Plumbing Services</h2>
                        <br>
                        <span>You can contact service provider</span>
                        <div class="data">
                            <h4>Plumbing Services</h4><span>You can touch with them</span>
                            <h4>Add Service Provider</h4><br>
                        </div>
                        <div class="actionbar">
                            <button ><a href="plumbing.php" style="text-decoration:none;">Contact</a></button>
                            <button>Add +</button>


                        </div>

                    </div>
                </div>


            </div>
        </div>
        <br>
        <br>
        <div class="subcont2">
            <div class="card">
                <div class="imgbx">
                    <img src="https://cdn.dribbble.com/users/902228/screenshots/14248527/media/06d91f4fdba2847c7c091de94a0a3e86.jpg"
                        alt="">
                </div>
                <div class="content">
                    <div class="details">
                        <h2>Carpenter Services</h2>
                        <br>
                        <span>You can contact service provider</span>
                        <div class="data">
                            <h4>Carpentery Services</h4><span>You can touch with them</span>
                            <h4>Add Service Provider</h4><br>
                        </div>
                        <div class="actionbar">
                            <button><a href="Carpenter.php">Contact</a> </button>
                            <button>Add +</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
    <br>
    <br>
    <br>
    <div class="container1">
        <div class="subcont1">
            <div class="card">
                <div class="imgbx">
                    <img src="https://cdn.dribbble.com/users/902228/screenshots/14269237/media/615761b71e1e81b40ad6fd93cbc8a248.jpg"
                        alt="">
                </div>
                <div class="content" id="electronic">
                    <div class="details">
                        <h2>Electronic Services</h2>
                        <br>
                        <span>You can contact service provider</span>
                        <div class="data">
                            <h4>Electronic Services</h4><span>You can touch with them</span>
                            <h4>Add Service Provider</h4><br>
                        </div>
                        <div class="actionbar">
                            <button><a href="Electronic.php">Contact</a> </button>
                            <button>Add +</button>

                        </div>

                    </div>
                </div>


            </div>
        </div>
        <br>
        <br>
        <div class="subcont2">
            <div class="card" id="electric">
                <div class="imgbx">
                    <img src="https://cdn.dribbble.com/users/2348943/screenshots/16213382/media/9e46012e22b4c3ce05085c77f00b3ef2.jpg"
                        alt="">
                </div>
                <div class="content">
                    <div class="details">
                        <h2>Electrical Services</h2>
                        <br>
                        <span>You can contact service provider</span>
                        <div class="data">
                            <h4>Electrical Services</h4><span>You can touch with them</span>
                            <h4>Add Service Provider</h4><br>
                        </div>
                        <div class="actionbar">
                            <button><a href="Electrical.php">Contact</a> </button>
                            <button>Add +</button>


                        </div>

                    </div>
                </div>

            </div>
        </div>
        <br>
        <br>
        <br>
    </div>
    <div class="container2">
        <div class="subcont3">
            <div class="card" id="Digital">
                <div class="imgbx">
                    <img src="images/contact_us.gif" alt="">
                </div>
                <div class="content">
                    <div class="details">
                        <h2>Digital Services</h2>
                        <br>
                        <span>You can contact service provider</span>
                        <div class="data">
                            <h4>Digital Services</h4><span>You can touch with them</span>
                            <h4>Add Service Provider</h4><br>
                        </div>
                        <div class="actionbar">
                            <button><a href="Digital.php">Contact</a></button>
                            <button>Add +</button>

                        </div>

                    </div>
                </div>


            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

        </div>
    </div>


</body>

</html>
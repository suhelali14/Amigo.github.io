<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/float.css">
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
                    <li><a id="navname" href="index.html">Home</a></li>
                    
                    <li><a id="navname" href="about.html">About us</a></li>
                    <li><a id="navname" href="">login/register</a></li>
                    <li><a id="navname" href="#contactus">Contact us</a></li>
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
    <div>

            <br>
            <div class="subcont1" id="subcont1">
                <form action="" class="form1" id="Formh" method="POST">
                    <input type="text" placeholder="Enter your name" required name="username">
                    <br>
                    <br>
                    <input type="email" placeholder="Enter your email" required>
                    <br>
                    <br>
                    <input type="password" placeholder="Enter password" required name="password">
                    <br>
                    <br>
                    <input type="password" placeholder="Confirm password" required name="confirm_password">
                    <br>
                    <br>
                    <input type="submit" value="Register" id="btnr">
                    <br>
                    <span>Already have account ? <a href="login.php" id="Login">Login</a></span>
                </form>
            </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div>

        <div>
            <footer>
                <div style="background-color: black ;" class="divmain" name="footer" id="footer">
                    <hr
                        style="border-style: none; border-top-style:solid ; width: 100%; border-color: rgb(230, 230, 230); border-width: 0.6px; opacity: 40%;">

                    <div class="servicecont">

                        <label for="">Types Of Services</label>
                        <hr
                            style="border-style: none; border-top-style:solid ; width: 95%; border-color: rgb(195, 195, 195); border-width: 1.5px; opacity: 60%;">
                        <p>
                        <ul id="servicetypes">
                            <li><a style="text-decoration:none;" href="">Electrical Services</a></li>
                            <li><a style="text-decoration:none;" href="">Plumbing Services</a></li>
                            <li><a style="text-decoration:none;" href="">Home cleaning Services</a></li>
                            <li><a style="text-decoration:none;" href="">Digital Services</a></li>
                            <li><a style="text-decoration:none;" href="">etc.</a></li>
                        </ul>
                        </p>
                    </div>
                    <hr
                        style="border-style: none; border-top-style:dotted ; width: 30%; border-color: rgb(195, 195, 195); border-width: 2.5px;">
                    <div class="container3">
                        <ul id="lastrow">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Terms and conditions</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Quick Links</a></li>
                        </ul>
                    </div>
                    <br>
                    <br>
                    <hr
                        style="border-style: none; border-top-style:solid ; width: 95%; border-color: rgb(196, 196, 196); border-width: 1.5px; opacity: 60%;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="lastcopy">
                        <span id="copyright">© 2022 Amigoo. all rights are reserved.</span>
                        <span class="social-media">
                            <div>
                                <ul>
                                    <li><a href="#"><img src="images/facebook.png"></a></li>
                                    <li><a href="#"><img src="images/twitter.png"></a></li>
                                    <li><a href="#"><img src="images/linkedin.png"></a></li>
                                    <li><a href="#"><img src="images/instagram.png"></a></li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="floating-container">
        <div class="floating-button">+</div>
        <div class="element-container">

            <span class="float-element">
                <span id="changecolor">
                    <lord-icon src="https://cdn.lordicon.com/jbbomxhd.json" trigger="hover"
                        colors="primary:#ffc738,secondary:#ebe6ef,tertiary:#66a1ee" style="width:75px;height:75px">
                    </lord-icon>
                </span>
            </span>
            <span class="float-element">
                <span id="resetchange">
                    <lord-icon src="https://cdn.lordicon.com/dkowjmhq.json" trigger="hover"
                        colors="primary:#ebe6ef,secondary:#ffc738,tertiary:#242424" style="width:75px;height:75px">
                    </lord-icon>
                </span>
            </span>
        </div>
    </div>


    
    <script src="javascript/Theme.js"></script>
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
    <script src="register.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</body>

</html>
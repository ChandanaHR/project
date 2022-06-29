<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: signin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ctoonify</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-video"></span><span>Ctoonify</span></h2>
            <!-- <h2><span><img src="./img/logoicon.png"/></span><span>Ctoonify</span></h2> -->

        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php" class="active"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="project.php"><span class="las la-list"></span>
                        <span>Projects</span></a>
                </li>
                <li>
                    <a href="profile.php"><span class="las la-user"></span>
                        <span>Profile</span></a>
                </li>
                <li>
                    <a href="index.php"><span class="las la-sign-out-alt"></span>
                        <span>Logout</span></a>
                </li>
            </ul>
    
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>

            <!-- <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here"/>
            </div> -->

            <div class="user-wrapper">
                <img src="assets/user.png" width="30px" height="30px" alt="">
                <div>
                    <h4>
                        User
                    </h4>
                    <small>Admin</small>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
              



                <div class="card-single">
                    <div>
                        <h1>12</h1>
                        <span>Live Video Projects</span>
                    </div>

                    <div>
                        <span class="las la-users"></span>
                    </div>
                   
                </div>


            </div>
        </main>
    </div>
    
   
</body>
</html>
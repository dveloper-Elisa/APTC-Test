<?php

session_start();
if(!isset($_SESSION['email'])){
    header("./login.php");
}

include_once "./connection/bd_connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./styles/attandance-style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="subcontainer">
            <div class="header">
                <h3 id="heading"h>
                    Smart attandance system
                </h3>

                <div id="naviContainer">
                    <nav id="header">
                        <ol>
                            <li id="sync">
                                <a href="#" style="color: rgb(163, 73, 248); font-weight: 900;">Sync Done</a>
                            </li>
                            <li id="navigate">
                                <a href="#"><i class="fas fa-home"></i> Home</a>
                            </li>
                            <li id="navigate" class="newstaff">
                                <a href="#"><i class="fas fa-pen"></i> Staffs <i class="fas fa-caret-down"></i></a>
                                <!-- Dropdown -->
                                <ul id="hover-menu">
                                    <li><a href="./signup.php">Register Staff</a></li>
                                </ul>
                            </li>
                            <li id="navigate">
                                <a href="#"><i class="fas fa-print"></i> Reports <i class="fas fa-caret-down"></i></a>
                            </li>
                            <li id="navigate" class="drop2">
                                <a href="#"><i class="fas fa-check"></i> Config <i class="fas fa-caret-down"></i></a>
                            </li>
                            <!-- Dropdown2 -->
                            <ul id="hover-menu2">
                                    <li><a href="./logout.php"> <i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                </ul>
                        </ol>
                    </nav>
                    

                    <div class="search">
                        <input type="text" name="search" id="search" placeholder="Track staff attandance Enter Staff name">
                        <button id="btn"> <i class="fas fa-search"></i> Track</button>
                        
                    </div>
                </div>

                <div class="container-body">
                
                    <h3 class="title">Today's attandance statistics</h3>

                <div id="sataff-body">    
                    <div id="staffs" class="rectangle">
                        <p> <span>&#8721;</span> Staffs</p>

                        <p id="number">
                        <?php
                        $sql = "SELECT COUNT(*) AS StaffMember FROM users";
                        $result = mysqli_query($connection, $sql);
                        if($result){
                            $row = mysqli_fetch_assoc($result);
                            echo $row['StaffMember'];
                        }else{

                        }
                        ?>
                        </p>
                    </div>
                    <div id="presant" class="rectangle">
                        <p> <span>&#8721;</span></i> Present</p>
                        <p id="number">No h</p>
                    </div>
                    <div id="absent" class="rectangle">
                        <p> <span>&#8721;</span> Absent</p>
                        <p id="number">No h</p>
                    </div>
                    <div id="late" class="rectangle">
                        <p> <span>&#8721;</span> Late comers</p>
                        <p id="number">No h</p>
                    </div>
                    

                </div>

                </div>

            </div>
            </div>
        </div>
    </div> 
</body>
</html>
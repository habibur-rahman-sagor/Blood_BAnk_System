<!-- Navigation -->
<?php 
session_start();
include('database/blood_bank.php'); ?>


<nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top navbar-default">
    <div class="container">
        <a class="navbar-brand" href="index.php"><i class="fa fa-heartbeat fa-lg"></i> Blood Bank</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                <i class="fas fa-hand-holding-medical"><a class="nav-link" href="donor-dashboard.php">
                    <?php
                   if(isset($_SESSION['Email']))
                   {
                        echo "donate";
                        echo "  <a href='donar-dashboard.php'>"; 
                        echo "  </a>";
                   }
                   else 
                   {
                    echo "donate";
                    echo "  <a href='sign-in.php'>"; 
                    echo "  </a>";
                   }
                   ?>
                </a></i> 


                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="donors-search.php"><i class="fa fa-users"></i> Donors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php"><i class="fas fa-info-circle"></i> About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"><i class="fas fa-info-circle"></i> Contact Us</a>
                </li>
                <li class="nav-item">
                <?php  
                              
                              if(isset($_SESSION['Email']))
                              {
                                echo "<a class='nav-link scrollto' href='logout.php'>Sign Out</a>";
                              }
                              else
                              {
                                echo  "<a class='nav-link scrollto'  href='sign-in.php'>Sign In</a>";
                              }
                            ?>
                </li>
            </ul>
        </div>
    </div>
</nav>


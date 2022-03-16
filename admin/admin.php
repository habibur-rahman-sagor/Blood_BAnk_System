<!DOCTYPE html>

<html lang="en">

<head>

	<?php 
    
        //include("admin-header.php");
        include("../database/blood_bank.php");
    
    ?>

</head>

<body>

    
<style>


.page-header{
    padding: 100px 0px 0px 0px;
    color: #ff0006;
}

.signin-form{
    
    padding: 50px 0;
}

.btn-default{
    color: white;
    border-radius: 25px;
    padding: 10px 30px;
    font-size: 22px;
    font-weight: 700;
    background-color: #ff0006;
    text-align: center;
  }
    





</style>
    
    <div class="container" >
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="page-header text-primary" style="color: #ff0006;"><i class='fa fa-user-md'></i> Admin Login</h2>
            </div>

            
            </div>

        </div>
    </div>

    <div class="container" style="margin-left: 100px;">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signin-form">
                    <form action="" method="post">
			    	  	<div class="form-group">
							<label for="user_name" class="text-primary">User Name</label>
			    		    <input class="form-control" name="username"  id="user" type="text" required>
			    		</div>
			    		<div class="form-group">
							<label for="pass" class="text-primary" style="color: #ff0006">Password</label>
			    			<input class="form-control" id="pass" name="password" type="password" value="" required>
			    		</div>
						
						<div class="form-group text-center">
			    		    <button class="btn btn-lg btn-default" name="submit" type="submit"><i class="fa fa-sign-in"></i> Login Here</button>
			      	
                        </div>
                    </form>
                    <?php 

                        //CHeck whether the Submit Button is Clicked or NOt
                        if(isset($_POST['submit']))
                        {
                            //Process for Login
                            //1. Get the Data from Login form
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            //$username = mysqli_real_escape_string($conn, $_POST['username']);
                            
                            //$raw_password = ($_POST['password']);
                            //$password = mysqli_real_escape_string($conn, $raw_password);

                            //2. SQL to check whether the user with username and password exists or not
                            $sql = "SELECT * FROM admin_login WHERE username='$username' AND password='$password'";

                            //3. Execute the Query
                            $res = mysqli_query($con, $sql);

                            //4. Count rows to check whether the user exists or not
                            $count = mysqli_num_rows($res);

                            if($count==1)
                            {
                                
                                //User Available and Login Success
                                $row=mysqli_fetch_assoc($res);
                                //$role = $rows['role'];
                                $_SESSION['login'] = "Login Successful.";
                                $_SESSION['username'] = $username; //TO check whether the user is logged in or not and logout will unset it
                                echo"<script> window.open('admin-dashboard.php','_self')</script>";
                                
                            }
                            else
                            {
                                //User not Available and Login FAil
                                $_SESSION['login'] = "Username or Password did not match.";
                                //Redirect to HOme Page/Dashboard
                                echo"<script> window.open('admin.php','_self')</script>";
                            }


                        }

                    ?>
                </div>

            </div>
        </div>
    </div>
    
  



  
    <?php 
  //include admin footer file

    //include ('admin-footer.php');

    ?>
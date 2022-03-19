
  <?php 
  //include header file
  include ('includes/header.php');
  include ('database/blood_bank.php');
  ?>
<style>

    .sign-in{
  		color: #f1061a;
  		text-align: center;
 		margin-top: 125px;
 		text-decoration: underline;
  		text-underline-position: under;
      
    }

    .signin-form{
        padding: 30px 30px;
        margin: 30px 0px;
        background-color: #151515;
        border-radius: 10px;
    }
    

  .btn-default{
    color: white;
    border-radius: 25px;
    padding: 10px 30px;
    margin: 10px 0px;
    font-size: 22px;
    font-weight: 700;
    background-color: #ff0006;
  }
    

</style>
      

    <div class="container-fluid">
	    <div class="row">
		    <div class="col-md-6 offset-md-3">
			    <div class="sign-in">
				    <h1 class="text-center">Sign In</h1>
			    </div>
			
		    </div>
	    </div>
    </div>


    <div class="container size">
	    <div class="row">
		    <div class="col-md-6 offset-md-3">
		
		        <!-- Erorr Messages -->
                <div class="signin-form">
                    <form action="" method="post">

                      <h4 class="text-center" style="padding-bottom: 20px; color: #ff0006">Enter Login Details</h4>
      
                          <div class="form-group" style="color: #ff0006;">
                              <label class="control-label" for="Email" >Email</label>
                              <input type="email" class="form-control" name="Email" placeholder="Email" required="required">
                          </div>

                          <div class="form-group" style="color: #ff0006;">
                              <label class="control-label" for="Password" >Password</label>
                              <input type="Password" class="form-control" name="Password" placeholder="Password" required="required">
                          </div>

                      <div class="form-group text-center">
                              <button type="submit" name="submit" class="btn btn-lg btn-default">Login</button>
                          </div>

                          <div class="text-center" style="color: #ff0006">
                              Don't have an account? <a href="donate.php">Register Here</a>
                          </div>

                    </form>

                </div>

		    </div>
	    </div>
    </div>
    <?php 

    //CHeck whether the Submit Button is Clicked or NOt
    if(isset($_POST['submit']))
    {
        //Process for Login
        //1. Get the Data from Login form
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        //$username = mysqli_real_escape_string($conn, $_POST['username']);
        
        //$raw_password = ($_POST['password']);
        //$password = mysqli_real_escape_string($conn, $raw_password);

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM donate WHERE Email='$Email' AND Password='$Password'";

        //3. Execute the Query
        $res = mysqli_query($con, $sql);

        //4. Count rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            //User Available and Login Success
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['Email'] = $Email; //TO check whether the user is logged in or not and logout will unset it

            //Redirect to HOme Page/Dashboard
            echo "<script>alert('Logged In.')</script>";
            echo"<script> window.open('donor-dashboard.php','_self')</script>";
        }
        else
        {
            //User not Available and Login FAil
            $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
            //Redirect to HOme Page/Dashboard
            echo "<script>alert(' Not Registered.')</script>";
            echo"<script> window.open('sign-in.php','_self')</script>";
        }


    }

?>


  <?php 
  //include footer file
  include ('includes/footer.php');
  ?>

</body>
</html>
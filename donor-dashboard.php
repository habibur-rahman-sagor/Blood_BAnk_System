<?php 
  //include header file
  include ('includes/header.php');
  include ('database/blood_bank.php');
  ?>
<?php 
    
    if(!isset($_SESSION['Email'])) //IF user session is not set
    {
        //User is not logged in
        //Redirect to login page with message
        $_SESSION['message'] = "Please login ";
        //Redirect to Login Page
        echo"<script> window.open('sign-in.php','_self')</script>";
    }
?>



  <style>
      

    .page-header{
    padding: 30px 0px 10px 0px;
    color: #ff0006;
}

  .donor-dashboard{
    margin-top: 20px;
    padding: 50px 70px;
    background-color: #151515;
    color: white;
}


  </style>



<div class="container"  style='margin-top: 62px;'>
	<div class="row">
		<div>
            <?php include('donor-dashboard-sidenav.php'); ?>
		</div>

    </div>

</div>


<div class="container" >
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="page-header" ><i class='fa fa-dashboard'></i> Donor Dashboard</h2>
            </div>

            
            

        </div>
    </div>



        
<div class="container" >
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="donor-dashboard">
                <h1>Welcome Donor</h1>
    
            </div>

        </div>

    </div>

</div>

    

  







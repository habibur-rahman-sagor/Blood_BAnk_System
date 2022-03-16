
<?php 
  //include header file
  include ('includes/header.php');
  include ('database/blood_bank.php');
  ?>






<style>
      

    .page-header{
    padding: 30px 0px 10px 0px;
    color: #ff0006;
}

  .donor-update{
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
                <h2 class="page-header" ><i class='fa fa-dashboard'></i> Donor Profile</h2>
            </div>

            
            

        </div>
</div>



        
    <div class="container" style="padding: 60px 20px; margin-right:10px;">
			<div class="row">
                
				    <div class=" card col-md-6 offset-md-3">
                        <div class="donor-update">
					        <div class="panel panel-default" style="padding: 20px;">
					
					            <!-- Error Messages -->	<?php
                                            if(isset($_SESSION['Email']))
                                            {
                                                $Email=$_SESSION['Email'];
                                                $sql="select * from donate where Email='$Email'";
                                                $run=mysqli_query($con,$sql);
                            
                                                while($row=mysqli_fetch_array($run))
                                                {
                                                    
                                                    $First_Name=$row['First_Name'];
													$Last_Name=$row['Last_Name'];
                                                    $Gender=$row['Gender'];
                                                    $Blood_Group=$row['Blood_Group'];
													$Division=$row['Division'];
                                                    $City=$row['City'];
                                                    
													$Contact=$row['Contact'];
													$Email=$row['Email'];
                                                
                                                ?>


						        <form action="" method="post" class="form-group form-container" >
							        <div class="form-group">
								        <label for="First_Name" >First Name</label>
								        <input type="text" required name="First_Name" class="form-control" value="<?php echo  $First_Name; ?>">
							        </div>

                                    <div class="form-group">
								        <label for="Last_Name" >Last Name</label>
								        <input type="text" required name="Last_Name" class="form-control" value="<?php echo  $Last_Name; ?>">
							        </div>



                                    <div class="form-group">
				                        <label for="Gender">Gender</label><br>
                                        <input type="text" required name="Gender" class="form-control" value="<?php echo  $Gender; ?>">
				    		        </div><!--gender-->


                                    <div class="form-group">
								        <label for="DOB">Date of Birth</label>
								        <input type="text" required name="DOB" class="form-control" value="<?php echo  $First_Name; ?>">
							        </div>

							        <div class="form-group">
					                    <label for="Blood_Group">Blood Group</label><br>
					                    <input type="text" required name="Blood_Group" class="form-control" value="<?php echo  $Blood_Group; ?>">
					                </div><!--End form-group-->

                                    <div class="form-group">
                                        <label for="Country">Country</label>
								        <input type="text" required name="Country" class="form-control" value="<?php echo  $First_Name; ?>">
                                    </div>


                                    <div class="form-group">
                                        <label for="Division">Division</label>
								        <input type="text" required name="Division" class="form-control" value="<?php echo  $Division ?>">
                                    </div>

							        

				    		        
							        <div class="form-group">
                                        <label for="City">City</label>
								        <input type="text" required name="City" class="form-control" value="<?php echo  $City; ?>">
                                    </div><!--city end-->



                

				    		        <div class="form-group">
				                        <label for="Contact">Contact No.</label>
				                        <input type="text" name="Contact" value="<?php echo  $Contact; ?>" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11">
				                    </div><!--End form-group-->


                                    <div class="form-group">
				    		            <label for="Email">Email</label>
				    			        <input type="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="Email" class="form-control" required value="<?php echo  $Email; ?>">
				    		        </div>

                                    <div class="form-group">
								        <label for="Password">Password</label>
								        <input type="text" required name="Password" class="form-control" value="<?php echo  $First_Name; ?>">
							        </div>
							
							    
						        </form>
								<?php
                }
            }
            else{
                echo "No patient";
            }
        ?>
					        </div>
				        </div>

                </div>
        </div>
</div>

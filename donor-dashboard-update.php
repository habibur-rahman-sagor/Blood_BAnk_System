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
    padding: 60px 80px;
    background-color: #151515;
    color: white;
}

.btn-default{
		color: white;
		border-radius: 25px;
		padding: 10px 30px;
		margin-top: 30px;
		font-size: 22px;
		font-weight: 700;
		text-align: center;
		background-color: #ff0006;
	}


  </style>



<div class="container"  style='margin-top: 56px;'>
	<div class="row">
		<div>
            <?php include('donor-dashboard-sidenav.php'); ?>
		</div>

    </div>

</div>


<div class="container" >
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="page-header" ><i class='fa fa-dashboard'></i> Donor Update Information</h2>
            </div>

            
            

        </div>
    </div>



        

            
        <div class="container" style="padding: 60px 0; margin-right:20px;">
			<div class="row">
                
				    <div class=" card col-md-6 offset-md-3">
                        <div class="donor-update">
					        <div class="panel panel-default" style="padding: 20px;">
					
					            <!-- Error Messages -->	


						        <form action="" method="post" class="form-group form-container" >

							        <div class="form-group">
										<label for="First_Name" >First Name</label>
								        <input type="text" required name="First_Name" class="form-control" value="">
							        </div>

									<div class="form-group">
										<label for="Last_Name" >Last Name</label>
								        <input type="text" required name="Last_Name" class="form-control" value="">
							        </div>

									<div class="form-group">
				                        <label for="Gender">Gender</label><br>
				              		    <select name="Gender" id="Gender" class="form-control" required>
				              			    <option value=""></option>
				              			    <option value="Male">Male</option>
				              			    <option value="Female">Female</option>
				              		    </select>
				    		        </div><!--gender-->

									<div class="form-group">
								        <label for="DOB">Date of Birth</label>
								        <input type="text" required name="DOB" class="form-control" value="">
							        </div>

							        <div class="form-group">
					                    <label for="name">Blood Group</label><br>
					                    <select class="form-control" id="blood_group" name="blood_group" required>
					                        <option value=""> </option>
					                        <option value="A+">A+</option>
					                        <option value="A-">A-</option>
					                        <option value="B+">B+</option>
					                        <option value="B-">B-</option>
					                        <option value="O+">O+</option>
					                        <option value="O-">O+</option>
					                        <option value="AB+">AB+</option>
					                        <option value="AB-">AB-</option>
					                    </select>
					                </div><!--End form-group-->

									

									<div class="form-group">
							        	<label for="Country">Country</label>
								        <select name="Country" id="Country" class="form-control" required>
									        <option value=""> </option>
											<option value="Bangladesh" >Bangladesh</option>
								
										</select>

									</div>


									<div class="form-group">
										<label for="Division">Division</label>
										<select name="Division" id="Division" class="form-control">

											<option value=""> </option>
											<option value="Dhaka" >Dhaka</option>
											<option value="Chittagong" >Chittagong</option>
											<option value="Sylhet" >Sylhet</option>
											<option value="Barishal" >Barishal</option>
											<option value="Khulna" >Khulna</option>
											<option value="Rajshahi" >Rajshahi</option>
											<option value="Rangpur" >Rangpur</option>
											<option value="Mymensingh" >Mymensingh</option>
								
										</select>
									</div>



									<div class="form-group">

										<label for="City">City</label>
										<select name="City" id="City" class="form-control" required>
											<option value=""> </option>
											<optgroup title="Dhaka Division" label="&raquo; Dhaka Division"></optgroup>
											<option value="Dhaka" >Dhaka</option>
											<option value="Gazipur" >Gazipur</option>
											<option value="Faridpur" >Faridpur</option>
											<option value="Gopalganj" >Gopalganj</option>
											<option value="Kishoreganj" >Kishoreganj</option>
											<option value="Madaripur" >Madaripur</option>
											<option value="Manikganj" >Manikganj</option>
											<option value="Munshiganj" >Munshiganj</option>
											<option value="Narayanganj" >Narayanganj</option>
											<option value="Narsingdi" >Narsingdi</option>
											<option value="Rajbari" >Rajbari</option>
											<option value="Shariatpur" >Shariatpur</option>
											<option value="Tangail" >Tangail</option>
											<optgroup title="Chittagong Division" label="&raquo; Chittagong Division"></optgroup>
											<option value="Bandarban" >Bandarban</option>
											<option value="Brahmanbaria" >Brahmanbaria</option>
											<option value="Chandpur" >Chandpur</option>
											<option value="Chattogram" >Chattogram</option>
											<option value="Cox’s Bazar" >Cox’s Bazar</option>
											<option value="Cumilla" >Cumilla</option>
											<option value="Feni" >Feni</option>
											<option value="Khagrachhari" >Khagrachhari</option>
											<option value="Lakshmipur" >Lakshmipur</option>
											<option value="Noakhali" >Noakhali</option>
											<option value="Rangamati" >Rangamati</option>
											<optgroup title="Sylhet Division" label="&raquo; Sylhet Division"></optgroup>
											<option value="Habiganj" >Habiganj</option>
											<option value="Moulvibazar" >Moulvibazar</option>
											<option value="Sunamganj" >Sunamganj</option>
											<option value="Sylhet" >Sylhet</option>
											<optgroup title="Barisal Division" label="&raquo; Barisal Division"></optgroup>
											<option value="Barguna" >Barguna</option>
											<option value="Barishal" >Barishal</option>
											<option value="Bhola" >Bhola</option>
											<option value="Jhalokati" >Jhalokati</option>
											<option value="Patuakhali" >Patuakhali</option>
											<option value="Pirojpur" >Pirojpur</option>
											<optgroup title="Khulna Division" label="&raquo; Khulna Division"></optgroup>
											<option value="Bagerhat" >Bagerhat</option>
											<option value="Chuadanga" >Chuadanga</option>
											<option value="Jashore" >Jashore</option>
											<option value="Jhenaidah" >Jhenaidah</option>
											<option value="Khulna" >Khulna</option>
											<option value="Kushtia" >Kushtia</option>
											<option value="Magura" >Magura</option>
											<option value="Meherpur" >Meherpur</option>
											<option value="Narail" >Narail</option>
											<option value="Satkhira" >Satkhira</option>
											<optgroup title="Rajshahi Division" label="&raquo; Rajshahi Division"></optgroup>
											<option value="Bogura" >Bogura</option>
											<option value="Joypurhat" >Joypurhat</option>
											<option value="Naogaon" >Naogaon</option>
											<option value="Natore" >Natore</option>
											<option value="Chapainawabganj" >Chapainawabganj</option>
											<option value="Pabna" >Pabna</option>
											<option value="Rajshahi" >Rajshahi</option>
											<option value="Sirajganj" >Sirajganj</option>
											<optgroup title="Rangpur Division" label="&raquo; Rangpur Division"></optgroup>
											<option value="Dinajpur" >Dinajpur</option>
											<option value="Gaibandha" >Gaibandha</option>
											<option value="Kurigram" >Kurigram</option>
											<option value="Lalmonirhat" >Lalmonirhat</option>
											<option value="Nilphamari" >Nilphamari</option>
											<option value="Panchagarh" >Panchagarh</option>
											<option value="Rangpur" >Rangpur</option>
											<option value="Thakurgaon" >Thakurgaon</option>
											<optgroup title="Mymensingh Division" label="&raquo; Mymensingh Division"></optgroup>
											<option value="Jamalpur" >Jamalpur</option>
											<option value="Mymensingh" >Mymensingh</option>
											<option value="Netrokona" >Netrokona</option>
											<option value="Sherpur" >Sherpur</option>
										</select>

									</div><!--city end-->

									<div class="form-group">
				                        <label for="Contact">Contact No.</label>
				                        <input type="text" name="Contact" value="" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11">
				                    </div><!--End form-group-->

				    		        <div class="form-group">
				    		            <label for="Email">Email</label>
				    			        <input type="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="Email" class="form-control" required value="">
				    		        </div>

							
							        <div class="form-group text-center">
								        <button class="btn btn-lg btn-default" type="submit" name="update">Update</button>
							        </div>
						        </form>
					        </div>
				        </div>

                </div>
        </div>
</div>


			<div class="container" style="padding: 60px 0; margin-right:20px;">
			    <div class="row">
                
				    <div class=" card col-md-6 offset-md-3">
                        <div class="donor-update">
					        <div class="panel panel-default" style="padding: 20px;">
					
					

					                <!-- Messages -->	

						            <form action="" method="post" class="form-group form-container" >
							
							            <div class="form-group">
								            <label for="oldpassword">Current Password</label>
								            <input type="password" required name="old_password" placeholder="Current Password" class="form-control">
							            </div>

							            <div class="form-group">
								            <label for="newpassword">New Password</label>
								            <input type="password" required name="new_password" placeholder="New Password" class="form-control">
							            </div>

							            <div class="form-group">
								            <label for="c_password">Confirm Password</label>
								            <input type="password" required name="c_password" placeholder="Confirm Password" class="form-control">
							            </div>

							            <div class="form-group text-center">
								            <button class="btn btn-lg btn-default" type="submit" name="update_pass">Update Password</button>
							            </div>
						            </form>
					            </div>
				            </div>

                </div>
        </div>
</div>


		<div class="container" style="padding: 60px 0; margin-right:20px;">
			<div class="row">
                
				    <div class=" card col-md-6 offset-md-3">
                        <div class="donor-update">
					        <div class="panel panel-default" style="padding: 20px;">
					
						            <form action="" method="post" class="form-group form-container" >
							
							            <div class="form-group">
								            <label for="oldpassword">Password</label>
								            <input type="password" required name="account_password" placeholder="Current Password" class="form-control">
							            </div>

							            <div class="form-group text-center">
								            <button class="btn btn-lg btn-default" type="submit" name="delete_account">Delete Account</button>
							            </div>

						            </form>
					            </div>

				            </div>
                        </div>
			</div>

		</div>
    
        

        
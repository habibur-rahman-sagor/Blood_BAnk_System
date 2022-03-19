<?php include('database/blood_bank.php'); ?>



<body>
    
<?php 
  //include header file
  include ('includes/header.php');
?>

<style>

	/*
	.size{
			min-height: 0px;
			padding: 60px 0 40px 0;

		}
		.loader{
			display:none;
			width:69px;
			height:89px;
			position:absolute;
			top:25%;
			left:50%;
			padding:2px;
			z-index: 1;
		}
		.loader .fa{
			color: #e74c3c;
			font-size: 52px !important;
		}
		.form-group{
			text-align: left;
		}   
		
		h3{
			color: #e74c3c;
			text-align: center;
		}
		.red-bar{
			width: 25%;
		}

		span{
		display: block;
		}
		.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
		}
		.donors_data{
			background-color: white;
			border-radius: 5px;
			margin: 25px;
			
			box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
			padding: 20px 10px 20px 30px;
		}
		*/
		*{
			
			box-sizing: border-box;
		}


		.donate-signup{
			color: #ff0006;
			text-align: center;
			margin-top: 125px;
			text-decoration: underline;
			text-underline-position: under;
	}

	.signup-form{
		
        padding: 30px 30px;
        margin: 30px 20px;
        background-color: #151515;
		border-radius: 10px;
	}

	.text-center {
		text-align: center!important;
	}

	.form-group{
        text-align: left;
    }   

	.btn-default{
		color: white;
		border-radius: 25px;
		padding: 10px 30px;
		font-size: 22px;
		font-weight: 700;
		text-align: center;
		background-color: #ff0006;
	}

</style>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<div class="donate-signup">
				<h1 class="text-center">Donor Registration</h1>
			</div>
			
		</div>
	</div>
</div>

	
<div class="container" style="padding: 60px 0px; margin-left: 400px;">
	<div class="row">
		<div class="col-md-6 col-offset-md-3">

			<div class="signup-form">
				<div class="panel panel-default" style="padding: 20px;">
					<form action="" method="post" >

						<h4 class="text-center" style="padding-bottom: 20px; color: #ff0006">Register as Blood Donor</h4>

							<div class="form-group" style="color: #ff0006;">

								<label class="control-label" for="First_Name" >First Name</label>
								<input type="text" placeholder="First Name" id="First_Name" name="First_Name" required class="form-control input-sm">

							</div>

							<div class="form-group" style="color: #ff0006;">

								<label class="control-label" for="Last_Name" >Last Name</label>
								<input type="text" placeholder="Last Name" id="Last_Name" name="Last_Name" required class="form-control input-sm">

							</div>

							<div class="form-group" style="color: #ff0006;">

								<label class="control-label" for="Gender" >Gender</label>
								<select name="Gender" id="Gender" required class="form-control input-sm">
									<option value="">Select Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>

							</div>

							<div class="form-group" style="color: #ff0006;">

								<label class="control-label" for="DOB">Date of Birth</label>
								<input type="text"  placeholder="YYYY/MM/DD" required id="DOB" name="DOB"  class="form-control input-sm DATES">

							</div>

							<div class="form-group" style="color: #ff0006;">

								<label class="control-label" for="Blood_Group">Blood Group</label>
								<select name="Blood_Group" id="Blood_Group" class="form-control input-sm">

									<option value="">Blood Group</option>			
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>

							</div>



							<div class="form-group" style="color: #ff0006;">

								<label class="control-label" for="Country">Country</label>
								<select name="Country" id="Country" class="form-control">

									<option value="">Select Country</option>
									<option value="Bangladesh" >Bangladesh</option>
								
								</select>

							</div>

							<div class="form-group" style="color: #ff0006;">

								<label class="control-label" for="Division">Division</label>
								<select name="Division" id="Division" class="form-control">

									<option value="">Select Division</option>
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


							<div class="form-group" style="color: #ff0006;">

								<label class="control-label" for="City" >City</label>
								<select name="City" id="City" class="form-control">

									<option value="">Select City</option>
								
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

							</div>


							<div class="form-group" style="color: #ff0006;">

								<label class="control-label" for="Contact" >Contact No.</label>
								<input type="text" name="Contact" id="Contact" class="form-control" placeholder="Contact No.">

							</div>

							<div class="form-group" style="color: #ff0006;">

								<label class="control-label" for="Email">Email</label>
								<input type="Email" name="Email" id="Email" class="form-control" placeholder="Email Address">

							</div>

							<div class="form-group" style="color: #ff0006;">

								<label class="control-label" for="Password">Password</label>
								<input type="Password" name="Password" id="Password" class="form-control" placeholder="Password">

							</div>

							<div class="form-group">

								
								<label class="control-label text-success"><input type="checkbox" checked id="c1" required>&nbsp; I agree to the Term and Conditions and consent to have my contact and donor information published to the potential blood recipients.</label>

							</div>



							<div class="form-group text-center">

								<button class="btn btn-lg btn-default" type="submit" name="submit" >Registar Now</button>

							</div>



					</form>

				</div>

			</div>

		</div>

	</div>

</div>




					<?php
						if(isset($_SESSION['add']))
						{
							echo $_SESSION['add'];
							unset($_SESSION['add']);
						}
					?>

					
						
						


						<?php

							if(isset($_POST['submit'])){
								echo $First_Name = $_POST['First_Name'];
								echo $Last_Name = $_POST['Last_Name'];
								$Gender = $_POST['Gender'];
								$DOB = $_POST['DOB'];
								$Blood_Group = $_POST['Blood_Group'];
								$Email = $_POST['Email'];
								$Password = $_POST['Password'];
								$Country = $_POST['Country'];
								$Division = $_POST['Division'];
								$City = $_POST['City'];
								$Contact = $_POST['Contact'];

								$sql="INSERT INTO donate (`First_Name`, `Last_Name`, `Gender`, `DOB`, `Blood_Group`, `Email`, `Password`, `Country`, `Division`, `City`, `Contact`) 
								VALUES ('$First_Name','$Last_Name','$Gender','$DOB','$Blood_Group','$Email','$Password','$Country','$Division','$City','$Contact')"; 

								$res = mysqli_query($con, $sql);

								//CHeck whether data inserted or not
								//4. Redirect with MEssage to Manage Food page
								if($res==true)
								{
									
									$_SESSION['add'] = "Donor Added Successfully.";
									echo"<script>alert('Successfully Registered' )</script>";   
									echo "<script>window.open('sign-in.php','_self')</script>";
									
								}
								else
								{
									//FAiled to Insert Data
									$_SESSION['add'] = "Failed to Add Donor.";
									echo "<script>window.open('donate.php','_self')</script>";
									
								}

							}

						?>

					

<?php 
  //include footer file
  include ('includes/footer.php');
?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<body>
    
<?php 

//include header file
include ('includes/header.php');

?>
<style>
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

.banner-search{
  color: #ff0006;
  text-align: center;
  margin-top: 125px;
  text-decoration: underline;
  text-underline-position: under;
}

.text-center {
  text-align: center!important;
}

.form-group{
	padding-right: 20px;
  display: table;
	margin: 0 auto;
	padding-bottom: 20px;
	
}

.red{
	color: #f1061a;
}
.btn-default{
	color: white;
	border-radius: 25px;
	padding: 10px 30px;
	font-size: 22px;
	font-weight: 700;
  background-color:#ff0006;
}

.btn-default:hover{
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}

.center-aligned{
	display: block;
	margin: 0 auto;
  text-align: center;
  padding-bottom: 10px;
}

</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 offset-md-3">

			
            <div class="banner-search">
                <h1 class="text-center">Search for Donors</h1>
            </div>
				

				<form action="donors-search-results.php" method="post" class="form-inline form-horizontal text-center" style="padding: 20px 0px 0px 5px;">
					<div class="form-group form-horizontal form-inline text-center justify-content-center">
							
					<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
                    
					<option class="text-center"value="">-- City Name --</option>
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
					<div class="form-group form-horizontal form-inline text-center justify-content-center">
					    <select name="Blood_Group" id="Blood_Group" style="padding: 0px 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

						<option class="text-center"value="">-- Blood Group --</option>			
						<option name="search" value="A+">A+</option>
						<option name="search" value="A-">A-</option>
						<option name="search" value="B+">B+</option>
						<option name="search" value="B-">B-</option>
						<option name="search" value="AB+">AB+</option>
						<option name="search" value="AB-">AB-</option>
						<option name="search" value="O+">O+</option>
						<option name="search" value="O-">O-</option>

						</select>
					</div>
					<div class="form-group center-aligned">
						<button type="submit" name="submit" value="search" class="btn btn-lg btn-default">Search</button>
					</div>
				</form>
		</div>
	</div>
</div>
<div class="container" style="padding: 60px 0 60px 0;">
    <div class="row " id="data">

        <!-- Display The Search Result -->

    </div>
</div>
<div class="loader" id="wait">
    <i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>


<?php 

//include footer file
include ('includes/footer.php');

?>

</body>
</html>
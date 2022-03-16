<!DOCTYPE html>
<html lang="en">
<body>
    
<?php 

//include header file
include ('includes/header.php');

?>
<style>


.donor-search{
  color: #ff0006;
  text-align: center;
  margin-top: 125px;
  text-decoration: underline;
  text-underline-position: under;
}

.text-center {
  text-align: center!important;
}

.table{
    display: block;
    
    margin: 20px 0px;
    margin-left: 0px;
    padding: 20px 0;
}



</style>



<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 offset-md-3">

			
            <div class="donor-search">
                <h1 class="text-center">Donors Search Results</h1>
            </div>


        </div>

    </div>
</div>


<div class="container" >
    <div class="row">
        <div class="col-md-6 offset-md-3">
            
            <div id="feedback">

                <table class="table ">
			        <tr>
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Blood Group</th>
                        <th>Division</th>
                        <th>City</th>
                        <th>Contact No.</th>
                        <th>Email</th>
				    </tr>
                    <?php
                    $search = $_POST['search'];
                    $sql="SELECT * FROM donate WHERE Blood_Group LIKE '%$search%'";
                    $res = mysqli_query($con,$sql);
                    $count= mysqli_num_rows($res);
                    if($count>0){
                        while($row=mysqli_fetch_assoc($res)){
                            $donor_id=$row['donor_id'];
                            $First_Name=$row['First_Name'];
                            $Gender=$row['Gender'];
                            $Blood_Group=$row['Blood_Group'];
                            $City=$row['City'];
                            $Division=$row['Division'];
                            $Contact=$row['Contact'];
                            $Email=$row['Email'];
                            ?>
                    <tr>
                        <th><?php echo  $donor_id; ?>.</th>
                        <th><?php echo  $First_Name; ?></th>
                        <th><?php echo  $Gender; ?></th>
                        <th><?php echo  $Blood_Group; ?></th>
                        <th><?php echo  $City; ?></th>
                        <th><?php echo  $Division; ?></th>
                        <th><?php echo  $Contact; ?></th>
                        <th><?php echo  $Email; ?></th>
				    </tr>
                    <?php
                }
            }
            else{
                echo "No patient";
            }
        ?>
                </table>		
    
            </div>

        </div>

    </div>

</div>

















<?php 

//include footer file
include ('includes/footer.php');

?>

</body>
</html>
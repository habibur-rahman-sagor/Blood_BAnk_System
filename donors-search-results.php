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


<div class="container-fluid" >
    <div class="row">
        <div class="col-md-6 offset-md-3">
            
            <div id="feedback">

                <table class="table ">
			        <tr>
                        <th>S.No.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
				        <th>Gender</th>
				        <th>Blood Group</th>
                        <th>Division</th>
				        <th>City</th>
				        <th>Contact</th>
				        <th>Email</th>
				    </tr>
                    <?php
                    $search = $_POST['search'];
                    $sql="SELECT * FROM donate WHERE Blood_Group LIKE '%$search%'";
                    $res = mysqli_query($con,$sql);
                    $count= mysqli_num_rows($res);
                    if($count>0){
                        while($row=mysqli_fetch_assoc($res)){
                            
                            $donor_id = $row['donor_id'];
                                $First_Name = $row['First_Name'];
                                $Last_Name = $row['Last_Name'];
                                $Gender = $row['Gender'];
                                $Blood_Group = $row['Blood_Group'];
                                $Division = $row['Division'];
                                $City = $row['City'];
                                $Contact = $row['Contact'];
                                $Email = $row['Email'];
                                
                            ?>
                    <tr>
                        <td><?php echo $donor_id; ?></td>
                        <td><?php echo $First_Name; ?></td>
                        <td><?php echo $Last_Name; ?></td>
                        <td><?php echo $Gender; ?></td>
                        <td><?php echo $Blood_Group; ?></td>
                        <td><?php echo $Division; ?></td>
                        <td><?php echo $City; ?></td>
                        <td><?php echo $Contact; ?></td>
                        <td><?php echo $Email; ?></td>
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
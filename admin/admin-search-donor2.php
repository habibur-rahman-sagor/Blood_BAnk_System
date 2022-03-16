<?php include('admin-header.php'); 
include('../database/blood_bank.php'); ?>

<style>

.page-header{
    padding: 50px 0px 0px 0px;
    color: white;;
}

.admin-search-donor{
    margin-top: 20px;
    margin-left: 30px;
    padding: 10px 0;
    background-color: ;
}

.table{
    display: block;
    margin-left: 50px;
    padding:
}


</style>

<div class="container"  style='margin-top: 55px;'>
	<div class="row">
		<div>
            <?php include('admin-sidenav.php'); ?>
		</div>

    </div>

</div>


<div class="container" >
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="page-header text-primary" style="color: #ff0006;"><i class="fa fa-search"></i> Search Donor Details</h2>
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
				<th>Blood</th>
				<th>City</th>
				<th>Division</th>
				<th>Contact</th>
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
                            ?>
                            <th><?php echo  $donor_id; ?></th>
                            <th><?php echo  $First_Name; ?></th>
                            <th><?php echo  $Gender; ?></th>
                            <th><?php echo  $Blood_Group; ?></th>
                            <th><?php echo  $City; ?></th>
                            <th><?php echo  $Division; ?></th>
                            <th><?php echo  $Contact; ?></th>

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


					
					
					
					
					
		

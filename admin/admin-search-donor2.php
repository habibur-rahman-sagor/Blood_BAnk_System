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
    
    margin-top: 20px;
    margin-left: 30px;
    padding: 10px 0;

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
                <h2 class="page-header" style="color: #ff0006;"><i class="fa fa-search"></i> Donor Search List</h2>
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
				<th>First Name</th>
                <th>Last Name</th>
				<th>Gender</th>
				<th>Blood Group</th>
                <th>Country</th>
                <th>Division</th>
				<th>City</th>
				<th>Contact</th>
				<th>Email</th>
                <th>Password</th>
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
                                $Country = $row['Country'];
                                $Division = $row['Division'];
                                $City = $row['City'];
                                $Contact = $row['Contact'];
                                $Email = $row['Email'];
                                $Password = $row['Password'];
                            
                            ?>
                            <tr>
                                    <td><?php echo $donor_id; ?></td>
                                    <td><?php echo $First_Name; ?></td>
                                    <td><?php echo $Last_Name; ?></td>
                                    <td><?php echo $Gender; ?></td>
                                    <td><?php echo $Blood_Group; ?></td>
                                    <td><?php echo $Country; ?></td>
                                    <td><?php echo $Division; ?></td>
                                    <td><?php echo $City; ?></td>
                                    <td><?php echo $Contact; ?></td>
                                    <td><?php echo $Email; ?></td>
                                    <td><?php echo $Password; ?></td>
                                    
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


					
					
					
					
					
		

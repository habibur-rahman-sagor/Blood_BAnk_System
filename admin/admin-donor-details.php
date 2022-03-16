<?php include('admin-header.php'); 
include('../database/blood_bank.php'); 
?>

<style>

.page-header{
    padding: 50px 0px 0px 0px;
    color: white;;
}

.admin-donar-details{
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
                <h2 class="page-header" style="color: #ff0006;"><i class="fa fa-users "></i> Donors Details</h2>
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
				<th>Delete</th>
				
				</tr>
                <?php
                    //get data from db
                    $sql = "SELECT * FROM donate";
                    $res = mysqli_query($con, $sql);

                    if($res == TRUE){

                        $count = mysqli_num_rows($res);

                        if($count>0){

                            while($rows=mysqli_fetch_assoc($res)){

                                $donor_id = $rows['donor_id'];
                                $First_Name = $rows['First_Name'];
                                $Gender = $rows['Gender'];
                                $Blood_Group = $rows['Blood_Group'];
                                $City = $rows['City'];
                                $Division = $rows['Division'];
                                $Contact = $rows['Contact'];

                                ?>
                                <tr>
                                    <td><?php echo $donor_id; ?></td>
                                    <td><?php echo $First_Name; ?></td>
                                    <td><?php echo $Gender; ?></td>
                                    <td><?php echo $Blood_Group; ?></td>
                                    <td><?php echo $City; ?></td>
                                    <td><?php echo $Division; ?></td>
                                    <td><?php echo $Contact; ?></td>
                                    <td>
                                        <a href="#">delete</a>
                                    </td>
                                    
                                </tr>

                                <?php
                            }
                        }
                        else{
                            //no data
                        }
                    }
                ?>
            </table>		
    
            </div>

        </div>

    </div>

</div>
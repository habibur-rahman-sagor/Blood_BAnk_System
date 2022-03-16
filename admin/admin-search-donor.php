<?php include('admin-header.php');
include('../database/blood_bank.php');  ?>

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
                <h2 class="page-header" style="color: #ff0006;"><i class="fa fa-search"></i> Search Donor Details</h2>
            </div>

            
            

        </div>
    </div>



        
<div class="container" >
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="admin-search-donor">
            <form action="admin-search-donor2.php" method="POST">
				<div class="form-group text-primary">
					<label>Search Text</label>
					<input type="text" name="search" id="q" class="form-control">
				</div>
                <div class="form-group text-primary">
					<input type="submit" name="submit" value="Search" class="form-control">
				</div>
			</form>
    
            </div>

        </div>

    </div>

</div>





					
					
					
					
					
		

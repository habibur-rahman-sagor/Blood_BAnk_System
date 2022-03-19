<?php include('admin-header.php');
include('../database/blood_bank.php');  ?>

<style>

.page-header{
    padding: 50px 0px 0px 0px;
    color: white;
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

.btn-default{
    color: white;
    border-radius: 25px;
    padding: 10px 30px;
    margin-top: 20px;
    
    font-size: 22px;
    font-weight: 700;
    background-color: #ff0006;
    text-align: center;
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
				<div class="form-group" style="color: #ff0006; font-size: 20px;">
					<label>Search Text</label>
					<input type="text" name="search" id="q" class="form-control">
				</div>
                <div class="form-group text-center">
			    	<button class="btn btn-lg btn-default" name="submit" type="submit">Search</button>
			      	
                </div>
                
			</form>
    
            </div>

        </div>

    </div>

</div>





					
					
					
					
					
		

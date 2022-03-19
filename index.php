
<?php 

	//include header file
include ('includes/header.php');

?>

<style>


.donate-section{
  
  color: white;
  font-size: bold;
  text-align: center;
  margin-top: 20px;
  text-decoration: underline;
  text-underline-position: under;
}

.red-background{
	background-color: #ff0006 !important;
	min-height: 250px;
	height: auto;
	padding: 10px
}

.pera-text{
  margin-top: 20px;
	color: white;
	font-size: 16px;
}

.page-content{
  padding: 25px 0px;
  
}

.card {
  width: 360px;
  padding: 25px;
  margin-top: 40px;
  margin-bottom: 40px; 
  background: #FFFFF0;
  border-color: #ff0006;

}
.card h3,img{
  padding-bottom: 20px;
  align-self: center;

  .icon-section {
    color: white;
  }

</style>

    <div class="container">

    <div class="row">

       <div class="col-md-12">

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

              <ol class="carousel-indicators">

                 <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                 <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                 <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

              </ol>
              

              <div class="carousel-inner">

                  <div class="carousel-item active">
                      <img src="images/slide1.png" class="d-block w-100" alt="...">
                  </div>

                  <div class="carousel-item">
                      <img src="images/slide2.png" class="d-block w-100" alt="...">
                  </div>

                  <div class="carousel-item">
                      <img src="images/slide3.png" class="d-block w-100" alt="...">
                  </div>

              </div>

              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>

              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>

          </div>

      </div>

    </div>

    </div>




<!-- donate section -->
<div class="container-fluid red-background">
<?php
						if(isset($_SESSION['add']))
						{
							echo $_SESSION['add'];
							unset($_SESSION['add']);
						}
					?>
				<div class="row">
					<div class="col-md-12">
            <div class="donate-section">
						  <h1 class="text-center"  style="color: white; font-weight: 700; padding: 0 0 0 0;">Donate The Blood</h1>
            </div>
						<p class="text-center pera-text">
                Donate blood saves lives. Blood is needed by women with complications during pregnancy and childbirth, children with severe anaemia, often resulting from malaria or malnutrition, accident victims and surgical and cancer patients.
                There is a constant need for a regular supply of blood because it can be stored only for a limited period of time before use. Regular blood donation by a sufficient number of healthy people is needed to ensure that blood will always be available whenever and wherever it is needed.
                Blood is the most precious gift that anyone can give to another person – the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components – red cells, platelets and plasma – which can be used individually for patients with specific conditions.
						</p>
					</div>
				</div>
			</div>
			<!-- end doante section -->


    
<!-- Page Content -->
  <div class="container page-content">

        <!-- Marketing Icons Section -->
        <div class="row">

            <div class="col-md-12 offset-md-3">

            </div>

    				    <div class="col-md-4">

                    <div class="card">
    					
     						        <h3 class="text-center red" style="color: #ff0006; text-decoration: underline; text-underline-position: under;" >Our Vission</h3>
								
								        <p class="text-center">

                        Some people who have serious injuries they need blood transfusions to replace blood lost during the injury.Regular blood donors ensure that a safe and plentiful supply of blood is available whenever and wherever it is needed.
								    
                        </p>

                    </div>

						    </div>
    				
    				
    				    <div class="col-md-4">

                    <div class="card card-text">
    					
      							    <h3 class="text-center red" style="color: #ff0006; text-decoration: underline; text-underline-position: under;" >Our Goal</h3>
								
								        <p class="text-center">

                        Every 2 seconds someone needs blood. Your blood helps more than one life at a time. Accident victims, premature babies, patients undergoing major surgeries require whole blood, where your blood after testing is used directly.
								    
                        </p>

                    </div>

						    </div>
    				
    			
    				    <div class="col-md-4">

                    <div class="card">
    					
      						      <h3 class="text-center red" style="color: #ff0006; text-decoration: underline; text-underline-position: under;" >Our Mission</h3>
								
								        <p class="text-center">

                        Have you at anytime witnessed a relative of yours or a close friend searching frantically for a blood donor, when blood banks say out of stock, the donors in mind are out of reach and the time keeps ticking?This thought laid our foundation.
								    
                        </p>

                    </div>

							  </div>
   			 		
        </div>
 	
  </div>
<!-- /.row -->







<?php 

//include footer file
include ('includes/footer.php');

?>



<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
	
	$(".img-portfolio").click(function(){
		var a=$(this).attr("src");
		$("#ModalImg").attr("src",a);
       $('#myModal').modal();
    })
    </script>


</body>
</html>
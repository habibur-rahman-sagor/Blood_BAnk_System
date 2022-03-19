    
<?php 

//include header file
include ('includes/header.php');

?>

<style>

.contact-us{
  
  color: #ff0006;
  font-size: bold;
  text-align: center;
  margin-top: 125px;
  text-decoration: underline;
  text-underline-position: under;
}

.contact{
		
        padding: 30px 30px;
        margin: 10px 20px;
        background-color: #151515;
        border-radius: 10px;
	}

    .btn-default{
		color: white;
		border-radius: 25px;
		padding: 10px 30px;
        margin-top: 20px;
		font-size: 22px;
		font-weight: 700;
		text-align: center;
		background-color: #ff0006;
	}


</style>




<!-- Page Content -->
<div class="container-fluid">
    <div class="row">
         <div class="col-md-6 offset-md-3">
             <div class="contact-us">
                <h1 class="text-center">Contact Us</h1>
             </div>
        </div>
    </div>
</div>




<div class="container-fluid" style="margin: 70px 0px;">
    <div class="row">
         <div class="col-md-6 offset-md-3">
             <div class="contact">
             <h3 class="text-center" style="padding-bottom: 20px; color: #ff0006;" >Send us a Message</h3>
                <form method="post" action="contact.php" role="form" >
                    <div class="control-group form-group" style="color: #ff0006;">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" name="name" required>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group" style="color: #ff0006;">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" required>
                        </div>
                    </div>
                    <div class="control-group form-group" style="color: #ff0006;">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="email"  >
                        </div>
                    </div>
                    <div class="control-group form-group" style="color: #ff0006;">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="5" cols="100" class="form-control" name="message" required maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->

                    <div class="form-group text-center">

                         <button type="submit" class="btn btn-lg btn-default" name="submit"><i class='fa fa-send'></i> Send Message</button>
                
                    </div>
                
                </form>
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

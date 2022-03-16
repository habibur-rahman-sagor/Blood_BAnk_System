    
<?php 

//include header file
include ('includes/header.php');

?>






<!-- Page Content -->
<div class="container" style="margin-top:70px;">

<div class="row">
    <div class="col-md-8">
            
    <h3 class='text-primary'>Send us a Message</h3>
    <form method="post" action="contact.php" role="form" >
        <div class="control-group form-group">
            <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" name="name" required>
                <p class="help-block"></p>
            </div>
        </div>
        <div class="control-group form-group">
            <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" name="phone" required>
            </div>
        </div>
        <div class="control-group form-group">
            <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" name="email"  >
            </div>
        </div>
        <div class="control-group form-group">
            <div class="controls">
                <label>Message:</label>
                <textarea rows="5" cols="100" class="form-control" name="message" required maxlength="999" style="resize:none"></textarea>
            </div>
        </div>
        <div id="success"></div>
        <!-- For success/fail messages -->
        <button type="submit" class="btn btn-primary" name="submit"><i class='fa fa-send'></i> Send Message</button>
    </form>
    
</div>

<div class="col-md-4">
    <h3 class='text-primary'>Contact Details</h3>
    <p>
        Blood Bank &amp; <br>Friend Medical Trust, <br>
        34/44 ,Cherry Street,<br>
        Nethimedu-627813.<br>
        Salem Dt.
    </p>
    <p><i class="fa fa-phone"></i> 
        <abbr title="Phone">P</abbr>: 908776655</p>
    <p><i class="fa fa-envelope-o"></i> 
        <abbr title="Email">E</abbr>: <a href="#" >bloodbankin@gmail.com</a>
    </p>
    <p><i class="fa fa-clock-o"></i> 
        <abbr title="Hours">H</abbr>: 24*7</p>
    
    <ul class="list-unstyled list-inline list-social-icons">
        <li>
            <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
        </li>
    </ul>
</div>
</div>




<?php 

//include footer file
include ('includes/footer.php');

?>

</body>
</html>

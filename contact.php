 <?php
require('config.php');
 extract($_POST);
 
 if(isset($send))
 {
	$que=mysqli_query($con,"insert into contact values('','$name','$eid','$mob','$msg',now())");
	$err="<font color='blue'>Thanks for your feedback, we will contact you as soon as possible. </font>";
 
 }
 ?>
 	<Div class="col-md-4">
<h3>Contact me personally</h3><br/>
<span class="glyphicon glyphicon-user"></span> Name :Tanisha<br/><br/>
<span class="glyphicon glyphicon-envelope"></span> Email: tanishakumb@gmail.com<br/><br/>
<span class="glyphicon glyphicon-phone"></span> Mobile: +91 7699101959<br/><br/>
<span class="glyphicon glyphicon-map-marker"></span> Address: Durgapur,West Bengal<br/>
		
	</Div>
 	<div class="col-md-8">
 
 
 <form method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  </div> 
	
	
  <div class="form-group">
    <label for="exampleInputEmail1">Name <font color="red">*</font></label>
    <input type="text" class="form-control" name="name"  placeholder="Enter your full names" pattern="[a-z A-Z]*" required>
  </div>
	 
  <div class="form-group">
    <label for="exampleInputEmail1">Email address <font color="red">*</font></label>
    <input type="email" class="form-control" name="eid" id="exampleInputEmail1" placeholder="Enter your email address" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Mobile <font color="red">*</font></label>
    <input type="text" class="form-control" name="mob" maxlength="13" required pattern="[0-9 + ]*"  placeholder="Enter your mobile number" >
  </div> 

  
  
  
<div class="form-group">
    <label for="exampleInputEmail1">Your Feedback <font color="red">*</font></label>
   <textarea class="form-control" name="msg" rows="3" maxlength="250" placeholder="A brief message about 250 letters" required></textarea>
  </div> 

<br/>
<div class="form-group">
    <button style="width:150px" name="send" class="btn btn-lg btn-primary btn-block" type="submit">Send</button>
</div>
	</form>	
	</div>
	</div>
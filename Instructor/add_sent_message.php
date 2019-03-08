 <?php
extract($_POST);
extract($_SESSION); 

 if(isset($send))
 {
	$que=mysqli_query($con,"insert into sent_student values('','".$inst['id']."','$stu','$sub','$msg',now())");
	$err="<font color='blue'>Message Sent</font>";
 
 }
 ?>
 
 <div class="row">
<div class="col-sm-0">
</div>
<div class="col-sm-10">

<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title" style="color:#8F0BB0;" align="center"></h3>
</div>
<div class="panel-body">
		
 <form method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  </div> 
	 
	
	 
  <div class="form-group">
    <label for="exampleInputEmail1">Select Student</label>
 
  
   <select class="form-control" name="stu">
  <option value="" selected="selected" disabled="disabled">Select Student</option>
 	<?php 
	
	
	$stu=mysqli_query($con,"select * from student");
	while($rr=mysqli_fetch_array($stu))
	{
	echo "<option value=$rr[id]>".$rr['name']."</option>";
	}
	?>
</select>
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Subject</label>
   <input type="text" class="form-control" name="sub" required></textarea>
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputEmail1">Message</label>
   <textarea class="form-control" name="msg" rows="3" required></textarea>
  </div> 
  
 	 
  
<br/>
<div class="form-group">
    <button name="send" style="width:150px" class="btn btn-lg btn-primary btn-block" type="submit">Send</button>
</div>
	</form>	
		</div>
	</div>
</div>

	</div>	
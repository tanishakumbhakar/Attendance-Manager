 <?php
extract($_POST);
extract($_SESSION); 

 if(isset($send))
 {
	$que=mysqli_query($con,"insert into results values('','".$inst['id']."','$stu','$sub','$marks')");
	$err="<font color='blue'>Results added</font>";
 
 }
 ?>
 
 <div class="row">

<div class="col-sm-10">

<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title" style="color:#8F0BB0;" align="center">Add Results</h3>
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
    <label for="exampleInputEmail1">Marks</label>
   <input type="text" class="form-control" name="marks"  required></textarea>
  </div> 
  
 	 
  
<br/>
<div class="form-group">
    <button name="send" style="width:150px" class="btn btn-lg btn-primary btn-block" type="submit">Add Marks</button>
</div>
	</form>	
		</div>
	</div>
</div>

	</div>	
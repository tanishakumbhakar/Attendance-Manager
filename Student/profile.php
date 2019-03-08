<?php 
 extract($_POST);
 
 //select 
  $que=mysqli_query($con,"select * from student where email='$student'");
$res =  mysqli_fetch_array($que);

 ?>

<div class="row">
<div class="col-sm-12">
 <form method="post">
	<div class="form-group">
    <label for="exampleInputEmail1"><?php echo @$err;?></label>   
  	</div> 
  </div>
 </div> 


<div class="row">
<div class="col-sm-6">
	 <div class="form-group">
    <label for="exampleInputEmail1"><font color="white">Name</label>
    <input type="text" class="form-control" name="n"  readonly="readonly"  value="<?php  echo $res[1]; ?>" required>
  </div> 
  </div>
  
  <div class="col-sm-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" readonly="readonly" value="<?php  echo $res[2]; ?>" >
  </div>
  </div>
 </div> 


  
<div class="row">
  
  <div class="col-sm-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile</label>
    <input type="number" value="<?php  echo $res[4]; ?>" class="form-control" name="mob" readonly="readonly"  >
  </div> 
  </div>
  
  
<div class="col-sm-6">
<div class="form-group">
  <label for="exampleInputEmail1">Course/Lecture Name</label>
 <br />
<ol type="a">
 <?php
  $que1=mysqli_query($con,"select * from category");
	 while($cou= mysqli_fetch_array($que1))
	 {
	 ?>
	<li><span style="margin-left:10px">
	<?php echo $cou['name'];?>
	<input  type="checkbox"  name="course[]" <?php foreach(explode(",",$res['course']) as $v1)
 {
 	if($v1==$cou['id'])
	{
	echo "checked";
	}
 } ?>/></span></li>
	 <?php 
	 }
  ?>
</ol>
 
  </div> 
  </div>



</div>  
  

<div class="row">
<div class="col-sm-6">
<div class="form-group">
    <label for="exampleInputEmail1">Gender</label>
  <!-- <select class="form-control" name="gen">
  <option value="m" <?php if($res[5]=="m"){echo "selected";} ?>>Male</option>
  <option value="f" <?php if($res[5]=="f"){echo "selected";} ?>>Female</option>
  </select>-->
   <input type="email" class="form-control" readonly="readonly" value="<?php  echo $res[5]; ?>" >
  </div> 
  </div>
  

</div>  

 
        
</form>	
	
 <?php
extract($_POST);
extract($_SESSION); 

 if(isset($add))
 { 
 //print_r($name1);
   foreach($name1 as $f){
	    
      $r= "att_".$f;		   
      $n= $_POST["$r"];
      
	
	$r=explode('-',$n);	
  //  echo $r[0],$r[1];
  
 $qqq= mysqli_query($con,"select * from attendance where stu_id='".$r[1]."' and super_id='".$inst['id']."' and Date='".$date."'");
$rrr=  mysqli_num_rows($qqq);
  if($rrr)
  {
$err="<font color='red'> Attendance already taken !</font>";  
  }
  else
  {
       	$que=mysqli_query($con,"insert into attendance (id ,stu_id,super_id,attendance,Date)values('','".$r[1]."','".$inst['id']."','".$r[0]."','".$date."')");

$err="<font color='blue'> Attendance added !</font>";    
   }
  
  }

 
 }
 ?>
 
 
<div class="col-sm-0">
</div>



		
	
	 
	 
	 
  <div class="form-group">
    
 

  <table class="table table-responsive table-hover">
  <tr class="warning"><td colspan=4> <label for="exampleInputEmail1"><?php echo @$err;?></label></td></tr>   
                        <form method="post">
						
						<?php
						$date=getdate();
$d=$date['mday'];
$m=$date['mon'];
$y=$date['year'];
$cDate=$y."-".$m."-".$d;
						 ?>
						
						<tr class="info"><th colspan=2>Attendance Date</th><td colspan=2><input type="text" name="date"   class="form-control" readonly="true" value="<?php echo $cDate; ?>" required/></td></tr>
                            <tr class="danger">
                                <th>
                                    Sr. No.
                                </th>
                                <th>
                                  Student Name
								</th>
                                <th>
                                 Present / Absent  
								</th>
                                <th>
                                 Attended Lecture
								</th>
								 
								</tr> 
								<?php 
								
								
$que2=mysqli_query($con,"select * from  student");
$i=1;
while($rows1=mysqli_fetch_array($que2))
{

	foreach(explode(",",$rows1['course']) as $val)
	{
	
		if($val==$inst['course'])
		{
		                
					 $que1=mysqli_query($con,"select * from attendance where stu_id='".$rows1['id']."' and super_id='".$inst['id']."' and attendance='P'");
                    
		//		echo mysql_num_rows($que1);
				
//  $rows1=mysql_fetch_array($que1); 
                       //echo $rows1['id'];
echo "<tr class='active'><td>".$i++."</td><td>
<input type='text'  style='border-color: white;
    color: #000;'   value='".$rows1['name']."'/><input type='hidden' name='name1[]'  value='".$rows1['id']."'/></td>
	
	
   <td><div class='form-group'>
       
     <input type='radio' name='att_".$rows1['id']."' value='P-".$rows1['id']."'  />
  Present/<input type='radio'  name='att_".$rows1['id']."' value='A-".$rows1['id']."'/>Absent</div> </td><td>".mysqli_num_rows($que1)."</td></tr>";
		
		}
	}
}		
								?>
								
								
								
								
								
								
								
    
					
					 
  
 	 
   <tr class="active">
   <td colspan="4">
<center>
			<button type="submit" class='btn btn-primary'  name="add">Save and Submit Attendance</button></center>
			</td></tr>
            
		</div>
		
</form>	
</table>	

	


	


<div class="col-sm-0">
</div>

		
	
		 

 

  <table class="table table-responsive table-hover">
     
  
	 
	<tr class="info">
	 
  <th colspan='6'>
<div class="form-group">
   <a style="color:#000" href="generate_pdf.php?course=<?php echo $inst['course']; ?>&inst=<?php echo $inst['id']?>"><span class="glyphicon glyphicon-print"></span> Download PDF</a> 
  </div> 
  
            </th></tr>         
                            <tr class="success">
                                <th>
                                    Sr. No.
                                </th>
                                <th>
                                  Student Name
								</th>
                                <th>
                                 Attended Lecture
					            </th>
								
								<th>
                                 Absent Lecture
					            </th>
                                <th>
                               Percentage
					       	    </th>
								<th>
                                 More Details
					       	    </th>
								
								</tr> <tr>
    <?php
error_reporting(1);
         
		 
     
	 $i=1;
	
	
$que1=mysqli_query($con,"select * from  student");

while($rows=mysqli_fetch_array($que1))
{

	foreach(explode(",",$rows['course']) as $val)
	{
	
		if($val==$inst['course'])
		{
		
		
	
		
		
		
		 $que=mysqli_query($con,"select * from attendance where stu_id='".$rows['id']."' and super_id='".$inst['id']."' ");
						   $que_att=mysqli_query($con,"select * from attendance where stu_id='".$rows['id']."' and super_id='".$inst['id']."' and attendance='P' ");
						   $total=mysqli_num_rows($que);
						   $present=mysqli_num_rows($que_att);
							$absent=mysqli_num_rows($que)-mysqli_num_rows($que_att);		
							$perc=($present/$total)*100;	
	echo "<td class='active'>".$i++."</td>";
	
echo "<td class='active'>".$rows['name']."</td>";
echo "<td class='active'>".$present."</td>";


echo "<td class='active'>".$absent."</td>";
echo "<td class='active'>".$perc."</td>";
	
					
echo "<td class='active'><a title='view details ' href='index.php?option=view_attendance_details&stu_id=".$rows['id']."'><span style='color:green' class='glyphicon glyphicon-share'></span></a></td>";					
						                                                     
					 
			?>
		
 </tr><?php 
		
		
		}
		
	}
	
}
	 ?>
	 
	 
	 
	 
	
		
</table>
	

<div class="row">
<div class="col-sm-12">
<div class="panel panel-primary">
<div class="panel-heading"><span class="glyphicon glyphicon-check"> Reports </span>
</div>
<div class="panel-body">	 
  <div class="form-group">
  <table class="table table-responsive table-hover">
                     <?php
					 
					 
$query=mysqli_query($con,"select * from student where id='".$_GET['stu_id']."'");
					  $i=1;
					  echo "<form method='post'>";
					   $rows=mysqli_fetch_array($query);
					 // echo $rows['student_name'];
						   $que=mysqli_query($con,"select * from attendance where stu_id='".$rows['id']."'and super_id='".$inst['id']."' ");
						   $que_att=mysqli_query($con,"select * from attendance where stu_id='".$rows['id']."' and super_id='".$inst['id']."' and attendance='P' ");

$total=mysqli_num_rows($que);
$present=mysqli_num_rows($que_att);
$absent=mysqli_num_rows($que)-mysqli_num_rows($que_att);
		
$perc=($present/$total)*100;			
			?>
					  
					   
						<tr>		
						<th>Download PDF</th>
								<th><a title="Download PDF" href="generate_pdf_details.php?stu_id=<?php echo $_GET['stu_id']; ?>&inst=<?php echo $inst['id']?>"><span class="glyphicon glyphicon-floppy-save"></span></a></th>
						</tr> 
						
								
								
						
						    
                            <tr>
                                <th>
                                   Total Attendance 
                                </th>
					<?php echo "<th>".$total."</th>"; ?>
								</tr>
                                <tr>
								<th>
                                  Absent 
								</th>
								<th><?php echo $absent; ?></th>
								</tr>
								
								<tr>
								<th>
                                  Present 
								</th>
						<th><?php echo $present; ?></th></tr>
						
						<tr>
						<th>
                             Present(%) 
								</th>
						<th><?php echo $perc; ?> % </th>
								</tr>
                           
    
					  </tbody>
					  </table>
					  <!-- <table class="table table-responsive table-hover">
                     <?php
					 
					 
$query=mysqli_query($con,"select * from student where id='".$_GET['stu_id']."'");
					  $i=1;
					  echo "<form method='post'>";
					   $rows=mysqli_fetch_array($query);
					 // echo $rows['student_name'];
						   $que=mysqli_query($con,"select * from attendance where stu_id='".$rows['id']."'and super_id='".$inst['id']."' ");
						   $que_att=mysqli_query($con,"select * from attendance where stu_id='".$rows['id']."' and super_id='".$inst['id']."' and attendance='P' ");

$total=mysqli_num_rows($que);
$present=mysqli_num_rows($que_att);
$absent=mysqli_num_rows($que)-mysqli_num_rows($que_att);
		
$perc=($present/$total)*100;			
			?>
					  
					   <tr>		
						<th>Download PDF</th>
								<th><a title="Download PDF" href="generate_pdf_details.php?stu_id=<?php echo $_GET['stu_id']; ?>"><span class="glyphicon glyphicon-floppy-save"></span></a></th>
						</tr> 
						
								
						
						    
                            <tr>
                                <th>
                                   Total Attendance 
                                </th>
					<?php echo "<th>".$total."</th>"; ?>
								</tr>
                                <tr>
								<th>
                                  Absent 
								</th>
								<th><?php echo $absent; ?></th>
								</tr>
								
								<tr>
								<th>
                                  Present 
								</th>
						<th><?php echo $present; ?></th></tr>
						
						<tr>
						<th>
                             Present(%) 
								</th>
						<th><?php echo $perc; ?> % </th>
								</tr>
                           
    
					  </tbody>
					  </table>
  
  -->

	</div>
</div>

	</div></div>
	
	

</div>

	
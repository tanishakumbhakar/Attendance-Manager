 <?php
 
 extract($_POST);
 ?>
<div class="table-responsive">
  <table class="table table-bordered">
   	<caption><h4 style="color:yellow" align="center">Inbox(message sent by instructor)</h4></caption>
	   	
		<tr class="info">
		<th>Sr. No</th>
		<th>Teacher</th>
		<th>Subject</th>
		<th>Message</th>
		
		</tr>
<?php
$que=mysqli_query($con,"select * from  sent_student where student_id='".$stu['id']."'");
$i=1;
while($row= mysqli_fetch_array($que))
	{
	?>
	<tr style="background:#eee">
		<Td><?php echo $i;?></Td>
		<?php 
		
$que1=mysqli_query($con,"select * from  instructor where id='".$row[1]."'");
$row1= mysqli_fetch_array($que1);
//print_r($row1);
		?>
		<Td><?php echo $row1['name'];?></Td>
		<Td><?php echo $row[3];?></Td>
		<Td><?php echo $row[4];?></Td>
		



	</tr>
	
	<?php $i++;} ?>
  </table>
  

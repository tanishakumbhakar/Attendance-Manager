 <?php
 
 extract($_POST);
 ?>
<div class="table-responsive">
  <table class="table">
   	<caption><h4 style="color:white" align="center">Sent messages to Your Students </h4></caption>
	   	<tr class="info">
		<th colspan="6"><a href="index.php?option=add_sent_message" title="send message to other instructor">Send message </a></th>
		</tr>
		<tr class="success">
		<th>Sr. No</th>
		<th>Student</th>
		<th>Subject</th>
		<th>Message</th>
		<th>Date</th>
		<th>Delete</th>
		</tr>
<?php
$que=mysqli_query($con,"select * from  sent_student where instructor_id='".$inst['id']."'");
$i=1;
while($row= mysqli_fetch_array($que))
	{
	?>
	<tr style="background:#eee">
		<Td><?php echo $i;?></Td>
		<?php 
		
$que1=mysqli_query($con,"select * from  student where id='".$row[2]."'");
$row1= mysqli_fetch_array($que1);
//print_r($row1);
		?>
		<Td><?php echo $row1['name'];?></Td>
		<Td><?php echo $row[3];?></Td>
		<Td><?php echo $row[4];?></Td>
		<Td><?php echo $row[5];?></Td>

<td>
<?php 

$msgid= $row[0];

?>
<?php echo "<a href='delete_attendance.php?msgid=$msgid'><span class='glyphicon glyphicon-remove' style='color:red' aria-hidden='true'></span></a></td>";?>

	</tr>
	
	<?php $i++;} ?>
  </table>
  

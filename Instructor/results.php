 <?php
 
 extract($_POST);
 ?>
<div class="table-responsive">
  <table class="table">
   	<caption><h4 style="color:yellow" align="center">Students  Results</h4></caption>
	   	<tr class="info">
		<th colspan="6"><a href="index.php?option=add_results" title="send message to other instructor">Add New Results </a></th>
		</tr>
		<tr class="success">
		<th>Sr. No</th>
		<th>Student</th>
		<th>Subject</th>
		<th>Marks</th>
		<th>Delete</th>
		</tr>
<?php
$que=mysqli_query($con,"select * from  results where instructor_id='".$inst['id']."'");
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
		

<td>
<?php 

$msgid= $row[0];

?>
<?php echo "<a href='delete_attendance.php?result_id=$msgid'><span class='glyphicon glyphicon-remove' style='color:red' aria-hidden='true'></span></a></td>";?>

	</tr>
	
	<?php $i++;} ?>
  </table>
  

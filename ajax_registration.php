 <?php 
 require('config.php');
 extract($_POST);
 extract($_GET);
if(!empty($email))
 {
 //student
 	
	if($usertype==1)
	{
	 $que=mysqli_query($con,"select email from student where email='$email'");
	 $row= mysqli_num_rows($que);
	 if($row)
	 {
	echo "<span class='glyphicon glyphicon-exclamation-sign' style='color:red'></span> <font color='red'>Sorry! Email already exists</font>";
	 }
	 else
	 { 
	 $pass=md5($pass);
	  $course=implode(",",$course);
	 mysqli_query($con,"insert into student values('','$username','$email','$pass','$mobile','$gen','$prog','$course','1')");
	 
	echo "<span class='glyphicon glyphicon-exclamation-sign' style='color:green'></span>
	<font color='green'>Congrats ! Your account has been created Successfully, admin will review and activate it soon.</font>";
	 }
	 }
	 
	//Instructor
	if($usertype==2){
	 $que=mysqli_query($con,"select email from instructor where email='$email'");
	 $row= mysqli_num_rows($que);
	 if($row)
	 {
	echo "<span class='glyphicon glyphicon-exclamation-sign' style='color:red'></span> <font color='red'>Sorry! Email already exists</font>";
	 }
	 else
	 {
	 $pass=md5($pass);
	 $course=implode(",",$course);
	 mysqli_query($con,"insert into instructor values('','$username','$email','$pass','$mobile','$gen','$prog','$course','1')");
	echo "<span class='glyphicon glyphicon-exclamation-sign' style='color:green'></span>
	<font color='green'>Congrats sir/mam! Your account has been created Successfully, admin will review and activate it soon.</font>";
	 }
	 }
	 
 
 }
 ?>

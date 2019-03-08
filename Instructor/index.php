<?php
session_start();
error_reporting(1);
require("../config.php");
 extract($_SESSION);
 if($staff=="")
 {
 header('location:../index.php');
 }
$q=mysqli_query($con,"select * from instructor where email='".$staff."'"); 
$inst= mysqli_fetch_array($q);
 
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Instructor Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  
    <![endif]-->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   
  </head>

  <body style="background-image:url('../img/Background for admin, teacher and student.jpg')">

    <nav class="navbar navbar-inverse navbar-fixed-top" style="background:#f5f5f5;border-bottom:1px solid #ccc">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar" style="background-color: black !important;"></span>
            <span class="icon-bar" style="background-color: black !important;"></span>
            <span class="icon-bar" style="background-color: black !important;"></span>
          </button>
          <a class="navbar-brand" href="index.php" style="color:#337ab7"><?php echo "Hello  ".$inst['name']."  !";?></a>
        
	
		
		</div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
		
		<?php 
		if(file_exists("img/$staff"))
		{
		$arr=scandir("img/$staff");
		$img=$arr[2];
		$path="img/".$staff."/".$img;
		?>
		<li><a href="index.php?option=upload_profile_pic" style="color:#337ab7"><img style="border-radius:20px" src="<?php echo $path;?>" width="30" height="30"/></a></li>
		<?php 
		}else{
		?>
		
		<li><a href="index.php?option=upload_profile_pic" style="color:#337ab7"><img src="img/user.png" style="border-radius:20px" width="30" height="30" /></a></li>
            <?php } ?>
		
			
			<li><a href="logout.php" style="color:#337ab7"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
         
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <br/>
		<div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
           
		   <li>
		&nbsp;&nbsp;&nbsp;<img src="../img/Teacher Image.png" style="width:100px;" class="img img-rounded"/>
			</li>
		   
		    <li>
		
            
			
			
			<li><a href="index.php?option=take_attendance" title="take today's attendance "><span class="glyphicon glyphicon-list-alt"></span> Take attendances</a></li>	
			
			<li><a href="index.php?option=view_attendance" title="View all attendance "><span class="glyphicon glyphicon-list-alt"></span> View attendances</a></li>
					
		
			
	<li><a href="index.php?option=notification" title="Check notification given by admin"><span class="glyphicon glyphicon-bell" ></span> Notification from Admin</a></li>
	
	
	<li><a href="index.php?option=results" title="Manage Students Results"><span class="glyphicon glyphicon-education"></span> Results</a></li>
	
		<li><a href="index.php?option=sent_message_student" title="Manage Students Results"><span class="glyphicon glyphicon-indent-right" ></span> Sent Messages to Students</a></li>	
			
			
			<li><a href="index.php?option=update_password" title="Update Password"><span class="glyphicon glyphicon-lock"></span> Change Password</a></li>
			
		<li><a href="index.php?option=profile" title="Profile info"><span class="glyphicon glyphicon-cog"></span> Profile</a></li>
			
			<li>
			
			
			</li>
			<!--
			<li><a href="index.php?option=inbox">Inbox</a></li>
			<li><a href="index.php?option=sent">Sent</a></li>
			-->
			
          </ul>
          
        </div>
		<!-- sidebar end-->
        <br/>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        

		
			<?php 
			$option=$_REQUEST['option'];
			if($option!="")
			{
			
				
				
				if($option=="view_attendance")
				{	
				include('view_attendance.php');
				}
				
				if($option=="results")
				{	
				include('results.php');
				}
				if($option=="add_results")
				{	
				include('add_results.php');
				}
				if($option=="sent_message_student")
				{	
				include('sent_message_student.php');
				}
				
				if($option=="view_attendance_details")
				{	
				include('view_attendance_details.php');
				}
				
					
				if($option=="take_attendance")
				{
				include('take_attendance.php');
				}
				
				
				
				
				if($option=="upload_course_material")
				{
				include('upload_course_material.php');
				}
			
				
				
				if($option=="update_password")
				{
				include('update_password.php');
				}
				
				if($option=="update_profile")
				{
				include('update_profile.php');
				}
				
				if($option=="upload_profile_pic")
				{
				include('upload_profile_pic.php');
				}
				
				
				if($option=="notification")
				{
				include('notification.php');
				}
				if($option=="add_sent_message")
				{
				include('add_sent_message.php');
				}
				if($option=="profile")
				{
				include('profile.php');
				}
				
				
			}else{?>
			 <h1 class="page-header" style="color:#00FF00">Students Assigned</h1>
          <div class="table  table-responsive">
  <table class="table">
	   	<tr class="info">
		<th>Sr. No</th>
		<th>Student Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Program</th>
		
	</tr>
<?php
$que1=mysqli_query($con,"select * from  student");
$k=0;
while($res1=mysqli_fetch_array($que1))
{

	foreach(explode(",",$res1['course']) as $val)
	{
	
		if($val==$inst['course'])
		{
		//echo $res1['name']." ";
		//echo $res1['email']." ";
		?>
		
		<tr  class="active">
		<Td><?php echo $k+1;?></Td>
		<!-- for student name -->
		<Td>
		<?php 
		
		echo $res1['name'];
		?>
		</Td>
		
		<Td>
		<?php 
	
		echo $res1['email'];
		?>
		</Td>
		<Td>
		<?php 
	
		echo $res1['mob'];
		?>
		</Td>
		<Td>
		<?php 
	
		echo $res1['program'];
		?>
		</Td>
		
	</tr>
		<?php 
		$k++;
		}
		
	}
	
}

?>
<h4 align="left"><font color="white"> Total number of students assigned to you :  <?php echo $k; ?> </font>  </h4>
  </table>
  

          
		  <?php }?>
		  
        </div>
      </div>
    </div>

			
			
		
		  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

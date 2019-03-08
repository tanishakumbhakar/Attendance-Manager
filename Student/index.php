<?php
session_start();
error_reporting(1);
require("../config.php");
 extract($_SESSION);
 if($student=="")
 {
 header('location:../index.php');
 }
$q=mysqli_query($con,"select * from student where email='".$student."'"); 
$stu= mysqli_fetch_array($q);

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

    <title>Student Dashboard</title>

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
          <a class="navbar-brand" href="#" style="color:#337ab7"><?php echo "Hello     ".$stu['name']."  !";?></a>
        
	
		
		</div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
		
		<?php 
		if(file_exists("img/$student"))
		{
		$arr=scandir("img/$student");
		$img=$arr[2];
		$path="img/".$student."/".$img;
		?>
		<li><a title="Upload Profile pic" href="index.php?option=upload_profile_pic" style="color:#FFFFFF"><img style="border-radius:20px" src="<?php echo $path;?>" width="30" height="30"/></a></li>
		<?php 
		}else{
		?>
		
		<li><a title="Upload Profile pic" href="index.php?option=upload_profile_pic" style="color:#FFFFFF"><img src="img/user.png" style="border-radius:20px" width="30" height="30" /></a></li>
            <?php } ?>
		
			
			<li><a  href="logout.php" style="color:#337ab7"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
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
		&nbsp;&nbsp;&nbsp;<img src="../img/Student.jpg" style="width:120px;" class="img img-rounded"/>
			</li>
			
			<li>
			<a style="text-decoration:underline" href="index.php"><strong>Dashboard</strong> <span class="sr-only">(current)</span></a></li>   
			
			
		
			
	
			<li><a href="index.php?option=results" title="view Reults"><span class="glyphicon glyphicon-education"></span> View Results</a></li>
			
			
			
			<li><a href="index.php?option=inbox" title="inbox"><span class="glyphicon glyphicon-star-empty" ></span> Inbox</a></li>	
			
			
			
			<li><a href="index.php?option=update_password" title="Update Password"><span class="glyphicon glyphicon-lock"></span> Change Password</a></li>
			
		
			<li><a href="index.php?option=profile" title="Profile info"><span class="glyphicon glyphicon-cog"></span> Profile</a></li>
			
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
			
				
				
				
				
				if($option=="results")
				{	
				include('results.php');
				}
				if($option=="sent")
				{	
				include('sent.php');
				}
				
				if($option=="inbox")
				{	
				include('inbox.php');
				}
				
				
				if($option=="update_password")
				{
				include('update_password.php');
				}
				
				if($option=="profile")
				{
				include('profile.php');
				}
				
				if($option=="upload_profile_pic")
				{
				include('upload_profile_pic.php');
				}
				
				
				
				
				
				
			}else{
			?>
			 <h1 class="page-header" style="color:white;" >Student  Dashboard</h1>
          <div class="row placeholders">
            
			
			 <div class="row">
<div class="col-sm-10">


	 
	
	 
  <div class="form-group">
 

  <table class="table table-responsive table-hover">
                      <tr class="info">
					  <td colspan="6">
					  <span class="glyphicon glyphicon-check"> <b>View Attendance for all</b></span>
					  </td>
                            <tr class="danger">
                                <th>
                                    Sr. No.
                                </th>
                                <th>
                                  Teacher Name
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
								
								</tr> 
    <?php
	
$query=mysqli_query($con,"select * from instructor");

					  $i=1;
					  echo "<form method='post'>";
					   while($rows=mysqli_fetch_array($query))
					   { // echo $rows['student_name'];
						
						   $que=mysqli_query($con,"select * from attendance where super_id='".$rows['id']."' and stu_id='".$stu['id']."' ");
						  $que_att=mysqli_query($con,"select * from attendance where super_id='".$rows['id']."' and stu_id='".$stu['id']."' and attendance='P' ");
						  $total=mysqli_num_rows($que);
						   $present=mysqli_num_rows($que_att);
							$absent=mysqli_num_rows($que)-mysqli_num_rows($que_att);		
							$perc=($present/$total)*100;	
						   
	echo "<td class='active'>".$i++."</td>";
	
echo "<td class='active'>".$rows['name']."</td>";
echo "<td class='active'>".mysqli_num_rows($que_att)."</td>";


echo "<td class='active'>".$absent."</td>";
echo "<td class='active'>".$perc."</td>";
					
	echo "</tr>";				
						                                                     
					   }
				
			?>
					  </tbody>
					  </table>
  
 	 
   
<br/>
</form>		

	</div>
</div>

	</div>	
	
	
	
	
	
	

			

	
	
          </div>

          
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

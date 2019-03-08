<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<style>
		body {
  padding-top: 70px;
  padding-bottom: 30px;
}

.theme-dropdown .dropdown-menu {
  position: static;
  display: block;
  margin-bottom: 20px;
}

.theme-showcase > p > .btn {
  margin: 5px 0;
}

.theme-showcase .navbar .container {
  width: auto;
}
	
.panel {
    margin-bottom: 20px;
    background-color: #fff;
border: 1px solid #F2F3F3;
   }

*{margin:0px}

#display
{
width:250px;
display:none;
float:right; margin-right:60px;
border-left:solid 1px #dedede;
border-right:solid 1px #dedede;
border-bottom:solid 1px #dedede;
overflow:hidden;
}
.display_box
{
color:#222;
border-top:solid 1px #dedede; 
font-size:12px; 
height:30px;
overflow:hidden;
}
.display_box:hover
{
background-color:#284761;
color:#FFF;
}
</style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Attendance Manager</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

   

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
</head>

  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
        <a class="navbar-brand" href="index.php" >Attendance Manager</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php" ><span class="glyphicon glyphicon-home">Home</span></a></li>
         
			
			<li><a href="index.php?option=about"  ><span class="glyphicon glyphicon-book">About Us</span></a></li>
            <li><a href="index.php?option=contact" ><span class="glyphicon glyphicon-envelope">Contact Us</span></a></li>
            
          </ul>
		   <ul class="nav navbar-nav navbar-right">
                       
					<li>
			<a href="index.php?option=login"  >
			<span class="glyphicon glyphicon-lock"></span>Sign In</a>
		</li>    
			
		<li>
			<a  href="#" data-toggle="modal" data-target="#m" style="color:#fff">
			<span class="glyphicon glyphicon-pencil"></span>Sign Up</a>
		</li>
			
			</ul>			
        </div>
      </div>
    </nav>

<div class="row">
<div class="col-lg-12">
    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
	  <?php 
	  @$opt=$_REQUEST['option'];
	  if($opt!="")
	  {
		if($opt=="newuser")
		{
		include('registration.php');
		}
		
		if($opt=="login")
		{
		include('ajax_login.php');
		}
		
		if($opt=="about")
		{
		include('about.php');
		}
		if($opt=="contact")
		{
		include('contact.php');
		}
		
	  }else{
	  ?>
	  <!---------------------slider----------------------->
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
     
     
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/download.jpg" style="width:1300px;height:400px;border:1px solid #000">
      </div>

      <div class="item">
        <img src="img/12.png" style="width:1300px;height:400px;border:1px solid #000">
      </div>
    
      <div class="item">
        <img src="img/13.jpg" style="width:1300px;height:400px;border:1px solid #000">
      </div>

    </div>
    
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="row">
  <div class="col-sm-1">  
  
  </div>
   <div class="col-sm-10">   
 <h2 align="center" class="text-primary">Welcome to Online Attendance Manager </h2>
<br/>
	 <p><strong><em> Dear user,</em></strong></p>     
Track, and Report Attendance Online!
Setting up students and classes is very easy and you can be off and running in no time at all. Tracking is entirely web-based so you can enter data from anywhere you can access the internet!<br/>

Attendance Reporting You'll Love!
You will have a variety of reports at your fingertips. You can view and print in depth reports by student or class and export them to Excel or download and share via PDF.
     
	 <br/>  
This is a portal that will be highly useful for the students and teachers who need to keep a minimum necessary attendance.<br/>


 
This portal will help the students to keep a track of their present attendance per subject and teachers in their taught subjects.<br/>
	 </div>
	</div>
	
	
  </div>
  
</div>
	  
	  
	   
	  
<?php }?>


<br / > <br />    
      <div class="row">
    

	
      </div>
    </div> <!-- /container -->
	

	

	
	
  <div class="nav navbar navbar-fixed-bottom bg-primary" style="padding-top:10px;color:#fff">
               <div class="row">
			   <div class="col-lg-1"></div>
			   <div class="col-lg-10">
			   			    	    <span><a style="color:#FFFFFF" href="#">Developed By Tanisha</a></span>
				<span style="float:right;"><a href="https://www.youtube.com/channel/" target="_blank"><img src="img/youtube.png" width="38" height="38"></a></span>
                <span style="float:right;"><a href="" target="_blank"><img src="img/linkedin.png" width="38" height="38"></a></span>
                <span style="float:right;"><a href="" target="_blank"><img src="img/twitter.png" width="38" height="38"></a></span>
                 <span style="float:right;"><a href="https://www.facebook.com/profile.php?id=100010670734414" target="_blank"><img src="img/facebook.png" width="38" height="38"></a></span>
    </div>
    </div>
    </div>
	
	</div>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<!-- registration model start -->


 
   		<?php  include('registration.php'); ?>

     <script src="jquery-1.11.2.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
	


	
	<script>
	
	$(document).ready(function(){
					$("#err1").hide();
			$("#save").click(function()
			{
		
					var username =$('#username').val();
					var email =$('#email12').val();
					var pass =$('#pass123').val();
					var mob =$('#mob').val();
					var gen =$('#gender').val();
					var prog =$('#program').val();
			var course = [];
        $(':checkbox:checked').each(function(i){
          course[i] = $(this).val();
        });
		
		//alert(course);
					
					
					
                    var usertype =$('#usertype').val();
//	alert(mob);
var dataString = 'username='+ username + '&email='+ email+'&pass='+pass+'&mobile='+mob+'&gen='+gen+'&prog='+prog+'&course[]='+course+'&usertype='+usertype ;
//alert(dataString);
	if(email==''|| pass==''|| username=='' || mob=='' || gen=='' || prog=='' || course=='' || usertype=='')
   {
   		$("#err1").show();
    	$("#err1").html("Fill all the details before you submit. ");
	}
	else
	{

// AJAX Code To Submit Form.
	$.ajax({
	type: "POST",
	url: "ajax_registration.php",
	data: dataString,
	cache: false,
	success: function(result){

	$('#err1').html(result);
	$("#err1").hide().slideDown();
			  		setTimeout(function(){
				  	$("#err1").hide();        
			  }, 3000);
			
	}
	});
	}
return false;
		
		
		});
	
	});
		</script>


	</body>
</html>


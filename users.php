<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="userstyle.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>
<body>
<?php
session_start();
$host='localhost';
$user='root';
$pass='';
//DataBase Connecivity
$con=mysql_connect($host,$user,$pass);
$db=mysql_select_db('testdb',$con);
$id=$_SESSION["id"];
$sqls=mysql_query("SELECT * FROM UserCrediantails WHERE id=$id");
if(mysql_num_rows($sqls)>0)
{
	 $row = mysql_fetch_array($sqls);
     $unid=$row['id'];
	 $name=$row['name'];
	 $uname=$row['username'];
	 $email=$row['emailid'];
	 $mobileno=$row['mobilno'];
	 $dob=$row['dob'];
	 $qualification=$row['qualification'];
	 $password=$row['password'];
?>
 <center><h3>Your Detatils</h3></center>
 <table class="table table-bordered table-hover">
	  <tr><th>Your Id</th><td><?php echo $unid;?></td></tr>
	  <tr><th>Your Name</th><td><?php echo $name;?></td></tr>
	  <tr><th>Your Username</th><td><?php echo $uname;?></td></tr>
	  <tr><th>Your Email</th><td><?php echo $email;?></td></tr>
	  <tr><th>Your mobileno</th><td><?php echo $mobileno;?></td></tr>
	  <tr><th>Your Date of Birth</th><td><?php echo $dob;?></td></tr>
	  <tr><th>Your Qualification</th><td><?php echo $qualification;?></td></tr>
	  <tr><th>Your Password</th><td><?php echo $password;?></td></tr>
</table>
<center><h1>Select your Dream Jobs</h1></center>
<div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="http://placehold.it/1500x300/16a085/ffffff&text=Software Jobs">
                <div class="carousel-caption">
                    <h4>Amazon,Flipcart etc</h4>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="http://placehold.it/1500x300/e67e22/ffffff&text=Hardware jobs">
                <div class="carousel-caption">
                    <h4>Wipro,Cisco etc</h4>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="http://placehold.it/1500x300/2980b9/ffffff&text=Electrical Jobs">
                <div class="carousel-caption">
                    <h4>Hundayi,Tech Machendira etc</h4>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="http://placehold.it/1500x300/8e44ad/ffffff&text=IT Jobs">
                <div class="carousel-caption">
                    <h4>Infosys, TCS, Capgemini etc</h4>
                </div>
            </div>
            <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->
        <ul class="nav nav-pills nav-justified nav-tabs">
            <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#soft">Software Jobs</a></li>
            <li data-target="#myCarousel" data-slide-to="1"><a href="#hard">Hardware Jobs</a></li>
            <li data-target="#myCarousel" data-slide-to="2"><a href="#elect">Electrical Jobs</a></li>
            <li data-target="#myCarousel" data-slide-to="3"><a href="#it">IT Jobs</a></li>
		   <div class="tab-content">
			   <div id="soft" class="tab-pane fade in active">
			   <h1>Welcome To the Software jobs</h1>
			        <?php 
						  $sqlsoftware=mysql_query("select * from jobportal");
								 $row = mysql_fetch_array($sqlsoftware);
								 $filled=$row['software'];
								 $total=10;
								 $remaining=$total-$filled;
				     ?>
							<marquee><h2>***Availabilty of a job for a selected filed  remaining <?php echo $remaining;?>****</h2></marquee>
				    <?php if($remaining<=10 && $remaining>0) {?>			
					<h2>You can Apply for this job</h2>
					<center>
						<form action="apply.php" method="post">
						     <label>YourId: </label><input type="text" name="usrid" value="<?php echo $unid; ?>" readonly onclick="alert('You cant modify This field');" />
							 <input type="hidden" name="jobtype" value="Applied for software"/>
						     <input type="submit" class="btn btn-primary" value="Apply"/>
						</form>
					</center>
					<?php }else {?>
					<h2>There are No vacancies TO apply this Job . Refer Another One</h2>
					<?php } ?>
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			   </div>
			   <div id="hard" class="tab-pane fade">
					<h1>Welcome To the Hardware jobs</h1>
			        <?php 
						  $sqlsoftware=mysql_query("select * from jobportal");
								 $row = mysql_fetch_array($sqlsoftware);
								 $filled=$row['hardware'];
								 $total=10;
								 $remaining=$total-$filled;
				     ?>
							<marquee><h2>***Availabilty of a job for a selected filed  remaining <?php echo $remaining;?>****</h2></marquee>
				    <?php if($remaining<=10 && $remaining>0) {?>			
					<h2>You can Apply for this job</h2>
					<center>
						<form action="apply.php" method="post">
						    <label>YourId: </label><input type="text" name="usrid" value="<?php echo $unid;?>"readonly onclick="alert('You cant modify This field');" />
							 <input type="hidden" name="jobtype" value="Applied for hardware"/>
						     <input type="submit" class="btn btn-primary" value="Apply"/>
						</form>
					</center>
					<?php }else {?>
					<h2>There are No vacancies TO apply this Job . Refer Another One</h2>
					<?php } ?>
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			   </div>
			   <div id="elect" class="tab-pane fade">
                    <h1>Welcome To the Electrical jobs</h1>
			        <?php 
						  $sqlsoftware=mysql_query("select * from jobportal");
								 $row = mysql_fetch_array($sqlsoftware);
								 $filled=$row['electrical'];
								 $total=10;
								 $remaining=$total-$filled;
				     ?>
							<marquee><h2>***Availabilty of a job for a selected filed  remaining <?php echo $remaining;?>****</h2></marquee>
				    <?php if($remaining<=10 && $remaining>0) {?>			
					<h2>You can Apply for this job</h2>
					<center>
						<form action="apply.php" method="post">
						    <label>YourId: </label> <input type="text" name="usrid" value="<?php echo $unid;?>" readonly onclick="alert('You cant modify This field');" />
							 <input type="hidden" name="jobtype" value="Applied for electrical"/>
						     <input type="submit" class="btn btn-primary" value="Apply"/>
						</form>
					</center>
					<?php }else {?>
					<h2>There are No vacancies TO apply this Job . Refer Another One</h2>
					<?php } ?>
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			   </div>
			   <div id="it" class="tab-pane fade">
			        <h1>Welcome To the IT jobs</h1>
			        <?php 
						  $sqlsoftware=mysql_query("select * from jobportal");
								 $row = mysql_fetch_array($sqlsoftware);
								 $filled=$row['it'];
								 $total=10;
								 $remaining=$total-$filled;
				     ?>
							<marquee><h2>***Availabilty of a job for a selected filed  remaining <?php echo $remaining;?>****</h2></marquee>
				    <?php if($remaining<=10 && $remaining>0) {?>			
					<h2>You can Apply for this job</h2>
					<center>
						<form action="apply.php" method="post">
						    <label>YourId: </label> <input type="text" name="usrid" value="<?php echo $unid;?>" readonly  onclick="alert('You cant modify This field');"/>
							 <input type="hidden" name="jobtype" value="Applied for it"/>
						     <input type="submit" class="btn btn-primary" value="Apply"/>
						</form>
					</center>
					<?php }else {?>
					<h2>There are No vacancies TO apply this Job . Refer Another One</h2>
					<?php } ?>
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			   </div>
		  </div>
        </ul>
		<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>
    </div>
    <!-- End Carousel -->
</div>
<script type="text/javascript">
$(document).ready( function() {
    $('#myCarousel').carousel({
    	interval:   4000
	});
	
	var clickEvent = false;
	$('#myCarousel').on('click', '.nav a', function() {
			clickEvent = true;
			$('.nav li').removeClass('active');
			$(this).parent().addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.nav').children().length -1;
			var current = $('.nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.nav li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
});
</script>
<?php
}
?>
</body>
</html>
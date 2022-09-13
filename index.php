<!Doctype HTML>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/d80af19677.js" crossorigin="anonymous"></script>
	</head>


	<body>
		
		

	<div id="mySidenav" class="sidenav">
		<p class="logo"><span>Med</span>Center</p>
		<a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i> Dashboard</a>
		<a href="#" class="icon-a">
			<i class="fas fa-file-invoice"></i> Billing</a>
		<a href="#" class="icon-a"><i class="fa fa-calendar-check-o"></i> Appointment</a>
		<a href="#" class="icon-a"><i class="fas fa-stethoscope"></i> OPD - Out Patient</a>
		<a href="#" class="icon-a"><i class="fas fa-mortar-pestle"></i> IPD - In Patient</a>
		<a href="#" class="icon-a"><i class="fas fa-flask"></i> Pharmacy</a>
		<a href="#" class="icon-a"><i class="fas fa-microscope"></i>
			Pathology</a>
		<a href="radiology.php" class="icon-a">
			<i class="fa-solid fa-x-ray"></i> Radiology</a>
		<a href="#" class="icon-a"><i class="fas fa-tint"></i> Blood Bank</a>
		<a href="#" class="icon-a"><i class="fas fa-ambulance" aria-hidden="true"></i>Ambulance</a>
		<!-- <a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> Front Office</a>
		<a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> Birth & Death Record</a>
		<a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> Human Resource</a>
		<a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> Referral</a>
		<a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> TPA Management</a>
		<a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> Finance</a>
		<a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> Messaging</a>
		<a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> Inventory</a>
		<a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> Download Center</a>
		<a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> Certificate</a>
		<a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> Front CMS</a>
		<a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> Live Consultation</a>
		<a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> Reports</a>
		<a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> Setup</a> -->
	</div>



	<div id="main">

		<div class="head">
			<div class="col-div-6">
	<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >☰ Dashboard</span>
	<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >☰ Dashboard</span>
	</div>
		
 
		<div class="clearfix"></div>
	</div>

		<div class="clearfix"></div>
		<br/>
		
		<div class="col-div-3">
			<div class="box">
				<p>+140<br/><span>Doctors At Work</span></p>
				<i class="fa-solid fa-user-doctor box-icon"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
				<p>1040+<br/><span>Satisfied Patients</span></p>
				<i class="fa-solid fa-bed box-icon"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
				<p>500+<br/><span>Bed Facility</span></p>
				<i class="fa-sharp fa-solid fa-bed-pulse box-icon"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
				<p>80+<br/><span>Available Hospitals</span></p>
				<i class="fa-solid fa-square-h box-icon"></i>
			</div>
		</div>
		<div class="clearfix"></div>
		<br/><br/>
		<div class="col-div-8">
			<div class="box-8">
			<div class="content-box">
				<p>Our Doctors</p>
				<br/>
				<table>
	  <tr>
	    <th>Doctor</th>
	    <th>Specialization</th>
	    <!-- <th>Country</th> -->
	  </tr>
	  <tr>
	    <td>Ahmed Emara</td>
	    <td>Physiotherapist</td>
	    <!-- <td>Germany</td> -->
	  </tr>
	  <tr>
	    <td>Mahmoud Hamed</td>
	    <td>Radiologist</td>
	    <!-- <td>Mexico</td> -->
	  </tr>
	  <tr>
	    <td>Mostafa Halem</td>
	    <td>Anesthesiologist</td>
	    <!-- <td>Austria</td> -->
	  </tr>
	  <tr>
	    <td>Eslam Mamdoh</td>
	    <td>Gynecologist</td>
	    <!-- <td>UK</td> -->
	  </tr>
	  
	  
	</table>
			</div>
		</div>
		</div>

		<div class="col-div-4">
			<div class="box-4">
			<div class="content-box">
				<p>Services</p>

				<div class="circle-wrap">
	    <div class="circle">
	      <div class="mask full">
	        <div class="fill"></div>
	      </div>
	      <div class="mask half">
	        <div class="fill"></div>
	      </div>
	      <div class="inside-circle"> 24h </div>
	    </div>
	  </div>
			</div>
		</div>
		</div>
			
		<div class="clearfix"></div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>

	  $(".nav").click(function(){
	    $("#mySidenav").css('width','70px');
	    $("#main").css('margin-left','70px');
	    $(".logo").css('visibility', 'hidden');
	    $(".logo span").css('visibility', 'visible');
	     $(".logo span").css('margin-left', '-10px');
	     $(".icon-a").css('visibility', 'hidden');
	     $(".icons").css('visibility', 'visible');
	     $(".icons").css('margin-left', '-8px');
	      $(".nav").css('display','none');
	      $(".nav2").css('display','block');
	  });

	$(".nav2").click(function(){
	    $("#mySidenav").css('width','300px');
	    $("#main").css('margin-left','300px');
	    $(".logo").css('visibility', 'visible');
	     $(".icon-a").css('visibility', 'visible');
	     $(".icons").css('visibility', 'visible');
	     $(".nav").css('display','block');
	      $(".nav2").css('display','none');
	 });

	</script>

	</body>


	</html>
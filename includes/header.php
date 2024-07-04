	
	<?php
// Assuming you have a way to get the current page URL, you can use PHP to determine the active page.
$currentPage = basename($_SERVER['PHP_SELF']);
echo "";
// Gets the name of the current PHP file
?>
    
    <header class="fixed">
		<div class="container">
			<div class="header_top">
				<div class="left">
					<a href="index.php" class="logo"><img src="images/logo_header.png" alt="KMCH Institute of Allied health Sciences"></a>
				</div>
				<div class="right">
					<ul id="main_menu1">
					    <li class="mm_top"><a href="pdf/NIRF/NIRF-2024.pdf" target="_blank">NIRF 2024</a></li>
						<li class="mm_top"><a href="fees-payment.php">Student Fee Payment</a></li>
						<li class="mm_top reg_open"><a href="" class="online_ad_menu">Admission Registrations Open 2024-2025 <br/>
						<span> +91 94428 53333, 89258 33315, 422 2369337 </span></a></li>
						
						<!--<li class="mm_top"><a href="https://admissions.kmch.ac.in/" target="_blank" class="blinking online_ad_menu">Apply Online</a></li>-->
						<li>
							<div class="menuIcon">
							  <div class="bar1"></div>
							  <div class="bar2"></div>
							  <div class="bar3"></div>
								<div class="more_menu" style="display: none;">
									<ul>
										<li><a href="alumni.php">Alumni</a></li>
										<li><a href="http://backbone.kmch.ac.in/" target="_blank">Staff Login</a></li>
										<li><a href="committee.php">Committee</a></li>
										<li><a href="placement.php">Placement Cell</a></li>
										<li><a href="student-circular.php">Student Circular</a></li>
										<li><a href="newsletter.php">Newsletter & Magazine</a></li>
										<li><a href="accreditation-kmcop.php">Accreditation KMCHCOP</a></li>
										<li><a href="http://kmch.ac.in/hostel.php" target="_blank">Hostel</a></li>
										<li><a href="https://www.antiragging.in/" target="_blank">Antiragging Affidavits</a></li>
										<li><a href="https://forms.gle/PpoNUysSPjbG8FHR7" target="_blank">Student Satisfaction Survey</a></li>
										<li><a href="https://forms.gle/hktLtHU1a2DBkgXU7" target="_blank">Parents Feedback Form</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="menuIcon">
		  <div class="bar1"></div>
		  <div class="bar2"></div>
		  <div class="bar3"></div>
		</div>
		<div class="menu">
			<div class="container">
				<ul class="parent">

				
					<li><a class="<?php echo $currentPage ==='index.php'?'active':'';?>" href="index.php">Home</a></li>
					<li><a class="<?php echo $currentPage ==='about-us.php'?'active':'';?>" href="about-us.php">About Us</a>
					</li>
					<li class="has-sub"><a href="#" class="<?php echo ($currentPage ==='programmes.php' || $currentPage ==='departments.php'|| $currentPage ==='mou-s.php'|| $currentPage ==='peo-po.php'|| $currentPage ==='training.php') ?'active':'';?>">Academics <span class="dropdown-toggle"></span></a>
						<ul>
							<li><a href="programmes.php">Programmes</a></li>
							<li><a href="departments.php">Departments</a></li>
							<li><a href="mou-s.php">MoUs</a></li>
							<li><a href="peo-po.php">PEO & PO</a></li>
							<li><a href="training.php">Training</a></li>
						</ul>
					</li>
					<li><a class="<?php echo $currentPage ==='faculty.php'?'active':'';?>" href="faculty.php">Faculty</a></li>
					<li><a class="<?php echo $currentPage ==='infrastructure.php'?'active':'';?>" href="infrastructure.php">Infrastructure</a></li>
					<li><a class="<?php echo $currentPage ==='research.php'?'active':'';?>" href="research.php">Research</a></li>
					<li><a class="<?php echo $currentPage ==='accolades.php'?'active':'';?>" href="accolades.php">Accolades</a></li>
					<li><a class="<?php echo $currentPage ==='activities.php'?'active':'';?>" href="activities.php">Activities</a></li>
					<li><a class="<?php echo $currentPage ==='admission.php'?'active':'';?>" href="admission.php">Admission</a>
					</li>
					<li class="mob_menu"><a href="https://admissions.kmch.ac.in/" target="_blank" >Apply Online</a></li>
					<li class="mob_menu"><a href="https://formbuilder.ccavenue.com/live/ccavenue/kmch/kmch-college-of-pharmacy" target="_blank">Student Fee Payment</a></li>
					<li class="mob_menu"><a href="http://kmch.ac.in/hostel.php" target="_blank">Hostel</a></li>
					<li class="mob_menu"><a href="http://backbone.kmch.ac.in/" target="_blank">Staff Login</a></li>
					<li><a class="<?php echo $currentPage ==='contact.php'?'active':'';?>" href="contact.php">Contact</a></li>
					<li class="mob_menu"><a href="student-circular.php">Student Circular</a></li>
					<li class="mob_menu"><a href="alumni.php">Alumni</a></li>
					<li class="mob_menu"><a href="committee.php">Committee</a></li>
					<li class="mob_menu"><a href="placement.php">Placement Cell</a></li>
					<li class="mob_menu"><a href="newsletter.php">Newsletter & Magazine</a></li>
					<li class="mob_menu"><a href="accreditation-kmcop.php">Accreditation KMCOP</a></li>
					<li class="mob_menu"><a href="https://forms.gle/PpoNUysSPjbG8FHR7" target="_blank">Student Satisfaction Survey</a></li>
					<li class="mob_menu"><a href="https://forms.gle/hktLtHU1a2DBkgXU7" target="_blank">Parents Feedback Form</a></li>
				</ul>
			</div>
		</div>
	</header>

    <script>
        // Output the current page to the console
        console.log("Current Page:", "<?php echo $currentPage; ?>");
    </script>
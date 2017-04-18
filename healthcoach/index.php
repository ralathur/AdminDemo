<?php include("../head.php"); ?> <!-- PHP Include to bring in DOCTYPE, <head> tag info, and very initial HTML -->
<?php include("header2.php"); ?> <!-- PHP Include for the standard Signed In Header -->
	<div class="operator withuser">
		<div class="h6 mbot5">Administrator:</div>
		abarnes@healthmine.com<br />
		<a href="" class="alignleft orange mtop10 button strong mbot20">Logout</a>
	</div>
	<div class="menu">
		<ul>
			<li><a href="healthcoach.php" class="search"><i class="fa fa-home"></i> &nbsp;Home</a></li>
			<li><a class="menuitem active show-coachmembers"><i class="fa fa-group"></i> &nbsp;My Participants</a></li>
			<li><a class="menuitem show-coachprofile"><i class="fa fa-align-justify"></i> &nbsp;My Profile</a></li>
		</ul>
	</div>
</div> <!-- #leftcontainer END -->
<div id="rightcontainer">

	<div class="search-area">
		<?php include("coach-members.php"); ?>		<!-- Member Search Content -->
		<!-- cant find the following -->
		<!-- <?php include("coach-profile.php"); ?> -->	<!-- Advanced Search Content --> 
	</div> <!-- END search area -->
	
	<!-- Sidebar -->
	<div class="bgsidebar"></div>
	<div class="sidebar">
	<div class="infohide" style="display:none;">
		<div class="userinfo mbot20">
			<div class="row mtop5">
				<div class="half alignleft strong">Member:</div>
				<div class="half alignright">Calalsh, Calvin</div>
			</div>
			<div class="row mtop5">
				<div class="half alignleft strong">Member ID:</div>
				<div class="half alignright">005122101</div>
			</div>
			<div class="row mtop5">
				<div class="half alignleft strong">MemberPk:</div>
				<div class="half alignright">269606</div>
			</div>
			<div class="row mtop5">
				<div class="half alignleft strong">Group ID:</div>
				<div class="half alignright">Z3010E0</div>
			</div>
			<div class="row mtop5">
				<div class="half alignleft strong">Effective Date:</div>
				<div class="half alignright">01/01/2015</div>
			</div>
			<div class="row mtop5">
				<div class="half alignleft strong">Gender:</div>
				<div class="half alignright">Male</div>
			</div>
			<div class="row mtop5">
				<div class="half alignleft strong">Date of Birth:</div>
				<div class="half alignright">03/01/1969</div>
			</div>
			<div class="row mtop5">
				<div class="half alignleft strong">Age:</div>
				<div class="half alignright">46</div>
			</div>
			<div class="row mtop5">
				<div class="half alignleft strong">Status:</div>
				<div class="half alignright">Active</div>
			</div>
			
			<div class="row logging mtop10">
				<input id="logging" type="checkbox" />
				<label for="logging" class="logging-text">Turn on diagnostic logging</label>
			</div>
			
			<div class="memberportal">
				<a><img src="images/memberportal-small.png"></img></a>
			</div>
			<div class="row mtop10"><a class="strong">View Member Portal &nbsp;<i class="fa fa-arrow-circle-right"></i></a></div>
			
			
			<div class="row sidechart mtop5 mbot10 bordertop10">
				<div class="heavyweight textaligncenter">Health Action Completion Rate</div>
				<div id="chart-healthactions" style="width:100%; height:100%;"></div>
			</div>
			
			<div class="row sidechart mtop5 bordertop10">
				<div class="heavyweight textaligncenter">eScore</div>
				<div id="chart-activity" style="width:100%; height:100%;"></div>
			</div>
		</div>
	</div>
	
		<div class="operator">
			<div class="h6 mbot5">Coach:</div>
			ShellySmith@acmehealth.com<br />
			<a href="" class="alignleft orange mtop10 button strong">Logout</a>
		</div>
	</div> <!-- .sidebar END -->
	<?php include("time-scrub.php"); ?>	
</div> <!-- END #rightcontainer -->


<?php include("../footer.php"); ?> 
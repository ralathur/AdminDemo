<?php include("head.php"); ?> <!-- PHP Include to bring in DOCTYPE, <head> tag info, and very initial HTML -->
<?php include("header.php"); ?> <!-- PHP Include for the standard Signed In Header -->
	<style>
		.collapsednav{
			width: 52px !important;
    		min-width: 52px !important; 
    		padding-left: 0px !important; 
		}
		.content-area-collapsed{
			left: 52px !important;
		}
		.specialwidth{
			width: 52px !important;
		}
		.svg {
			fill: red;
		}
	</style>
	<div class="menu">
	<style scoped>
		ul li a img {
			width: 19px;
		}
		.navlabel {
			padding-left: 10px;
		}
	</style>
		<div class="">
			<div class="h6 mleft20 mbot5 navlabel" style="padding-left:0">abarnes@healthmine.com</div>
			<div style="padding-left:20px;">
				<a href="index.php" class="search menuitem" style="margin:0; border-bottom: none; color:white"><i class="fa fa-sign-out navlabel"></i> <span class='navlabel'> logout</span></a>
			</div>
		</div>
		<ul id='navlist'style='top: 175px; position: fixed; width: 280px;'>
			<li onclick="collapse()"><a class="search" style="margin:0; border-bottom: none;"><i class="fa fa-bars"></i> <span class='navlabel'> collapse</span></a></li>
			<li><a href="index.php" class="search menuitem"><i class="fa fa-home"></i> <span class='navlabel'> &nbsp;Home</span></a></li>
			<li><a class="active menuitem show-health-profile"><img src="./images/Admin_Icons/health_overview.svg"> <span class='navlabel'> Health Overview</span></a></li>
			<li><a class="menuitem show-goals-activities"><img src="./images/Admin_Icons/goals_and_activities.svg"> <span class='navlabel'> Goals and Activities</span></a></li>
			<li><a class="menuitem show-risks-conditions"><img src="./images/Admin_Icons/risks_and_conditions.svg"> <span class='navlabel'> Risks and Conditions</span></a></li>
			<li><a class="menuitem show-messaging"><img src="./images/Admin_Icons/Messaging.svg"> <span class='navlabel'> Messaging</span></a></li>
			<li><a class="menuitem show-lab"><img src="./images/Admin_Icons/Lab_Test_Results.svg"> <span class='navlabel'> Lab/Test Results</span></a></li>
			<li><a class="menuitem show-override"><img src="./images/Admin_Icons/overrides.svg"> <span class='navlabel'> Overrides &amp; Reasonable <span style=" padding-left: 33px;">Alternatives</span></span></a></li>
			<li><a class="menuitem show-hacredit"><img src="./images/Admin_Icons/health_actions_credit.svg"> <span class='navlabel'> Health Action Credit Form</span></a></li>
			<li><a class="menuitem show-claims-medical"><img src="./images/Admin_Icons/Medical_Claims.svg"> <span class='navlabel'> Medical Claims</span></a></li>
			<li><a class="menuitem show-claims-pharm"><img src="./images/Admin_Icons/Pharmacy_Claims.svg"> <span class='navlabel'> Pharmacy Claims</span></a></li>
			<li><a class="menuitem show-diag"><img src="./images/Admin_Icons/diagnosis.svg"> <span class='navlabel'> Diagnoses</span></a></li>
			<li><a class="menuitem show-proc"><img src="./images/Admin_Icons/Procedures.svg"> <span class='navlabel'> Procedures</span></a></li>
			<li><a class="menuitem show-pd"><img src="./images/Admin_Icons/Program_Details.svg"> <span class='navlabel'> Program Details</span></a></li>
			<li><a class="menuitem show-demo"><img src="./images/Admin_Icons/demographics.svg"> <span class='navlabel'> Demographics</span></a></li>
			<li><a class="menuitem show-family"><img src="./images/Admin_Icons/family.svg"> <span class='navlabel'> Family</span></a></li>
			<li><a class="menuitem show-security"><img src="./images/Admin_Icons/Web_Security.svg"> <span class='navlabel'> Web Security</span></a></li>
			<li><a class="menuitem show-medevents"><img src="./images/Admin_Icons/Other_Events.svg"> <span class='navlabel'> Other Events</span></a></li>
		</ul>
	</div>
	<?php include("time-scrub.php"); ?>	
</div> <!-- #leftcontainer END -->

<div id="rightcontainer">
	<script>
		$(function() {
			$('.show-health-profile').trigger("click");
		});
	</script>

	<?php include("member/health-profile.php"); ?> 		<!-- Healh Profile -->
	<?php include("member/risks-conditions.php"); ?> 	<!-- risks-conditions -->
	<?php include("member/goals-activities.php"); ?>	<!-- goals and activites -->
	<?php include("member/program-details.php"); ?> 	<!-- Program Details -->
	<?php include("member/demographics.php"); ?> 		<!-- Demographics -->
	<?php include("member/family.php"); ?> 				<!-- Family -->
	<?php include("member/security.php"); ?> 			<!-- Security -->
	<?php include("member/messaging.php"); ?> 			<!-- Call Management -->
	<?php include("member/diag.php"); ?> 				<!-- Diagnoses -->
	<?php include("member/proc.php"); ?> 				<!-- Procedures -->
	<?php include("member/claims-medical.php"); ?> 		<!-- Medical Claims -->
	<?php include("member/medevents.php"); ?> 			<!-- Medical Events -->
	<?php include("member/claims-pharm.php"); ?> 		<!-- Pharmacy Events -->
	<?php include("member/lab.php"); ?> 				<!-- Lab / Test Results -->
	<?php include("member/hacredit.php"); ?> 			<!-- Health Action Credit Form -->
	<?php include("member/override.php"); ?> 			<!-- Overrides -->

	<?php include("member/sidebar.php"); ?> 			<!-- sidebar -->	
</div> <!-- END #container -->

<?php include("footer.php"); ?> 
<script>
$( document ).ready( function () {
	collapse= function() {
		$('.navlabel').toggle();
		$('#leftcontainer').toggleClass('collapsednav');
		$('.content-area').toggleClass('content-area-collapsed');
		$('#navlist').toggleClass('specialwidth');
	}
});
</script>
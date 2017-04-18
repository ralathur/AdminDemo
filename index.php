<?php include("head.php"); ?> <!-- PHP Include to bring in DOCTYPE, <head> tag info, and very initial HTML -->
<?php include("header.php"); ?> <!-- PHP Include for the standard Signed In Header -->
<script type="text/javascript" src="js/charts-dashboard.js"></script>	
	<div class="menu">
		<div class="">
			<div class="h6 mleft20 mbot5">abarnes@healthmine.com</div>
			<div style="padding:20px; padding-top: 0px">
				<a href="index.php" class="search menuitem" style="margin:0; border-bottom: none; color:white"><i class="fa fa-sign-out navlabel"></i> <span class='navlabel'> logout</span></a>
			</div>
		</div>
		<ul style="top: 175px; position: fixed; width: 280px;">
			<li><a href="index.php" class="search"><i class="fa fa-home"></i> &nbsp;Home</a></li>
			<li><a class="menuitem active show-client"><i class="fa fa-dashboard"></i> &nbsp;Dashboard</a></li>
			<li><a class="menuitem show-gaps"><i class="fa fa-exclamation-circle "></i> &nbsp;Gaps In Care</a></li>
			<li><a class="menuitem show-memsearch"><i class="fa fa-search"></i> &nbsp;Member Search</a></li>
			<li><a class="menuitem show-advsearch"><i class="fa fa-search"></i> &nbsp;Clinical Search</a></li>
			<li><a class="menuitem show-mcc"><i class="fa fa-envelope-square"></i> &nbsp;Message Center Campaigns</a></li>
			<li><a class="menuitem show-incentive"><i class="fa fa-credit-card"></i> &nbsp;Incentive Management</a></li>
		</ul>
	</div>
	<?php include("time-scrub.php"); ?>	
</div> <!-- #leftcontainer END -->
<div id="rightcontainer">

	<div class="search-area" style="right: 0;">
		<?php include("client-dashboard.php"); ?>       <!-- Client Dashboard Content -->
		<?php include("member-search.php"); ?>      <!-- Member Search Content -->
		<?php include("clinical-search.php"); ?>    <!-- Advanced Search Content -->                
		<?php include("message-center-campaigns.php"); ?>   <!-- Message Center Campaigns Content -->               
		<?php include("incentive-management.php"); ?>   <!-- Message Center Campaigns Content -->
		<?php include("gaps-in-care.php"); ?>
	</div> <!-- END search area -->
	
	
</div> <!-- END #rightcontainer -->


<?php include("footer.php"); ?> 

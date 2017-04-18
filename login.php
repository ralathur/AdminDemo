<?php include("head.php"); ?> <!-- PHP Include to bring in DOCTYPE, <head> tag info, and very initial HTML -->
<?php include("header.php"); ?> <!-- PHP Include for the standard Signed In Header -->

	<div class="menu">
		<ul>
			<li><a class="menuitem active show-memsearch">Login</a></li>
		</ul>
	</div>
</div> <!-- #leftcontainer END -->
<div id="rightcontainer">

	<div class="search-area">
	<div class="memSearchContent" >
		<h3 class="area-title memSearchHead">Admin Portal Login</h3>
		<div class="helptext">Please enter your login credentials to continue.</div>
		<div class="row mtop40 field">
			<div class="labelwrap"><label for="operator-memberid">Operator ID:</label></div>
			<div class="fieldwrap"><input name="username" id="operator-memberid" type="text" /></div>
		</div>
		<div class="row field">
			<div class="labelwrap"><label for="operator-password">Password:</label></div>
			<div class="fieldwrap"><input type="password" name="password" id="operator-password" type="text" value=""/></div>
		</div>
		<div class="row field">
			<div class="labelwrap">&nbsp;</div>
			<div class="fieldwrap"><a class="button red searchnow">Login</a></div>
		</div>
		<!--div class="row field">
			<div class="labelwrap">&nbsp;</div>
			<div class="fieldwrap helptext">Need help signing in? <a>Click here</a>.</div>
		</div-->
		
		</div>

	
	
	</div>
	
	<!-- Sidebar -->
	<div class="bgsidebar"></div>
	<div class="sidebar">
		
		
	</div> <!-- .sidebar END -->
	
</div> <!-- END #rightcontainer -->


<?php include("footer.php"); ?> 
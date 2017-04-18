<?php include("head.php"); ?> <!-- PHP Include to bring in DOCTYPE, <head> tag info, and very initial HTML -->
<?php include("header.php"); ?> <!-- PHP Include for the standard Signed In Header -->

	<div class="menu">
		<ul>
			<li><a class="search"><i class="fa fa-search"></i>&nbsp; Search</a></li>
			<li><a class="menuitem active show-memsearch">Member Search</a></li>
			<li><a class="menuitem show-advsearch">Clinical Search</a></li>
		</ul>
	</div>
</div> <!-- #leftcontainer END -->
<div id="rightcontainer">

	<div class="search-area">
	<div class="memSearchContent" >
		<h3 class="memSearchHead area-title">Member Search</h3>
		<div class="helptext">Enter one or more search criteria, then click on the Search button.</div>
		<div class="row mtop40">
			<div class="results search" style="display: block;">
                    <span class="hide errMessage" style="display: none;">Please enter either a member ID, last name, first name, or date of birth, and then click on the Search button.</span>
                    <span class="hide noRecords" style="display: none;">No records in the system match the search criteria.</span>
                    <div class="ui-jqgrid ui-widget ui-widget-content ui-corner-all" id="gbox_SearchResultsGrid" dir="ltr" style="width: 800px;">
					<div class="ui-widget-overlay jqgrid-overlay" id="lui_SearchResultsGrid"></div>
					<div class="loading ui-state-default ui-state-active" id="load_SearchResultsGrid" style="display: none;">Loading...</div><div class="ui-jqgrid-view" id="gview_SearchResultsGrid" style="width: 800px;"><div class="ui-jqgrid-titlebar ui-widget-header ui-corner-top ui-helper-clearfix" style="display: none;"><a role="link" href="javascript:void(0)" class="ui-jqgrid-titlebar-close HeaderButton" style="right: 0px;"><span class="ui-icon ui-icon-circle-triangle-n"></span></a><span class="ui-jqgrid-title"></span></div><div class="ui-state-default ui-jqgrid-hdiv" style="width: 800px;"><div class="ui-jqgrid-hbox"><table class="ui-jqgrid-htable" style="width:800px" role="grid" aria-labelledby="gbox_SearchResultsGrid" cellspacing="0" cellpadding="0" border="0"><thead><tr class="ui-jqgrid-labels" role="rowheader"><th id="SearchResultsGrid_LastName" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 150px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div id="jqgh_SearchResultsGrid_LastName" class="ui-jqgrid-sortable">Last Name<span class="s-ico" style=""><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="SearchResultsGrid_FirstName" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 150px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div id="jqgh_SearchResultsGrid_FirstName" class="ui-jqgrid-sortable">First Name<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="SearchResultsGrid_MemberID" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 100px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div id="jqgh_SearchResultsGrid_MemberID" class="ui-jqgrid-sortable">Member ID<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="SearchResultsGrid_DOB" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 150px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div id="jqgh_SearchResultsGrid_DOB" class="ui-jqgrid-sortable">Date of Birth<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="SearchResultsGrid_Status" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 150px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div id="jqgh_SearchResultsGrid_Status" class="ui-jqgrid-sortable">Status<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="SearchResultsGrid_EmployerName" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 100px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div id="jqgh_SearchResultsGrid_EmployerName" class="ui-jqgrid-sortable">Employer<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="SearchResultsGrid_memberpk" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" style="width: 100px; display: none;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span><div id="jqgh_SearchResultsGrid_memberpk" class="ui-jqgrid-sortable">MemberPk<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th></tr></thead></table></div></div><div class="ui-jqgrid-bdiv" style="height: 50%; width: 800px;"><div style="position:relative;"><div></div><table id="SearchResultsGrid" tabindex="1" cellspacing="0" cellpadding="0" border="0" role="grid" aria-multiselectable="false" aria-labelledby="gbox_SearchResultsGrid" class="ui-jqgrid-btable" style="width: 800px;"><tbody><tr class="jqgfirstrow" role="row" style="height:auto"><td role="gridcell" style="height:0px;width:150px;"></td><td role="gridcell" style="height:0px;width:150px;"></td><td role="gridcell" style="height:0px;width:100px;"></td><td role="gridcell" style="height:0px;width:150px;"></td><td role="gridcell" style="height:0px;width:150px;"></td><td role="gridcell" style="height:0px;width:100px;"></td><td role="gridcell" style="height:0px;width:100px;display:none;"></td></tr><tr id="1" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr"><td role="gridcell" style="text-align:left;" title="Thigpen" aria-describedby="SearchResultsGrid_LastName"><a class="anchorBlue" href="/Admin/AdminMemberDetails.aspx?memId=000000002&amp;memPk=269326">Thigpen</a></td><td role="gridcell" style="text-align:left;" title="Penny" aria-describedby="SearchResultsGrid_FirstName">Penny</td><td role="gridcell" style="text-align:left;" title="000000002" aria-describedby="SearchResultsGrid_MemberID">000000002</td><td role="gridcell" style="text-align:left;" title="01/02/1980" aria-describedby="SearchResultsGrid_DOB">01/02/1980</td><td role="gridcell" style="text-align:left;" title="Active" aria-describedby="SearchResultsGrid_Status">Active</td><td role="gridcell" style="" title="CoHealthOP" aria-describedby="SearchResultsGrid_EmployerName">CoHealthOP</td><td role="gridcell" style="text-align:left;display:none;" title="269326" aria-describedby="SearchResultsGrid_memberpk">269326</td></tr><tr id="2" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr"><td role="gridcell" style="text-align:left;" title="Thigpen" aria-describedby="SearchResultsGrid_LastName"><a class="anchorBlue" href="/Admin/AdminMemberDetails.aspx?memId=000000008&amp;memPk=269332">Thigpen</a></td><td role="gridcell" style="text-align:left;" title="Patrick" aria-describedby="SearchResultsGrid_FirstName">Patrick</td><td role="gridcell" style="text-align:left;" title="000000008" aria-describedby="SearchResultsGrid_MemberID">000000008</td><td role="gridcell" style="text-align:left;" title="01/03/1980" aria-describedby="SearchResultsGrid_DOB">01/03/1980</td><td role="gridcell" style="text-align:left;" title="Active" aria-describedby="SearchResultsGrid_Status">Active</td><td role="gridcell" style="" title="CoHealthOP" aria-describedby="SearchResultsGrid_EmployerName">CoHealthOP</td><td role="gridcell" style="text-align:left;display:none;" title="269332" aria-describedby="SearchResultsGrid_memberpk">269332</td></tr></tbody></table></div></div></div><div class="ui-jqgrid-resize-mark" id="rs_mSearchResultsGrid">&nbsp;</div><div id="pager" class="jqPager ui-state-default ui-jqgrid-pager ui-corner-bottom" dir="ltr" style="width: 800px;"><div id="pg_pager" class="ui-pager-control" role="group"><table cellspacing="0" cellpadding="0" border="0" class="ui-pg-table" style="width:100%;table-layout:fixed;height:100%;" role="row"><tbody><tr><td id="pager_left" align="left"></td><td id="pager_center" align="center" style="white-space: pre; width: 294px;"><table cellspacing="0" cellpadding="0" border="0" style="table-layout:auto;" class="ui-pg-table"><tbody><tr><td id="first_pager" class="ui-pg-button ui-corner-all ui-state-disabled" style="cursor: default;"><span class="ui-icon ui-icon-seek-first"></span></td><td id="prev_pager" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-prev"></span></td><td class="ui-pg-button ui-state-disabled" style="width:4px;"><span class="ui-separator"></span></td><td dir="ltr">Page <input class="ui-pg-input" type="text" size="2" maxlength="7" value="0" role="textbox"> of <span id="sp_1_pager">1</span></td><td class="ui-pg-button ui-state-disabled" style="width:4px;"><span class="ui-separator"></span></td><td id="next_pager" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-next"></span></td><td id="last_pager" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-end"></span></td><td dir="ltr"><select class="ui-pg-selbox" role="listbox"><option role="option" value="5">5</option><option role="option" value="10" selected="selected">10</option><option role="option" value="20">20</option></select></td></tr></tbody></table></td><td id="pager_right" align="right"></td></tr></tbody></table></div></div></div>
                    
                </div>
		</div>
		

		
		<div class="row mtop20">
			<table>
				<tr>
					<th>Member ID</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Date of Birth</th>
					<th>Status</th>
					<th>Employer</th>
				</tr>
				<tr>
					<td><a href="member.php">0022222200</a></td>
					<td><a href="member.php">Smith</a></td>
					<td>John</td>
					<td>03/01/1969</td>
					<td>Active</td>
					<td>MetroCity Bakery</td>
				</tr>
				<tr>
					<td><a href="member.php">0022222202</a></td>
					<td><a href="member.php">Smith</a></td>
					<td>David</td>
					<td>06/01/1995</td>
					<td>Active</td>
					<td>MetroCity Bakery</td>
				</tr>
				<tr>
					<td><a href="member.php">0022222201</a></td>
					<td><a href="member.php">Smith</a></td>
					<td>James</td>
					<td>08/01/1965</td>
					<td>Active</td>
					<td>MetroCity Bakery</td>
				</tr>
			</table>
		</div>
		</div>

	
	<div class="row advanced-search">
	<div class="advSearchContent" style="display:none;">
		<h3 class="advSearchHead area-title">Clinical Search</h3>
		<div class="helptext">Enter one or more search criteria, then click on the Search button.</div>
		<!--div class="row mtop40">
			<div class="labelwrap"><label>Saved Queries</label></div>
			<div class="fieldwrap">
				<select name="" id="savedQueries" class="w100p">
					<option value="" disabled selected>Select from a list of previously saved queries...</option>
					<option value="newsearch">&lt;New Search&gt;</option>
					<option value="30days">Newly Identified Diabetes, Hypertension Within 30 Days</option>
					<option value="">Newly Identified Diabetes, Hypertension Within 60 Days</option>
				</select>
			</div>
		</div-->
	<div class="adv-type" style="display:none">
		<div class="row field mtop10 mbot20">
			<div class="labelwrap"><label for="search-memberid"></label></div>
			<div class="fieldwrap">
			<form id="adv-type">
				<input name="adv-type" type="radio" class="checkbox" value="exactly1search"  />Exactly 1 Condition or Risk<br/>
				<input name="adv-type" type="radio" class="checkbox" value="morethan1search" checked/>More than 1 Condition or Risk<br/>
				<input name="adv-type" type="radio" class="checkbox" value="customSearch" />Custom Search</div>
			</form>
		</div>
	</div>
	<div class="adv-search-options">
		<div class="row mtop20">
			<div class="labelwrap"><label for="">Parameters:</label></div>
			<div class="fieldwrap">
				<a class="radio form parameter and active">All (And)</a>
				<a class="radio form parameter or">Any (Or)</a>
				<a class="radio form parameter 2plus">Multiple Conditions</a>
			</div>
		</div>
		<div class="row field mtop20 mbot20">
			<div class="labelwrap"><label for="search-name-last">Chronic Conditions<br/>and Medical Risks</label></div>
			<div class="fieldwrap30">
			<span class="strong"></span>
			<form>
				<input id="condition" id="name" type="checkbox" value="Diabetes" class="checkbox" checked/>Diabetes<br/>
				<input id="condition" id="name" type="checkbox" value="Pre-Diabetes" class="checkbox"/>Pre-Diabetes<br/>
				<input id="condition" id="name" type="checkbox" value="CAD" class="checkbox"/>CAD/Secondary Prevention of CAD <br/>
				<input id="condition" id="name" type="checkbox" value="Pre-Diabetes" class="checkbox"/>Elevated risk for CVD<br/>
				<input id="condition" id="name" type="checkbox" value="Pre-Diabetes" class="checkbox"/>Asthma<br/>
				<input id="condition" id="name" type="checkbox" value="Pre-Diabetes" class="checkbox"/>Symptoms of Depression<br/>
			</form>
			</div>
			<!--div class="fieldwrap30 option">
			<span class="strong">Condition Filter</span>
			<form id="conditionFilter">
				<input name="conditionFilter" id="conditionFilter" type="radio" value="any" class="checkbox"/><label for="any">Any Selected <br/>Conditions (OR)</label>
				<input name="conditionFilter" id="conditionFilter" type="radio" value="all" class="checkbox" checked/><label for="all">All Selected <br/>Conditions (AND)</label>
				<input name="conditionFilter" id="conditionFilter" type="radio" value="2plus" class="checkbox"/><label for="2plus">2 Or More <br/>Conditions (Comorbidity)</label>
			</form>
			</div-->
		</div>
		<div class="row field">
			<div class="labelwrap"><label for="search-name-first">Identified within the last</label></div>
			<div class="fieldwrap">
			<select name="advdaterange" id="advdaterange" class="w100p">
					<option value="">30 Days</option>
					<option value="">60 Days</option>
					<option value="">90 Days</option>
					<option value="">6 Months</option>
					<option value="">12 Months</option>
					<option value="">24 Months</option>
					<option value="alldates">All Dates</option>
			</select>
			</div>
		</div>
	<div class="row field" id="daterangeadv">
		<div class="labelwrap"><label for="call-date-from"></label></div>
		<div class="fieldwrap">
			<label for="call-date-from" class="alignleft mright10 strong">From:</label>
			<input type="text" class="w120 datepicker" value="" id="call-date-from" value="04/01/2015" placeholder="04/01/2015" />
			<div class="space20"></div>
			<div class="trackingwrap">
				<label for="call-date-to" class="alignleft mright10 strong">To:</label>
				<div class="datepicker">
				<input type="text" class="w120" value="" id="call-date-to" value="04/30/2015" placeholder="04/30/2015" />
				</div>
			</div>
		</div>
	</div>
	</div>	
	<div class="adv-search-button">
		<div class="row field">
			<div class="labelwrap">&nbsp;</div>
			<div class="fieldwrap"><a class="button red searchnowadv">Search Members</a></div>
		</div>
	</div>
		<div class="results searchadv mtop20">
		<h4 class="searchResultsHead heavyweight">Search Results</h4>
			<div class="helptext mbot20">Displaying results for 55 members out of 1,672</div>
			<table>
				<tr>
					<th>Member ID</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Age</th>
					<th>Condition</th>
					<th>Date Identified</th>
					<th>Source</th>
					<th>Employer</th>
				</tr>
				<tr>
					<td><a href="member.php">0022222200</a></td>
					<td><a href="member.php">Smith</a></td>
					<td>John</td>
					<td>52</td>
					<td>Diabetes</td>
					<td>4/23/2015</td>
					<td>L</td>
					<td>MetroCity Bakery</td>
				</tr>
				<tr>
					<td colspan="4" class="blank"></td>
					<td>Hypertension</td>
					<td>04/23/2014</td>
					<td>L</td>
					<td>MetroCity Bakery</td>
				</tr>
				<tr>
					<td colspan="8" class="blank"></td>
				</tr>
				<tr>
					<td colspan="8" class="blank"></td>
				</tr>
				<tr>
					<td><a href="member.php">0022222401</a></td>
					<td><a href="member.php">Doe</a></td>
					<td>Jane</td>
					<td>32</td>
					<td>Hypertension</td>
					<td>6/2/2015</td>
					<td>C</td>
					<td>MetroCity Bakery</td>
				</tr>
				<tr>
					<td colspan="4" class="blank"></td>
					<td>Diabetes</td>
					<td>02/16/2015</td>
					<td>B</td>
					<td>MetroCity Bakery</td>
				</tr>
				<tr>
					<td colspan="8" class="blank"></td>
				</tr>
				<tr>
					<td colspan="8" class="blank"></td>
				</tr>
				<tr>
					<td><a href="member.php">99999991</a></td>
					<td><a href="member.php">Brown</a></td>
					<td>Larry</td>
					<td>45</td>
					<td>Diabetes</td>
					<td>1/15/2015</td>
					<td>L</td>
					<td>MetroCity Bakery</td>
				</tr>
				<tr>
					<td colspan="4" class="blank"></td>
					<td>Asthma</td>
					<td>6/2/2015</td>
					<td>C</td>
					<td>MetroCity Bakery</td>
				</tr>
				<tr>
					<td colspan="4" class="blank"></td>
					<td>Elevated risk for CVD</td>
					<td>6/2/2015</td>
					<td>C</td>
					<td>MetroCity Bakery</td>
				</tr>
					<td colspan="4" class="blank"></td>
					<td>Symptoms of Depression </td>
					<td>10/11/2014</td>
					<td>C</td>
					<td>MetroCity Bakery</td>
				</tr>
				<tr>
					<td colspan="8" class="blank"></td>
				</tr>
				<tr>
					<td colspan="8" class="blank"></td>
				</tr>
				<tr>
					<td><a href="member.php">99999992</a></td>
					<td><a href="member.php">Jones</a></td>
					<td>Jennifer</td>
					<td>29</td>
					<td>Asthma</td>
					<td>6/2/2015</td>
					<td>C</td>
					<td>MetroCity Bakery</td>
				</tr>
				<tr>
					<td colspan="4" class="blank"></td>
					<td>CAD/Secondary Prevention of CAD</td>
					<td>02/16/2015</td>
					<td>B</td>
					<td>MetroCity Bakery</td>
				</tr>
				<tr>
					<td colspan="8" class="blank"></td>
				</tr>
				<tr>
					<td colspan="8" class="blank"></td>
				</tr>
				<tr>
					<td><a href="member.php">99999993</a></td>
					<td><a href="member.php">Cooper</a></td>
					<td>Jack</td>
					<td>14</td>
					<td>Asthma</td>
					<td>8/13/2014</td>
					<td>L</td>
					<td>MetroCity Bakery</td>
				</tr>
				<tr>
					<td colspan="8" class="blank"></td>
				</tr>
				<tr>
					<td colspan="8" class="blank"></td>
				</tr>
				<tr>
					<td><a href="member.php">99999994</a></td>
					<td><a href="member.php">Fernandez</a></td>
					<td>Rudy</td>
					<td>57</td>
					<td>Elevated risk for CVD</td>
					<td>6/2/2015</td>
					<td>C</td>
					<td>MetroCity Bakery</td>
				</tr>
				<tr>
					<td colspan="4" class="blank"></td>
					<td>Symptoms of Depression </td>
					<td>10/11/2014</td>
					<td>C</td>
					<td>MetroCity Bakery</td>
				</tr>
				<tr>
					<td colspan="4" class="blank"></td>
					<td>Diabetes</td>
					<td>2/16/2015</td>
					<td>B</td>
					<td>MetroCity Bakery</td>
				</tr>
				<tr>
					<td colspan="4" class="blank"></td>
					<td>Asthma</td>
					<td>6/2/2015</td>
					<td>C</td>
					<td>MetroCity Bakery</td>
				</tr>
			</table>
		
		<div class="row mtop20 textalignright">Page <a>1</a> of <a>50</a></div>
		
		<div class="row field">
		<div class="labelwrap"><label></label></div>
		<div class="fieldwrap">
			<a class="button red">Export to Excel</a>
			<!--a class="button red alignleft mleft10 show-tracking-new"><i class="fa fa-plus-circle"></i>&nbsp; Save As New Query</a-->
		</div>
		</div>
			
		</div>
		</div>
	</div>
	</div>
	
	<!-- Sidebar -->
	<div class="bgsidebar"></div>
	<div class="sidebar">
		<div class="operator">
			<div class="h6 mbot5">Operator:</div>
			abarnes@healthmine.com<br />
			<a href="" class="alignleft orange mtop10 button strong">Logout</a>
		</div>
		
	</div> <!-- .sidebar END -->
	
</div> <!-- END #rightcontainer -->


<?php include("footer.php"); ?> 
<div class="tab-content memSearchContent" style="right: 0px;display:none;">
	<h3 class="memSearchHead area-title main">Member Search</h3>
	<div class="helptext">Enter one or more search criteria, then click on the Search button.</div>
	<div class="row mtop40">
		<div class="labelwrap">Employer:</div>
		<div class="fieldwrap">MetroCity Bakery</div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="search-memberid">Member ID:</label></div>
		<div class="fieldwrap"><input id="search-memberid" type="text" /></div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="search-name-last">Last Name:</label></div>
		<div class="fieldwrap"><input id="search-name-last" type="text" value="Simmons"/></div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="search-name-first">First Name:</label></div>
		<div class="fieldwrap"><input id="search-name-first" type="text" /></div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="search-dob">Date of Birth:</label></div>
		<div class="fieldwrap"><input id="search-dob" class="w120 datepicker" type="text" placeholder="MM/DD/YYYY"/></div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="search-status">Member Status:</label></div>
		<div class="fieldwrap">
			<select name="" id="search-status">
				<option value="">Active</option>
				<option value="">Inactive</option>
				<option value="">All</option>
			</select>
		</div>
	</div>
	<div class="row field">
		<div class="labelwrap">&nbsp;</div>
		<div class="fieldwrap"><a class="button red searchnow">Search Members</a></div>
	</div>
	

	<div class="results search">
		<table id="memberSearch-table"
		data-domain="memberSearch"
		class = "bs-table">
			<thead>
				<tr>
					<th data-field="memberID">Member ID</th> 
					<th data-field="lastName">Last Name</th>
					<th data-field="firstName">First Name</th>
					<th data-field="dateOfBirth">Date of Birth</th>
					<th data-field="status">Status</th>
					<th data-field="employer">Employer</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
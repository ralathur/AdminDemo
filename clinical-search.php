<div class="tab-content advSearchContent" style="display:none; right: 0px;">
	<h3 class="advSearchHead area-title main">Clinical Search</h3>
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
				<a class="radio form parameter 2plus">Any 2 or more conditions</a>
			</div>
		</div>
		<div class="row field mtop20 mbot20">
			<div class="labelwrap"><label for="search-name-last">Chronic Conditions<br/>and Medical Risks</label></div>
			<div class="fieldwrap">
			<span class="strong"></span>
			<form>
				<input id="condition" id="name" type="checkbox" value="Diabetes" class="checkbox" checked/>Diabetes<br/>
				<input id="condition" id="name" type="checkbox" value="Diabetes" class="checkbox" checked/>Hypertension<br/>
				<input id="condition" id="name" type="checkbox" value="Pre-Diabetes" class="checkbox"/>Pre-Diabetes<br/>
				<input id="condition" id="name" type="checkbox" value="CAD" class="checkbox"/>Coronary Artery Disease<br/>
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
			<select name="advdaterange" id="advdaterange" >
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
				<input type="text" class="w120 datepicker" value="" id="call-date-from" value="12/16/2015" placeholder="12/16/2015" />
				<div class="space20"></div>
				<div class="trackingwrap">
					<label for="call-date-to" class="alignleft mright10 strong">To:</label>
					<input type="text" class="w120 datepicker" value="" id="call-date-to" value="01/15/2016" placeholder="01/15/2016" />
				</div>
			</div>
			<script>
				document.state.subscribe( function(state) {
					if(state.timestep >3) {
						$('#call-date-from').prop('placeholder', "01/06/2016");
						$('#call-date-to').prop('placeholder', "02/05/2016");
					} else {
						$('#call-date-from').prop('placeholder', "12/16/2015");
						$('#call-date-to').prop('placeholder', "01/15/2016");
					}
				})
			</script>
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
		<table id="clinicalSearch-table"
		data-domain="clinicalSearch"
		class = "bs-table"
		data-pagination="true">
			<thead>
			<tr>
				<th data-field="memberID" >Member ID</th>
				<th data-field="lastName" >Last Name</th>
				<th data-field="firstName" >First Name</th>
				<th data-field="age" >Age</th>
				<th data-field="condition" >Condition</th>
				<th data-field="dateIdentified" >Date Identified</th>
				<th data-field="employer" >Employer</th>
			</tr>
			</thead>
		</table>
		<div class="row field">
			<div class="labelwrap"><label></label></div>
			<div class="fieldwrap">
				<a class="button red">Export to Excel</a>
				<!--a class="button red alignleft mleft10 show-tracking-new"><i class="fa fa-plus-circle"></i>&nbsp; Save As New Query</a-->
			</div>
		</div>
			
	</div>
</div>
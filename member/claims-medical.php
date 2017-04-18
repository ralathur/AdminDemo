<div class="content-area clearfix" id="content-claims-medical">
	<h3 class="area-title">Medical Claims</h3>
	<div class="row bordertop10">
		<div class="labelwrap"><label for="claims-medical-claimid">Claim ID:</label></div>
		<div class="fieldwrap"><input type="text" id="claims-medical-claimid" class="w120"/></div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="claims-medical-date-from">Date of Services:</label></div>
		<div class="fieldwrap">
			<label for="claims-medical-date-from" class="alignleft mright10 strong">From:</label>
			<input type="text" class="w120 datepicker" value="" id="claims-medical-date-from" placeholder="01/01/2015" />
			<div class="space20"></div>
			<div class="trackingwrap">
				<label for="claims-medical-date-to" class="alignleft mright10 strong">To:</label>
				<input type="text" class="w120 datepicker" value="" id="claims-medical-date-to" placeholder="02/28/2015" />
			</div>
		</div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label>&nbsp;</label></div>
		<div class="fieldwrap">
			<a class="button red search-claims-medical"><i class="fa fa-search"></i>&nbsp;Filter</a>
		</div>
	</div>
	<div class="row filterresults claims-medical">
		<table id="medicalClaims-table"
		data-domain="medicalClaims"
		class = "bs-table">
		<thead>			
		<tr>
			<th data-field="dateOfService" >Date of Service</th>
			<th data-field="claimID" >Claim ID</th>
			<th data-field="provider" >Provider</th>
			<th data-field="claimStatus" >Claim Status</th>
			<th data-field="dateCreated" >Date Created</th>
			<th data-field="createdBy" >Created By</th>
		</tr>
	</thead>
</table>
</div>
<div class="claimsIDcontent" style="display:none;">
	<div class="row mtop20">
		<h4>Claim Information</h4>
	</div>
	<div class="row bordertop10">
		<div class="labelwrap"><label for="claims-medical-claimid">Claim ID:</label></div>
		<div class="fieldwrap"><input readonly type="text" id="claims-medical-claimid" value="P5080029-20131219-124" class="w100p"/></div>
	</div>
	<div class="row">
		<div class="labelwrap"><label for="claims-medical-claimid">Date Created:</label></div>
		<div class="fieldwrap"><input readonly type="text" id="claims-medical-claimid" value="02/02/2015" class="w30p"/></div>
	</div>
	<div class="row">
		<div class="labelwrap"><label for="claims-medical-claimid">Created By:</label></div>
		<div class="fieldwrap"><input readonly type="text" id="claims-medical-claimid" value="ABARNES" class="w30p"/></div>
	</div>
	<div class="row bordertop10">
		<div class="labelwrap"><label for="claims-medical-claimid">Provider Taxonomy:</label></div>
		<div class="fieldwrap"><input readonly type="text" id="claims-medical-claimid" value="25100000X" class="w100p"/></div>
	</div>

	<div class="row field bordertop10">
		<div class="labelwrap"><label for="demo-address-line1">Provider Address:</label></div>
		<div class="fieldwrap"><input readonly type="text" class="w220" value="5 Marine Bee" placeholder="" id="demo-address-line1" /></div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="demo-address-line2">Address Line 2:</label></div>
		<div class="fieldwrap"><input readonly type="text" class="w220" value="" placeholder="" id="demo-address-line2" /></div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="demo-address-city">City:</label></div>
		<div class="fieldwrap">
			<input readonly type="text" class="w220" value="Frankfort" placeholder="" id="demo-address-city" />
			<div class="space20"></div>
			<div class="middlewrap">
				<label for="demo-state" class="alignleft dblock mright10 strong">State:</label>
				<input readonly type="text" class="w50" value="KY" id="demo-state" />
			</div>
		</div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="demo-address-postal">Postal Code:</label></div>
		<div class="fieldwrap"><input readonly type="text" class="w120" value="80901" placeholder="" id="demo-address-postal" /></div>
	</div>
	

	<div class="row bordertop10">
		<div class="labelwrap"><label for="claims-medical-claimid">Diagnoses:</label></div>
		<div class="fieldwrap"><input readonly type="text" id="claims-medical-claimid" value="724.2 LUMBAGO" class="w100p"/></div>
	</div>
	<div class="row bordertop20">
		<div class="labelwrap"><label for="comments">Comments</label></div>
		<div class="fieldwrap"><textarea readonly rows="4" class="w100p" value="Comments..."/></textarea></div>
	</div>
	
</div>

</div>
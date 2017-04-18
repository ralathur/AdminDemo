<div class="content-area clearfix" id="content-proc">
	<h3 class="area-title">Procedures</h3>
	<div class="row bordertop10">
		<div class="labelwrap"><label for="proc-source">Source:</label></div>
		<div class="fieldwrap">
			<select name="proc-source" id="proc-source">
				<option value="">All</option>
				<option value="">Biometric data via EDI lab file</option>
				<option value="">Health questionnaire - medical events</option>
				<option value="">Health questionnaire - lab results</option>
				<option value="">Lab results data via EDI lab file</option>
				<option value="">Medical claim file</option>
				<option value="">Medica event via EDI bio file</option>
				<option value="">Physician override - medical events</option>
				<option value="">Member entered lab result</option>
				<option value="">Migration member waiver</option>
				<option value="">Physician override - lab results</option>
				<option value="">Physician override - medical events</option>
			</select>
		</div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="proc-cpt-code">CPT Code:</label></div>
		<div class="fieldwrap"><input type="text" class="w120" value="" id="proc-cpt-code" /></div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="proc-date-from">Date of Services:</label></div>
		<div class="fieldwrap">
			<label for="proc-date-from" class="alignleft mright10 strong">From:</label>
			<input type="text" class="w120 datepicker" value="" id="proc-date-from" placeholder="02/01/2015" />
			<div class="space20"></div>
			<div class="trackingwrap">
				<label for="proc-date-to" class="alignleft mright10 strong">To:</label>
				<input type="text" class="w120 datepicker" value="" id="proc-date-to" placeholder="02/28/2015" />
			</div>
		</div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label>&nbsp;</label></div>
		<div class="fieldwrap">
			<a class="button red search-proc"><i class="fa fa-search"></i>&nbsp;Filter</a>
		</div>
	</div>
	<div class="row filterresults proc">
		<table id="procedures-table"
		data-domain="procedures"
		class = "bs-table">
		<thead>
			<tr>
				<th data-field="dateOfService" ><span class="required"></span>Date of Service</th>
				<th data-field="source" ><span class="required"></span>Source</th>
				<th data-field="value" >Value</th>
				<th data-field="code" >Code</th>
				<th data-field="procedure" >Procedure</th>
				<th data-field="status" >Status</th>
				<th data-field="dateCreated" >Date Created</th>
				<th data-field="provider" >Provider</th>
			</tr>
		</thead>
	</table>
	</div>
</div>
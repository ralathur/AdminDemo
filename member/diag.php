<div class="content-area clearfix" id="content-diag">
	<h3 class="area-title">Diagnoses</h3>
	<div class="row margin10">
		<div class="labelwrap"><label for="diag-source">Source:</label></div>
		<div class="fieldwrap">
			<select name="diag-source" id="diag-source">
				<option value="">All</option>
				<option value="">Health questionnaire - medical events</option>
				<option value="">Medical claim file</option>
				<option value="">Medica event via EDI bio file</option>
				<option value="">Physician override - medical events</option>
			</select>
		</div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="diag-diag-code">Diagnosis Code:</label></div>
		<div class="fieldwrap"><input type="text" class="w120" value="" id="diag-diag-code" /></div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="diag-date-from">Date of Services:</label></div>
		<div class="fieldwrap">
			<label for="diag-date-from" class="alignleft mright10 strong">From:</label>
			<input type="text" class="w120 datepicker" value="" id="diag-date-from" placeholder="02/01/2015" />
			<div class="space20"></div>
			<div class="trackingwrap">
				<label for="diag-date-to" class="alignleft mright10 strong">To:</label>
				<input type="text" class="w120 datepicker" value="" id="diag-date-to" placeholder="02/28/2015" />
			</div>
		</div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label>&nbsp;</label></div>
		<div class="fieldwrap">
			<a class="button red search-diag"><i class="fa fa-search"></i>&nbsp;Filter</a>
		</div>
	</div>
	<div class="row filterresults diag">
		<table id="diagnoses-table"
		data-domain="diagnoses"
		class = "bs-table"
		data-sort-name="date"
		data-sort-order="desc"
		data-search='true'>
		<thead>
			<tr>
				<th data-field="dateOfService" ><span class="required"></span>Date of Service</th>
				<th data-field="source" ><span class="required"></span>Source</th>
				<th data-field="diagnosisCode">Diagnosis Code</th>
				<th data-field="diagnosis" >Diagnosis</th>
				<th data-field="status" >Status</th>
				<th data-field="dateCreated" >Date Created</th>
				<th data-field="createdBy" >Created By</th>
			</tr>
		</thead>
	</table>
</div>
</div>
<div class="content-area clearfix" id="content-lab">
	<h3 class="area-title">Lab / Test Results</h3>
	<!--div class="row bordertop10">
		<div class="labelwrap"><label for="lab-kit">Request Biometric Screening Kit:</label></div>
		<div class="fieldwrap"><a href="" class="button kit strong red"><i class="fa fa-flask"></i>&nbsp; Request Biometric Kit</a></div>
	</div-->
	<div class="row field">
		<div class="labelwrap"><label for="lab-source">Source:</label></div>
		<div class="fieldwrap">
			<select name="lab-source" id="lab-source">
				<option value="">All</option>
				<option value="">Biometric data via EDI lab file</option>
				<option value="">Health Questionnaire - lab results</option>
				<option value="">Lab results data via EDI lab file</option>
				<option value="">Member entered lab result</option>
				<option value="">Migration member waiver</option>
				<option value="">Physician override - lab results</option>
			</select>
		</div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="lab-cpt">CPT Code:</label></div>
		<div class="fieldwrap"><input type="text" id="lab-cpt"/></div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="lab-cpt">LOINC Code:</label></div>
		<div class="fieldwrap"><input type="text" id="lab-loinc"/></div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="lab-date-from">Date of Service:</label></div>
		<div class="fieldwrap">
			<label for="lab-date-from" class="alignleft mright10 strong">From:</label>
			<input type="text" class="w120 datepicker" value="" id="lab-date-from" placeholder="MM/DD/YYYY" />
			<div class="space20"></div>
			<div class="trackingwrap">
				<label for="lab-date-to" class="alignleft mright10 strong">To:</label>
				<input type="text" class="w120 datepicker" value="" id="lab-date-to" placeholder="MM/DD/YYYY" />
			</div>
		</div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label>&nbsp;</label></div>
		<div class="fieldwrap">
			<a class="button red search-lab-results"><i class="fa fa-search"></i>&nbsp;Filter</a>
			<a class="button red alignleft mleft10 show-lab-add"><i class="fa fa-plus-circle"></i>&nbsp; Add</a>
			<a class="button red alignleft mleft10 show-lab-add-bmi"><i class="fa fa-plus-circle"></i>&nbsp; Add BMI Result</a>
		</div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label>&nbsp;</label></div>
		<div class="fieldwrap">
			<a class="button red alignleft kit-request"><i class="fa fa-flask"></i>&nbsp; Request Biometric Kit</a>
		</div>
	</div>

	<select> <option>Valid</option> <option>Invalid</option> </select>

	<div class="row filterresults lab">
		<table id="labTestResults-table"
		data-domain="labTestResults"
		class = "bs-table">
		<thead>			
			<tr>
				<th data-field="dateOfService" ><span class="required"></span>Date of Service</th>
				<th data-field="source" >Source</th>
				<th data-field="cPTCode" >CPT Code</th>
				<th data-field="cPTName" >CPT Name</th>
				<th data-field="lOINCCode" >LOINC Code</th>
				<th data-field="testName" >Test Name</th>
				<th data-field="result" ><span class="required"></span>Result</th>
				<th data-field="status" >Status</th>
				<th data-field="dateCreated" >Date Created</th>
				<th data-field="createdBy" >Created By</th>
			</tr>
		</thead>
	</table>
</div>
</div>

<div class="content-area clearfix" id="content-lab-add">
	<h3 class="area-title">Add Lab / Test Results</h3>
	<div class="row bordertop10">
		<div class="labelwrap"><label for="lab-add-date"><span class="required"></span>Date of Service:</label></div>
		<div class="fieldwrap"><input type="text" class="w120 datepicker" value="" id="lab-add-date" placeholder="MM/DD/YYYY" /></div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="lab-add-cpt">CPT Code:</label></div>
		<div class="fieldwrap"><input type="text" id="lab-add-cpt"/></div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="lab-add-cpt">LOINC Code:</label></div>
		<div class="fieldwrap"><input type="text" id="lab-add-loinc"/></div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="lab-add-result">Result:</label></div>
		<div class="fieldwrap"><input type="text" class="w300" id="lab-add-result"/></div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="lab-add-status">Status:</label></div>
		<div class="fieldwrap">
			<select name="" id="lab-add-status">
				<option value="">Valid</option>
				<option value="">Invalid</option>
			</select>
		</div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label>&nbsp;</label></div>
		<div class="fieldwrap">
			<a class="button red show-lab">Save Changes</a>
			<a class="button gray alignright show-lab">Cancel</a>
		</div>
	</div>	
</div>

<div class="content-area clearfix" id="content-lab-add-bmi">
	<h3 class="area-title">Enter BMI Lab Result</h3>
	<div class="row bordertop10">
		<div class="labelwrap"><label for="lab-add-bmi-value"><span class="required"></span>BMI Value</label></div>
		<div class="fieldwrap"><input type="text" class="200" id="lab-add-bmi-value"/></div>
	</div>
	<div class="row field">
		<div class="labelwrap">&nbsp;</div>
		<div class="fieldwrap"><span class="strong">OR</span></div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="lab-add-bmi-height">Height (in inches)</label></div>
		<div class="fieldwrap"><input type="text" class="80" id="lab-add-bmi-height"/></div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="lab-add-bmi-weight">Height (in lbs.)</label></div>
		<div class="fieldwrap"><input type="text" class="80" id="lab-add-bmi-weight"/></div>
	</div>
	<div class="row bordertop10">
		<div class="labelwrap"><label for="lab-add-bmi-date"><span class="required"></span>Date of Service:</label></div>
		<div class="fieldwrap"><input type="text" class="w120 datepicker" value="" id="lab-add-bmi-date" placeholder="MM/DD/YYYY" /></div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="lab-add-bmi-status">Status:</label></div>
		<div class="fieldwrap">
			<select name="" id="lab-add-bmi-status">
				<option value="">Valid</option>
				<option value="">Invalid</option>
			</select>
		</div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label>&nbsp;</label></div>
		<div class="fieldwrap">
			<a class="button red show-lab">Save Changes</a>
			<a class="button gray alignright show-lab">Cancel</a>
		</div>
	</div>
</div>
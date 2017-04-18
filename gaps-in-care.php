<div class="tab-content gapsContent" style='display:none; right: 0 !important;'>
	<h3 class="memSearchHead area-title main" style="margin-bottom: 20px;">Gaps In Care</h3>
	<div class="adv-search-options">
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
				<label for="call-date-from" class="alignleft mright10 strong" style="padding-left: 10px">From:</label>
				<input type="text" class="w120 datepicker" value="" id="call-date-from" value="05/27/2015" placeholder="05/27/2015" />
				<div class="space20"></div>
				<div class="trackingwrap">
					<label for="call-date-to" class="alignleft mright10 strong">To:</label>
					<input type="text" class="w120 datepicker" value="" id="call-date-to" value="06/26/2015" placeholder="06/26/2015" />
				</div>
			</div>
		</div>
		<div class="row field">
			<div class="labelwrap"><label for="search-name-first">last contacted:</label></div>
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
			<label for="call-date-from" class="alignleft mright10 strong" style="padding-left: 10px">From:</label>
				<input type="text" class="w120 datepicker" value="" id="call-date-from" value="05/27/2015" placeholder="05/27/2015" />
				<div class="space20"></div>
				<div class="trackingwrap">
					<label for="call-date-to" class="alignleft mright10 strong">To:</label>
					<input type="text" class="w120 datepicker" value="" id="call-date-to" value="06/26/2015" placeholder="06/26/2015" />
				</div>
			</div>
		</div>
		<div class="row field">
			<div class="labelwrap"><label for="search-name-first">Gap in care</label></div>
			<div class="fieldwrap">
			<select name="advdaterange" id="advdaterange">
				<option>Adult BMI Assessment</option>
				<option>Annual Preventive Exam</option>
				<option>Anti-Rheumatic Drug (DMARD) Management</option>
				<option>Biometric screening</option>
				<option>Blood Sugar tests</option>
				<option>Breast Cancer Screening</option>
				<option>Cardiologist Visit</option>
				<option>Care for Older Adults – Functional Status Assessment</option>
				<option>Care for Older Adults – Medication Review</option>
				<option>Care for Older Adults – Pain Assessment</option>
				<option>Cervical Cancer Screening</option>
				<option>Colorectal Cancer Screening</option>
				<option>Doctor's Visit for Asthma</option>
				<option>Doctor's Visit for Diabetes</option>
				<option>Doctor's Visit for Heart Disease</option>
				<option>Doctor's Visit for Hyperlipidemia</option>
				<option>Doctor's Visit for Hypertension</option>
				<option>Doctor's Visit for Metabolic Syndrome</option>
				<option>Doctor's Visit for Pre-Diabetes</option>
				<option>Doctor's Visit for Risk of CVD</option>
				<option>Endocrinologist visit </option>
				<option>Fall Risk Intervention</option>
				<option>Flu Shot</option>
				<option>Health Risk Assessment</option>
				<option>Hemoglobin A1c</option>
				<option>Inhaled Short Acting Beta Agonist </option>
				<option>Kidney Disease Monitoring</option>
				<option>Lipid Panel</option>
				<option>Lung Function Testing</option>
				<option>Medication Adherence - Antidepressant</option>
				<option>Medication Adherence - Asthma</option>
				<option>Medication Adherence - Diabetes</option>
				<option>Medication Adherence - Hypertension</option>
				<option>Medication Adherence - Statins</option>
				<option>Medication Therapy Management</option>
				<option>Mental Health Assessment</option>
				<option>Osteoporosis Management in Women</option>
				<option>Physical Activity Assessment</option>
				<option>Physical Health Assessment</option>
				<option>Preventive Examination</option>
				<option>Pulmonologist visit or Allergist visit </option>
				<option>Retinal Eye Exam</option>
				<option>Serum Creatinine</option>
				<option>Urine Microalbumin</option>

			</select>

			</div>
		</div>
		<div class="row field">
			<div class="labelwrap"><label for="search-name-first">Risk/Condition</label></div>
			<div class="fieldwrap">
			<select name="advdaterange" id="advdaterange">
				<option>Asthma</option>
				<option>COPD</option>
				<option>Coronary Artery Disease</option>
				<option>Diabetes</option>
				<option>Elevated Risk for Cardiovascular Disease</option>
				<option>Heart Failure</option>
				<option>Hyperlipidemia</option>
				<option>Hypertension</option>
				<option>Metabolic Syndrome</option>
				<option>Obesity</option>
				<option>Pre-diabetes</option>
				<option>Pregnancy</option>
				<option>Preventive</option>
				<option>Smoking</option>
				<option>Symptoms of Depression</option>
				<option>Wellness</option>
			</select>

			</div>
		</div>
	</div>	
	<div class="adv-search-button">
		<div class="row field">
			<div class="labelwrap">&nbsp;</div>
			<div class="fieldwrap mbot15"><a class="button red searchnowadv">filter</a></div>
		</div>
	</div>


		<table id="gapsInCare-table"
		data-domain="gapsInCare"
		class = "bs-table"
		data-pagination="true"
		data-sort-name="idDate"
		data-sort-order="desc"
		data-row-style="rowStyle"
		data-page-size="50">
			<thead>
			<tr>
				<th data-field="name" data-class="mwidthname">Name</th>
				<th data-field="riskCondition" >Risk/Condition</th>
				<th data-field="careGap" data-class="mwidth">Care Gap</th>
				<th data-field="owner" >Owner</th>
				<th data-field="idDate" >ID Date</th>
				<th data-field="dueDate" >Due Date</th>
				<th data-field="healthScore" >Health Score</th>
				<th data-field="eRRisk" >ER Risk</th>
				<th data-field="iPRisk" >IP Risk</th>
				<th data-field="lastContacted" >Last Contacted</th>
				<th data-field="contactMethod" >Contact Method</th>
				<th data-field="primaryCarePhysician" >Primary Care Physician</th>
				<th data-field="pCPLastContacted" >PCP Last Contacted</th>
			</tr>

</div>
<script>
    function rowStyle(row, index) {
        if (row.idDate == '2/5/2016') {
            return {
                classes: 'warning'
                // css: { "max-height": '200px'}
            };
        }
        return {};
    }
</script>

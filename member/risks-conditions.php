<div class="content-area clearfix" id="content-risks-conditions">
	<h3 class="area-title">Risks and Conditions</h3>
	<div class="row bordertop10" >
		<h5 id='diabetes-label' hidden>Diabetes</h5>
		<div class="row mtop10 mbot20" id='diabetes-table-cont' hidden>
			<table id="risksAndConditions/diabetes-table"
			data-domain="risksAndConditions/diabetes"
			class = "bs-table">
			<thead>
				<tr>
					<th data-field="type" class="ccthead">Type</th>
					<th data-field="dateOfService" >Date of Service</th>
					<th data-field="placeOfService" >Place of Service</th>
					<th data-field="code" >Code</th>
					<th data-field="value" >Value</th>
				</tr>
			</thead>
		</table>
	</div>
	<h5>Hypertension</h5>
	<div class="row mtop10">
			<table id="risksAndConditions/hypertension-table"
			data-domain="risksAndConditions/hypertension"
			class = "bs-table">
			<thead>
				<tr>
					<th data-field="type" class="ccthead">Type</th>
					<th data-field="dateOfService" >Date of Service</th>
					<th data-field="placeOfService" >Place of Service</th>
					<th data-field="code" >Code</th>
					<th data-field="value" >Value</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
</div>
<script>
$(document).ready( function() {
	document.state.subscribe(function (state) {
		if(state.timestep >= 3) {
			$('#diabetes-table-cont').fadeIn(200);
			$('#diabetes-label').fadeIn(200);
		} else {
			$('#diabetes-table-cont').fadeOut(200);
			$('#diabetes-label').fadeOut(200);
		}
	});
});
</script>
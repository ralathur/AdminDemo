<div class="content-area clearfix" id="content-medevents">
	<h3 class="area-title">Other Events</h3>
	<div class="row bordertop10">
		<div class="labelwrap"><label for="medevents-date-from">Date of Services:</label></div>
		<div class="fieldwrap">
			<label for="medevents-date-from" class="alignleft mright10 strong">From:</label>
			<input type="text" class="w120 datepicker" value="" id="medevents-date-from" placeholder="MM/DD/YYYY" />
			<div class="space20"></div>
			<div class="trackingwrap">
				<label for="medevents-date-to" class="alignleft mright10 strong">To:</label>
				<input type="text" class="w120 datepicker" value="" id="medevents-date-to" placeholder="MM/DD/YYYY" />
			</div>
		</div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label>&nbsp;</label></div>
		<div class="fieldwrap">
			<a class="button red search-medevents"><i class="fa fa-search"></i>&nbsp;Filter</a>
			<a class="button red alignleft mleft10 show-medevent-add"><i class="fa fa-plus-circle"></i>&nbsp; Add</a>
		</div>
	</div>
	<div class="row filterresults medevents">
		<table id="medialEvents/events-table"
		data-domain="medialEvents/events"
		class = "bs-table">
		<thead>
			<tr>
				<th data-field="medicalEventID">Event ID</th>
				<th data-field="serviceDate">Service Date</th>
				<th data-field="diagnosisCode">Diagnosis Code</th>
				<th data-field="procedureCode">Procedure Code</th>
				<th data-field="iCD9Proc">ICD-9 Proc</th>
				<th data-field="createdBy">Created By</th>
			</tr>
		</thead>
	</table>
</div>
<div class="medical-events-add-content"  style="display:none;">
	<div class="row field bordertop20">
		<div class="labelwrap"><label for="call-tracking-new-cat"><span class="required"></span>Provider Taxonomy:</label></div>
		<div class="fieldwrap">
			<select name="" id="call-tracking-new-cat">
				<option value=""></option>
				<option value="">Biometric points not appearing on scorecard</option>
			</select>
		</div>
	</div>
	<div class="row field">
		<div class="labelwrap"><label for="call-tracking-new-cat"><span class="required"></span>Place of Service:</label></div>
		<div class="fieldwrap">
			<select name="" id="call-tracking-new-cat">
				<option value=""></option>
				<option value="">Biometric points not appearing on scorecard</option>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="labelwrap"><label for="call-tracking-new-id">Service Date</label></div>
		<div class="fieldwrap">
			<input type="text" class="w120" value="" id="medevents-date-from" placeholder="MM/DD/YYYY" /></div>
		</div>



		<div class="row bordertop20">
			<div class="row w40p alignleft">

				<div class="row field">
					<div class="labelwrap"><h4>Diagnosis:</h4></div>
					<a class="button red alignright mleft10 show-medevent-add various" data-toggle="modal" data-target="#medventdiagnosis"><i class="fa fa-plus-circle"></i>&nbsp; Add</a>
				</div>
				<table id="medialEvents/diagnosis-table"
				data-domain="medialEvents/diagnosis"
				class = "bs-table">
				<thead>
					<tr>
						<th data-field="diagnosisCode" >Diagnosis Code</th>
						<th data-field="diagnosisDescription" >Diagnosis Description</th>
						<th data-field="delete" >Delete</th>
					</tr>
				</thead>
			</table>
		</div>

		<div class=" w40p alignright">

			<div class="row field">
				<div class="labelwrap"><h4>Procedures:</h4></div>
				<a class="button red alignright mleft10 show-medevent-add various" data-toggle="modal" data-target="#medeventprocedures"><i class="fa fa-plus-circle"></i>&nbsp; Add</a>
			</div>

			<table id="medialEvents/procedures-table"
			data-domain="medialEvents/procedures"
			class = "bs-table">
			<thead>
				<tr>
					<th data-field="id" >ID</th>
					<th data-field="description" >Description</th>
					<th data-field="modifier" >Modifier</th>
					<th data-field="type" >Type</th>
					<th data-field="delete" >Delete</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
<div class="row bordertop20">
	<div class="labelwrap"><label for="comments">Comments</label></div>
	<div class="fieldwrap"><textarea rows="4" class="w100p" value="Comments..."/></textarea></div>
</div>

<div class="row field mtop20">
	<div class="labelwrap"></div>
	<a class="button gray alignright mleft10 hide-medevent">Cancel</a>
	<a class="button red alignright show-medevent-add"><i class="fa fa-plus-circle"></i>&nbsp; Add Comment</a>

</div>
</div>

</div>

<div class="modal fade" hidden id="tokens">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style='height:420px'>
			<div class="modal-header">
				<h4>Available Tokens</h4>
			</div>

			<div class="modal-body">

				<div class="row">
					<h6>Add these tokens into your message to reference individual user date.</h6>
				</div>
				<div class="row bordertop10">
					<div class="labelwrap">User Name:</div>
					<div class="fieldwrap">%username%</div>
				</div>
				<div class="row">
					<div class="labelwrap">User ID Number:</div>
					<div class="fieldwrap">%userid%</div>
				</div>
			</div>
			<div class="row modal-footer">
				<div class="pull-right">
					<div class="row field mtop20">
						<a class="button red alignleft closebox" data-dismiss="modal">&nbsp; Back</a>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Medical Events diagnosis -->

<div class="modal" id="medventdiagnosis">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style='height:355px'>
			<div class="modal-header">
				<h4>Add Diagnosis Details</h4>
			</div>

			<div class="modal-body">
				<div class="row">
					<div class="labelwrap"><label for="call-tracking-new-id">Diagnosis Code:</label></div>
					<div class="fieldwrap">
						<input type="text" class="w100p" value="" id="" placeholder="" /></div>
					</div>

					<div class="row bordertop20">
						<div class="labelwrap"><label for="comments">Diagnosis Description:</label></div>
						<div class="fieldwrap"><textarea rows="4" class="w100p" value=""/></textarea></div>
					</div>
				</div>

				<div class="row modal-footer">
					<div class="row field">
						<div class="labelwrap"></div>
						<a class="button gray alignright mleft10 closebox" data-dismiss="modal">Cancel</a>
						<a class="button red alignright closebox"><i class="fa fa-plus-circle" data-dismiss="modal"></i>&nbsp; Add Comment</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- 	Medical Events Procedures -->

	<div class="modal fade" id="medeventprocedures">
		<div class="modal-dialog" role="document">
			<div class="modal-content" style='height:440px'>
				<div class="modal-header">
					<h4>Add Procedure Details</h4>
				</div>

				<div class="modal-body">
					<div class="row field">
						<div class="labelwrap"><label for="call-tracking-new-cat">Procedure Type:</label></div>
						<div class="fieldwrap">
							<select name="" id="call-tracking-new-cat" class="w100p">
								<option value="">CPT or Internal or Revenue Code</option>
								<option value=""></option>
							</select>
						</div>
					</div>
					<div class="row field">
						<div class="labelwrap"><label for="call-tracking-new-id">Procedure Code:</label></div>
						<div class="fieldwrap">
							<input type="text" class="w100p" value="" id="" placeholder="" /></div>
						</div>
						<div class="row field">
							<div class="labelwrap"><label for="call-tracking-new-cat">Procedure Modifier:</label></div>
							<div class="fieldwrap">
								<select name="" id="call-tracking-new-cat" class="w100p">
									<option value=""></option>
									<option value=""></option>
								</select>
							</div>
						</div>

						<div class="row bordertop20 field">
							<div class="labelwrap"><label for="comments">Procedure Description:</label></div>
							<div class="fieldwrap"><textarea rows="4" class="w100p" value=""/></textarea></div>
						</div>
					</div>
					<div class="row modal-footer">
						<div class="labelwrap"></div>
						<a class="button gray alignright mleft10 closebox" data-dismiss="modal">Cancel</a>
						<a class="button red alignright closebox" data-dismiss="modal"><i class="fa fa-plus-circle"></i>&nbsp; Add</a>

					</div>
				</div>
			</div>
		</div>


<div class="mcc-content tab-content" style="display:none; right: 0px;">
	<h3 class="advSearchHead area-title main">Message Center Campaigns</h3>
	
	<div class="tabwrap mtop20">
		<a class="tab campaign current active">Active Campaigns</a>
		<a class="tab campaign historical">Historical Campaigns</a>
		<a class="tab campaign create">Create New Campaign</a>
	</div>

	<div class="campaign-content current">
		<h4 class="area-title mbot20">Active Campaigns</h4>
		<table id="messageCenterCampaigns/active-table"
		data-domain="messageCenterCampaigns/active"
		class = "bs-table">
		<thead>
			<tr>
				<th data-field="campaignName">Campaign Name</th>
				<th data-field="duration">Duration</th>
				<th data-field="membersMessaged">Members Messaged</th>
				<th data-field="messagesRead">Messages Read</th>
				<th data-field="readSentRatio">Read/Sent Ratio</th>
				<th data-field="cancel">Cancel</th>
			</tr>
			</thead>
		</table>
	</div>
	
	<div class="campaign-content historical" style="display: none">
		<h4 class="area-title mbot20">Historical Campaigns</h4>
		<table id="messageCenterCampaigns/historical-table"
		data-domain="messageCenterCampaigns/historical"
		class = "bs-table"
		data-sort-name="date"
		data-sort-order="desc">
		<thead>
			<tr>
				<th data-field="campaignName">Campaign Name</th>
				<th data-field="duration">Duration</th>
				<th data-field="membersMessaged">Members Messaged</th>
				<th data-field="messagesRead">Messages Read</th>
				<th data-field="readSentRatio">Read/Sent Ratio</th>
				<th data-field="completedCancelled">Completed/Cancelled</th>
			</tr>
			</thead>
		</table>
	</div>
	
	<div class="campaign-content create" style="display: none">
		<h4 class="area-title">Campaign Details</h4>
		<div class="row field">
			<div class="labelwrap"><label for="campaign-create-title">Campaign Title:</label></div>
			<div class="fieldwrap"><input type="text" class="fill" id="campaign-create-title" /></div>
		</div>
		<div class="row field">
			<div class="labelwrap"><label for="campaign-create-duration-from" class="datepicker">Duration:</label></div>
			<div class="fieldwrap">
				<label for="campaign-create-duration-from" class="alignleft mright10 strong">From:</label>
				<input type="text" class="w120 datepicker" value="" id="campaign-create-duration-from" placeholder="MM/DD/YYYY" />
				<div class="space20"></div>
				<div class="trackingwrap">
					<label for="campaign-create-duration-to" class="alignleft mright10 strong">To:</label>
					<input type="text" class="w120 datepicker" value="" id="campaign-create-duration-to" placeholder="MM/DD/YYYY" />
				</div>
			</div>
		</div>
		<div class="row field">
			<h4 class="area-title bordertop20">Message Content</h4>
			<a class="button red pabs top30 right0"><i class="fa fa-file-word-o"></i> &nbsp;Download Template</a>
			<div class="helptext">Use our HTML template to upload the message content you want to use for this campaign. You can view a list of available tokens to include in your message by <a data-toggle="modal" data-target="#tokens" class="various">clicking here.</a></div>
			<!--div class="row field">
				<div class="labelwrap"><label for="">Active Template</label></div>
				<div class="fieldwrap"><div class="text">[None]</div></div>
			</div-->
			<div class="row field">
				<div class="labelwrap">Upload Template:</div>
				<div class="fieldwrap">
					<input type="text" class="w200" /> <a href="" class="button browse red alignleft">Browse</a>
					<div class="progress">
						<div class="progress-text">Upload Progress</div>
						<div class="bar"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<h4 class="area-title bordertop20">Audience</h4>
			<div class="helptext">Use the queries to determine the audience for this campaign.</div>
			<div class="row field">
				<div class="labelwrap"><label for="campaign-create-query1">Members Who:</label></div>
				<div class="fieldwrap">
					<!--select class="alignleft" name="" id="campaign-create-query1">
						<option value="">are any gender</option>
						<option value="">are male</option>
						<option value="">are female</option>
						<option value="">are transgender</option>
					</select>
					<select class="alignleft mleft5" name="" id="">
						<option value=""></option>
						<option value="">been assigned</option>
						<option value="">been identified with</option>
						<option value="">at risk of</option>
						<option value="">completed</option>
						<option value="">not completed</option>
						<option value="">registered online</option>
						<option value="">voted</option>
					</select-->
					<div class="row">
						<select class="alignleft leftoverride" name="" id="messageaudience">
							<option value=""></option>
							<option value="aud1">Unregistered members</option>
							<option value="aud2">Registered members</option>
							<option value="aud3">Members who have not logged in for ___ days</option>
							<option value="aud4">Members who have incomplete required health actions </option>
							<option value="aud5">Members who have completed health action ___</option>
							<option value="aud6">Members who have not completed health action ___</option>
							<option value="aud7">Members who have Chronic condition ___ </option>
							<option value="aud8">All members</option>
						</select>
					</div>
					<!-- hidden option divs -->
					<div class="row aud1" style="display:none">

					</div>
					<div class="row aud2" style="display:none">

					</div>
					<div class="row aud3" style="display:none">
						<input type="text" class="w100" placeholder="(# days)">
					</div>
					<div class="row aud4" style="display:none">
					</div>
					<div class="row aud5" style="display:none">
						<select class="leftoverride" name="" id="">
							<option value="">Select Health Action...</option>
							<option value="">Any One Preventive Health Actions</option>
							<option value="">Any Two Preventive Health Actions</option>
							<option value="">All Preventive Health Actions</option>
							<option value="">Any One Chronic Health Actions</option>
							<option value="">Any Two Chronic Health Actions</option>
							<option value="">All Chronic Health Actions</option>
							<option value="">Health Survey</option>
							<option value="">Biometric Screening</option>
							<option value="">Wellness Visit</option>
							<option value="">PAP Testing</option>
							<option value="">Mammography</option>
							<option value="">Flu Shot</option>
							<option value="">Alcohol misuse screening counseling</option>
							<option value="">Blood pressure screening</option>
							<option value="">Cholesterol screening</option>
							<option value="">Depression screening</option>
							<option value="">Diabetes (type 2) screening</option>
							<option value="">HIV screening</option>
							<option value="">Immunization vaccines</option>
							<option value="">Obesity screening</option>
							<option value="">STI</option>
							<option value="">Blood pressure screening</option>
							<option value="">Doctor's Visit for Diabetes</option>
							<option value="">Doctor's Visit for Elevated Risk for CVD</option>
							<option value="">Lipid Profile</option>
							<option value="">Hemoglobin A1c</option>
							<option value="">Serum Creatinine</option>
							<option value="">Urine Microalbumin</option>
							<option value="">Retinal Eye Exam</option>
							<option value="">Health Coaching</option>
						</select>
					</div>
					<div class="row aud6" style="display:none">
						<select class="leftoverride" name="" id="">
							<option value="">Select Health Action...</option>
							<option value="">Any One Preventive Health Actions</option>
							<option value="">Any Two Preventive Health Actions</option>
							<option value="">All Preventive Health Actions</option>
							<option value="">Any One Chronic Health Actions</option>
							<option value="">Any Two Chronic Health Actions</option>
							<option value="">All Chronic Health Actions</option>
							<option value="">Health Survey</option>
							<option value="">Biometric Screening</option>
							<option value="">Wellness Visit</option>
							<option value="">PAP Testing</option>
							<option value="">Mammography</option>
							<option value="">Flu Shot</option>
							<option value="">Alcohol misuse screening counseling</option>
							<option value="">Blood pressure screening</option>
							<option value="">Cholesterol screening</option>
							<option value="">Depression screening</option>
							<option value="">Diabetes (type 2) screening</option>
							<option value="">HIV screening</option>
							<option value="">Immunization vaccines</option>
							<option value="">Obesity screening</option>
							<option value="">STI</option>
							<option value="">Blood pressure screening</option>
							<option value="">Doctor's Visit for Diabetes</option>
							<option value="">Doctor's Visit for Elevated Risk for CVD</option>
							<option value="">Lipid Profile</option>
							<option value="">Hemoglobin A1c</option>
							<option value="">Serum Creatinine</option>
							<option value="">Urine Microalbumin</option>
							<option value="">Retinal Eye Exam</option>
							<option value="">Health Coaching</option>
						</select>
					</div>
					<div class="row aud7" style="display:none">
						<select class="leftoverride" name="" id="">
							<option value="">Select Chronic Condition...</option>
							<option value="">Any One Chronic Condition</option>
							<option value="">Any Two Chronic Conditions</option>
							<option value="">Diabetes</option>
							<option value="">Hypertension</option>
							<option value="">Pre-Diabetes</option>
							<option value="">Coronary Artery Disease</option>
							<option value="">Elevated risk for CVD</option>
							<option value="">Asthma</option>
							<option value="">Symptoms of Depression</option>
						</select>
					</div>
					<div class="row aud8" style="display:none">
					</div>
				</div>
			</div>
			<!--div class="row field">
				<div class="labelwrap"><label for="">Add Additional Query:</label></div>
				<div class="fieldwrap">
					<a class="radio query1 and mtop5">And</a>
					<a class="radio query1 or mleft5 mtop5">Or</a>
				</div>
			</div-->
			<div class="row field hide additional-query2">
				<div class="labelwrap"><label for="campaign-create-query1">Members Who:</label></div>
				<div class="fieldwrap">
					<select class="alignleft" name="" id="campaign-create-query1">
						<option value="">are any gender</option>
						<option value="">are male</option>
						<option value="">are female</option>
						<option value="">are transgender</option>
					</select>
					<select class="alignleft mleft5" name="" id="">
						<option value=""></option>
						<option value="">been assigned</option>
						<option value="">been identified with</option>
						<option value="">at risk of</option>
						<option value="">completed</option>
						<option value="">not completed</option>
						<option value="">registered online</option>
						<option value="">voted</option>
					</select>
					<div class="row">
						<select class="alignleft leftoverride" name="" id="">
							<option value=""></option>
							<option value="">Any One Preventive Health Actions</option>
							<option value="">Any Two Preventive Health Actions</option>
							<option value="">All Preventive Health Actions</option>
							<option value="">Any One Chronic Health Actions</option>
							<option value="">Any Two Chronic Health Actions</option>
							<option value="">All Chronic Health Actions</option>
							<option value="">Health Survey</option>
							<option value="">Biometric Screening</option>
							<option value="">Wellness Visit</option>
							<option value="">PAP Testing</option>
							<option value="">Mammography</option>
							<option value="">Flu Shot</option>
							<option value="">Alcohol misuse screening counseling</option>
							<option value="">Blood pressure screening</option>
							<option value="">Cholesterol screening</option>
							<option value="">Depression screening</option>
							<option value="">Diabetes (type 2) screening</option>
							<option value="">HIV screening</option>
							<option value="">Immunization vaccines</option>
							<option value="">Obesity screening</option>
							<option value="">STI</option>
							<option value="">Blood pressure screening</option>
							<option value="">Doctor's Visit for Diabetes</option>
							<option value="">Doctor's Visit for Elevated Risk for CVD</option>
							<option value="">Lipid Profile</option>
							<option value="">Hemoglobin A1c</option>
							<option value="">Serum Creatinine</option>
							<option value="">Urine Microalbumin</option>
							<option value="">Retinal Eye Exam</option>
							<option value="">Health Coaching</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row field additional-query2 hide">
				<div class="labelwrap"><label for="">Add Additional Query:</label></div>
				<div class="fieldwrap">
					<a class="radio query2 and mtop5">And</a>
					<a class="radio query2 or mleft5 mtop5">Or</a>
					<a class="radio query cancel-query1 mleft5 mtop5">Cancel</a>
				</div>
			</div>
			<div class="row field">
				<div class="labelwrap">&nbsp;</div>
				<div class="fieldwrap"><a class="button red">Create Campaign</a></div>
			</div>
		</div>
	</div>
	
	<div class="campaign-content example hide">
		<h4 class="area-title">Campaign Details</h4>
		<div class="row field">
			<div class="labelwrap"><label for="campaign-create-title">Campaign Title:</label></div>
			<div class="fieldwrap"><input type="text" class="fill" id="campaign-create-title" value="Beat Your Numbers Campaign" /></div>
		</div>
		<div class="row field">
			<div class="labelwrap"><label for="campaign-create-duration-from">Duration:</label></div>
			<div class="fieldwrap">
				<label for="campaign-create-duration-from" class="alignleft mright10 strong">From:</label>
				<input type="text" class="w120" id="campaign-create-duration-from-example" placeholder="MM/DD/YYYY" value="04/01/2015" />
				<div class="space20"></div>
				<div class="trackingwrap">
					<label for="campaign-create-duration-to" class="alignleft mright10 strong">To:</label>
					<input type="text" class="w120" id="campaign-create-duration-to-example" placeholder="MM/DD/YYYY" value="06/30/2015" />
				</div>
			</div>
		</div>
		<div class="row field">
			<h4 class="area-title bordertop20">Message Content</h4>
			<a class="button red pabs top30 right0"><i class="fa fa-file-word-o"></i> &nbsp;Download Template</a>
			<div class="helptext">Use our HTML template to upload the message content you want to use for this campaign. You can view a list of available tokens to include in your message by <a data-toggle="modal" data-target="#tokens" class="various">clicking here.</a></div>
			<!--div class="row field">
				<div class="labelwrap"><label for="">Active Template</label></div>
				<div class="fieldwrap"><div class="text">Beat Your Numbers Campaign 2015.docx</div></div>
			</div-->
			<div class="row field">
				<div class="labelwrap">Upload Template:</div>
				<div class="fieldwrap">
					<input type="text" class="w200" /> <a href="" class="button browse red alignleft">Browse</a>
					<div class="progress">
						<div class="progress-text">Upload Progress</div>
						<div class="bar"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<h4 class="area-title bordertop20">Audience</h4>
			<div class="helptext">Use the queries to determine the audience for this campaign.</div>
			<div class="row field">
				<div class="labelwrap"><label for="campaign-create-query1">Members Who:</label></div>
				<div class="fieldwrap">
					<!--select class="alignleft" name="" id="campaign-create-query1">
						<option value="">are any gender</option>
						<option value="">are male</option>
						<option value="">are female</option>
						<option value="">are transgender</option>
					</select>
					<select class="alignleft mleft5" name="" id="">
						<option value=""></option>
						<option value="">been assigned</option>
						<option value="">been identified with</option>
						<option value="">at risk of</option>
						<option value="">completed</option>
						<option value="">not completed</option>
						<option value="">registered online</option>
						<option value="">voted</option>
					</select-->
					<div class="row">
						<select class="alignleft leftoverride" name="" id="">
							<option value=""></option>
							<option value="">Any One Preventive Health Actions</option>
							<option value="">Any Two Preventive Health Actions</option>
							<option value="">All Preventive Health Actions</option>
							<option value="">Any One Chronic Health Actions</option>
							<option value="">Any Two Chronic Health Actions</option>
							<option value="">All Chronic Health Actions</option>
							<option value="">Health Survey</option>
							<option value="">Biometric Screening</option>
							<option value="">Wellness Visit</option>
							<option value="">PAP Testing</option>
							<option value="">Mammography</option>
							<option value="">Flu Shot</option>
							<option value="">Alcohol misuse screening counseling</option>
							<option value="">Blood pressure screening</option>
							<option value="">Cholesterol screening</option>
							<option value="">Depression screening</option>
							<option value="">Diabetes (type 2) screening</option>
							<option value="">HIV screening</option>
							<option value="">Immunization vaccines</option>
							<option value="">Obesity screening</option>
							<option value="">STI</option>
							<option value="">Blood pressure screening</option>
							<option value="">Doctor's Visit for Diabetes</option>
							<option value="">Doctor's Visit for Elevated Risk for CVD</option>
							<option value="">Lipid Profile</option>
							<option value="">Hemoglobin A1c</option>
							<option value="">Serum Creatinine</option>
							<option value="">Urine Microalbumin</option>
							<option value="">Retinal Eye Exam</option>
							<option value="">Health Coaching</option>
						</select>
					</div>
				</div>
			</div>
			<!--div class="row field">
				<div class="labelwrap"><label for="">Add Additional Query:</label></div>
				<div class="fieldwrap">
					<a class="radio query1 and mtop5">And</a>
					<a class="radio query1 or mleft5 mtop5">Or</a>
				</div>
			</div-->
			<div class="row field hide additional-query2">
				<div class="labelwrap"><label for="campaign-create-query1">Members Who:</label></div>
				<div class="fieldwrap">
					<select class="alignleft" name="" id="campaign-create-query1">
						<option value="">are any gender</option>
						<option value="">are male</option>
						<option value="">are female</option>
						<option value="">are transgender</option>
					</select>
					<select class="alignleft mleft5" name="" id="">
						<option value=""></option>
						<option value="">been assigned</option>
						<option value="">been identified with</option>
						<option value="">at risk of</option>
						<option value="">completed</option>
						<option value="">not completed</option>
						<option value="">registered online</option>
						<option value="">voted</option>
					</select>
					<div class="row">
						<select class="alignleft leftoverride" name="" id="">
							<option value=""></option>
							<option value="">Any One Preventive Health Actions</option>
							<option value="">Any Two Preventive Health Actions</option>
							<option value="">All Preventive Health Actions</option>
							<option value="">Any One Chronic Health Actions</option>
							<option value="">Any Two Chronic Health Actions</option>
							<option value="">All Chronic Health Actions</option>
							<option value="">Health Survey</option>
							<option value="">Biometric Screening</option>
							<option value="">Wellness Visit</option>
							<option value="">PAP Testing</option>
							<option value="">Mammography</option>
							<option value="">Flu Shot</option>
							<option value="">Alcohol misuse screening counseling</option>
							<option value="">Blood pressure screening</option>
							<option value="">Cholesterol screening</option>
							<option value="">Depression screening</option>
							<option value="">Diabetes (type 2) screening</option>
							<option value="">HIV screening</option>
							<option value="">Immunization vaccines</option>
							<option value="">Obesity screening</option>
							<option value="">STI</option>
							<option value="">Blood pressure screening</option>
							<option value="">Doctor's Visit for Diabetes</option>
							<option value="">Doctor's Visit for Elevated Risk for CVD</option>
							<option value="">Lipid Profile</option>
							<option value="">Hemoglobin A1c</option>
							<option value="">Serum Creatinine</option>
							<option value="">Urine Microalbumin</option>
							<option value="">Retinal Eye Exam</option>
							<option value="">Health Coaching</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row field">
				<div class="labelwrap">&nbsp;</div>
				<div class="fieldwrap"><a class="button gray">Cancel Campaign</a></div>
			</div>
		</div>
	</div>
	
</div>


<!-- HTML Tokens -->

<div class="modal fade" hidden id="tokens">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style='height:250px'>
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
					<div class="row field">
						<a class="button red alignleft closebox" data-dismiss="modal">&nbsp; Back</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Confirm Message Center Campaign Cancellation -->

<div class="modal fade" id="cancelcampaign">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style='height:210px'>
			<div class="modal-header">
				<h4>Confirm Campaign Cancel?</h4>
			</div>

			<div class="modal-body">
				<div class="row">
					<h5>This will cancel all future messages from being sent for the following campaign: Beat Your Numbers Campaign.</h5>
				</div>
			</div>
			<div class="row modal-footer">
				<div class="pull-right">
					<div class="row field mtop20">
						<a class="button red closebox" data-dismiss="modal"><i class="fa fa-times-circle"></i>&nbsp; Continue</a>
						<a class="button gray mleft10 closebox" data-dismiss="modal">Cancel</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

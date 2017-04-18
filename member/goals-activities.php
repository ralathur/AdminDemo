<div class="content-area clearfix" id="content-goals-activities" style="padding:0 !important;">
<style scoped>
		#ga-header-div {
			color: #2166f3;
		}	
		.ga-top-metric {
			padding: 0 20px;
		}
		.ga-label {
			font-weight: bold;
			color: #788793 !important;
		}
		.ga-nonsel {
			font-weight: bold;
			color: #788793 !important;
			padding-left: 30px !important;
		}
		.ga-tab {
			font-weight: bold;
		}
		.flex {
			display: flex;
		}
		.score {
			 color: black;
			margin-left: 20px;
			font-weight: bold;
			font-size: 35px;
			height: 35px;
			padding-top: 5px; 
		}
	</style>
	<div id="ga-header-div" style='color: #788793; padding:20px 55px; padding-bottom: 0'>
		<h2>Goals and Activities</h2>
		<span class='hp-date' style='color: #089dec'></span>
	</div>
	<div class='flex' style='padding: 25px 35px;'>
		<div style='width:65%'>
			<div style='display: inline-block;'>
				<span class='ga-top-metric ga-label' style='padding-left: '>GOALS</span>
				<div id='ga-goals' class="score">5</div>
			</div>
			<div style='display: inline-block;'>
				<span class='ga-top-metric ga-label'>CONDITIONS</span>
				<div id='ga-conditions' class="score">22</div>
			</div>
		</div>
		<div style='width:35%'>
			<div style='display: inline-block;'>
				<span class='ga-top-metric ga-label'>ALERTS</span>
				<div id='ga-alerts' class="score">36</div>
			</div>
		</div>
	</div>
<!-- 	<h5 class="area-title">Assignment Overview for Calvin Calalsh</h5>
	<div class="helptext">This participant has completed <span class="red">(0/3)</span> assignments.</div>
	<div class="row mtop20"> -->
<!-- 	<table id="goalsAndActivities-table"
		data-domain="goalsAndActivities"
		class = "table table-hover bs-table"
		data-sort-name="date"
		data-sort-order="desc">
		<thead>
			<tr>
				<th data-field="severity"></th>
				<th data-field="Assignment">Subject</th>
				<th data-field="points">Message</th>
				<th data-field="completionDate">Completion Date</th>
				<th data-field="edit"></th>
			</tr>
		</thead>
	</table> -->
<!--	</div>
	<div class="row field mtop20 borderbottom">
		<a data-toggle="modal" data-target="#addAssignment" class="button red various" ><i class="fa fa-plus-circle"></i>&nbsp; Add Assignment</a>
	</div>
	<div class="row field mtop20">
		<h5 class="area-title">Preventive Health Actions</h5>
		<table id="overrides/preventive-table"
		data-domain="overrides/preventive"
		class = "bs-table">
			<thead>			
				<tr>
					<th data-field='status'></th>
					<th data-field='healthActions'>Health Actions</th>
					<th data-field='required'>Required</th>
					<th data-field='lastCompleted'>Last Completed</th>
					<th data-field='overrideLink'></th>
				</tr>
			</thead>
		</table>
	</div>


	<div class="row field mtop20">
		<h5 class="area-title">Preventive Health Actions</h5>
		<table id="overrides/chronic-table"
		data-domain="overrides/chronic"
		class = "bs-table">
		<thead>			
				<tr>
					<th data-field='status'></th>
					<th data-field='healthActions'>Health Actions</th>
					<th data-field='required'>Required</th>
					<th data-field='lastCompleted'>Last Completed</th>
					<th data-field='overrideLink'></th>
				</tr>
			</thead>
		</table>
	</div> -->
	<div>
		<img class="syncdContent" data-step="01"src="./images/HM_greyhound_admin_GA_STATE1.png" style="width:100%"/>
		<img class="syncdContent" data-step="2"src="./images/HM_greyhound_admin_GA_STATE2.png" style="width:100%"/>
		<img class="syncdContent" data-step=""src="./images/HM_greyhound_admin_GA_STATE35.png" style="width:100%" />
		<img class="syncdContent" data-step="3"src="./images/HM_greyhound_admin_GA_STATE3.png" style="width:100%" id='memberGoalImg'/>
		<img class="syncdContent" data-step="4"src="./images/HM_greyhound_admin_GA_STATE4.png" style="width:100%"/>
		<a data-toggle="modal" data-target="#changeGoal" id='12382472' class="button red various" style='
		background: none;
		padding: 0;
		width: 30%;
		position: relative;
		top: -10px;
		min-height: 30px;'></a>
		<script type="text/javascript">
		//lord forgive me
		$(document).ready(function() {
			$(document).on("click",function() {
				imageheight = document.getElementById('memberGoalImg').clientHeight;
				$('#12382472').css({'top': imageheight*.29 })
			});
		});
		</script>
		</div>
</div>

<!-- Add Assignment -->

<div class="modal fade" id="addAssignment" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="height: 230px;">
			<div class="modal-header">
				<h4>Add Assignment</h4>
			</div>
			<div class="modal-body">
				<div class="row field">
					<div class="labelwrap"><label for="call-cat">Assignment Type</label></div>
					<div class="fieldwrap">
						<select name="" id="assignment-type">
							<option value=""></option>
							<option value="">Walk 10,000 Steps Daily</option>
							<option value="">Online Stress Course</option>
							<option value="">Build Nutrition Plan</option>
							<option value="">Run 1 mile</option>
							<option value="">Complete 1 Month of Yoga</option>
							<option value="">Build A Sleep Schedule</option>
							<option value="">Enroll in a Cardio Program</option>
						</select>
					</div>
				</div>	
				<div class="row field">
					<div class="labelwrap"><label for="call-cat">Point Value</label></div>
					<div class="fieldwrap">
						<select name="" id="assignment-points">
							<option value="">5000</option>
							<option value="">6000</option>
							<option value="">7000</option>
							<option value="">8000</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row modal-footer">
				<a class="button red" data-dismiss='modal'><i class="fa fa-plus-circle"></i>&nbsp; Add Assignment</a>
				<a class="button gray mleft20" data-dismiss='modal'><i class="fa fa-times-circle"></i>&nbsp; Cancel</a>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="changeGoal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="height: 305px;">
			<div class="modal-header">
				<h4>Edit Activites</h4>
				<h6>Manage Diabetes</h6>
			</div>
			<div class="modal-body" style="height:160px">
				<div class="row field">
					<div class="labelwrap"><label for="call-cat">Assignment Type</label></div>
					<div class="fieldwrap">
						<select name="" id="assignment-type" onchange='hideshowthing();'>
							<option value="">Education</option>
							<option value="" >Fitness</option>
							<option value="">Nutrition</option>
							<option value="">Clinical</option>
						</select>
					</div>
				</div>
				<div class="row field ga-togglable">
					<div class="fieldwrap">
						<span>Read Article</span><a class='mleft20'> edit</a>
					</div>
					<div class="fieldwrap">
						<span>Watch Video</span><a class='mleft20'> edit</a>
					</div>
					<div class="fieldwrap">
						<span>Interact</span><a class='mleft20'> edit</a>
					</div>
				</div>
				<div class="row field ga-togglable" hidden>
					<div class="fieldwrap">
						<span>Walk </span>
						<select value="10,000" style="float:none; margin:5px" >
							<option value="">7,500</option>
							<option selected value="">10,000</option>
							<option value="">12,500</option>
						</select>
						<span>steps per day.</span>
					</div>
				</div>
			</div>
			<div class="row modal-footer">
				<a class="button red" data-dismiss='modal' onclick='changeTheGoal();'><i class="fa fa-plus-circle"></i>&nbsp;Change Assignment</a>
				<a class="button gray mleft20" data-dismiss='modal'><i class="fa fa-times-circle"></i>&nbsp; Cancel</a>
			</div>
		</div>
	</div>
	<script>
		function hideshowthing () {
			$('.ga-togglable').toggle();
		};
		function changeTheGoal () {
			document.state.set({timestep: 4});
			document.cookie="notify3=true;Path=/";
		}
	</script>
</div>
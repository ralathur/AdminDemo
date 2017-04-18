<div class="content-area clearfix" id="content-health-profile" style="padding:0 !important;">
	<style scoped>
		#hp-header-div {
			color: #2166f3;
		}
		.hp-top-metric {
			padding: 0 20px;
		}
		.hp-label {
			font-weight: bold;
			color: #788793 !important;
		}
		.hp-nonsel {
			font-weight: bold;
			color: #788793 !important;
			padding-left: 30px !important;
		}
		.hp-tab {
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
	<div id="hp-header-div" style='color: #788793; padding:20px 55px; padding-bottom: 0'>
		<h2>Health Overview</h2>
		<span class='hp-date' style='color: #089dec'></span>
		<script>
			var now = new Date();
			var selectedHpTab = 'clinical'
			// monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
			// var formatedDate =  ' ' + (monthNames[now.getMonth()]) + ' ' + now.getDate() + 'th ' + now.getFullYear();
			// document.getElementById("hp-date").innerText = formatedDate;

			function formatDate (state) {
				var formatedDate = 'January 15th 2016';
				if(state.timestep >= 3 )
				{
					formatedDate = 'February 5th 2016';
				}
				$(".hp-date").html(formatedDate);
			}
			
			formatDate(document.state.get().timestep);
			document.state.subscribe(formatDate);

			function toggleLabel(elm) {
				$('.hp-tab').addClass('hp-nonsel');
				$('.hp-tab').children().hide(); //hide the dot
				$(elm).toggleClass('hp-nonsel');

				$(elm).children().toggle();

				$('#hp-color-data').css("color", $(elm).data("color"));
				$('#hp-color-data').data('')
				console.log($(elm));
				toggleContent($(elm).data('tab-name'));
				selectedHpTab = $(elm).data('tab-name');
				updateTopMetrics(document.state.get());
			}

			function toggleContent(name) {
				$(".hp-tab-content").fadeOut(200);
				$("div[data-Name|='" + name +"']").delay(200).fadeIn(200);
			}

			function syncImageStep() {
				$elms = $('.syncdContent');

				$elms.fadeOut(200);

				$elms.each( function () {
					$elm = $(this);
					if($elm.data('step').toString().indexOf(document.state.get().timestep) != -1)
					{
						$elm.delay(200).fadeIn(200);
					}
				});
			}
			$(document).ready(function(){
				syncImageStep();
				toggleContent('clinical')
				document.state.subscribe(syncImageStep);
			});

			function updateTopMetrics(state) {
				
				metrics = [{
					'goals': 4,
					'data': 23,
					'fitness' : 0,
					'education' : 2,
					'nutrition' : 3,
					'clinical' : 1,
					'lifestyle' : 5,
					'alerts':4,
					'conditions':1,
					'gaGoals': 4,
				},
				{
					'goals': 4,
					'data': 23,
					'fitness' : 0,
					'education' : 2,
					'nutrition' : 3,
					'clinical' : 1,
					'lifestyle' : 5,
					'alerts':4,
					'conditions':1,
					'gaGoals': 4,
				},{
					'goals': 4,
					'data': 23,
					'fitness' : 0,
					'education' : 2,
					'nutrition' : 3,
					'clinical' : 1,
					'lifestyle' : 5,
					'alerts':3,
					'conditions':1,
					'gaGoals': 4,
				},{
					'goals': 5,
					'data': 46,
					'fitness' : 0,
					'education' : 2,
					'nutrition' : 3,
					'clinical' : 15,
					'lifestyle' : 5,
					'alerts':10,
					'conditions':2,
					'gaGoals': 5,
				},{
					'goals': 5,
					'data': 46,
					'fitness' : 0,
					'education' : 2,
					'nutrition' : 3,
					'clinical' : 15,
					'lifestyle' : 5,
					'alerts':10,
					'conditions':2,
					'gaGoals': 5,
				}]
				document.getElementById('hp-Goals').innerHTML = metrics[state.timestep].goals;
				document.getElementById('hp-data').innerHTML = metrics[state.timestep].data;
				document.getElementById('hp-color-data').innerHTML = metrics[state.timestep][selectedHpTab]
				document.getElementById('ga-alerts').innerHTML = metrics[state.timestep].alerts;
				document.getElementById('ga-conditions').innerHTML = metrics[state.timestep].conditions;
				document.getElementById('ga-goals').innerHTML = metrics[state.timestep].gaGoals;

// selectedHpTab
				//document.getElementById('hp-health-score').innerHTML = state.healthScore;
			}
			$(document).ready( function() {
				updateTopMetrics(document.state.get());
			});
			document.state.subscribe(updateTopMetrics);
		</script>
	</div>
	<hr/>
	<div class='flex' style='padding:0 35px; padding-bottom: 25px'>
		<div style='width:65%'>
			<div style='display: inline-block;'>
				<span class='hp-top-metric hp-label' style='padding-left: '>HEALTH SCORE</span>
				<div id="hp-health-score" class="score">0</div>
			</div>
			<div style='display: inline-block;'>
				<span class='hp-top-metric hp-label'>GOALS</span>
				<div id='hp-Goals' class="score">22</div>
			</div>
			<div style='display: inline-block;'>
				<span class='hp-top-metric hp-label'>DATA</span>
				<div id='hp-data' class="score">36</div>
			</div>
		</div>
		<div style='width:35%'>
			<div style='display: inline-block;'>
				<span class='hp-top-metric hp-label'>ALERTS</span>
				<div id='hp-color-data' class="score" style='color:#E2577E'>5</div>
			</div>
		</div>
	</div>
	<div>
		<img src="./images/HealthScoreBreakdownBar.png" style="width: 60%;"/>
	</div>
	<div>
		<ul class="nav nav-tabs" style="padding-left: 25px;">
			<li ><a onClick='toggleLabel(this)' class="hp-nonsel hp-tab" style='color:#00007a' data-tab-name="fitness" data-color='#00007a'>
				<i class="fa fa-circle" style='display:none' aria-hidden="true"></i> FITNESS</a>
			</li>
			<li ><a onClick='toggleLabel(this)' class="hp-nonsel hp-tab" style='color:#E0D23A' data-tab-name="education" data-color='#E0D23A'>
				<i class="fa fa-circle" style='display:none' aria-hidden="true"></i> EDUCATION</a>
			</li>
			<li ><a onClick='toggleLabel(this)' class="hp-nonsel hp-tab" style='color:#803349' data-tab-name="nutrition" data-color='#803349'>
				<i class="fa fa-circle" style='display:none' aria-hidden="true"></i> NUTRITION</a>
			</li>
			<li ><a onClick='toggleLabel(this)' class="hp-tab" style='color:#E2577E' data-tab-name="clinical" data-color='#E2577E'>
				<i class="fa fa-circle" style="" aria-hidden="true"></i> CLINICAL</a>
			</li>
			<li ><a onClick='toggleLabel(this)' class="hp-nonsel hp-tab" style='color:#00D393' data-tab-name="lifestyle" data-color='#00D393'>
				<i class="fa fa-circle" style='display:none' aria-hidden="true"></i> LIFESTYLE</a>
			</li>
		</ul>
	</div>
	<style>
		.syncdContent {
			position: absolute;
		}
	</style>

	<div class="hp-tab-content" data-name='clinical'>
		<img class="syncdContent" data-step="0" src="./images/HM_greyhound_admin_health_overview-03.png" style="width:100%"/>
		<img class="syncdContent" data-step="12" src="./images/HM_greyhound_admin_health_overview-04.png" style="width:100%"/>
		<img class="syncdContent" data-step="34" src="./images/HM_greyhound_admin_health_overview-06.png" style="width:100%"/>
	</div>
	<div class="hp-tab-content" data-name='fitness'>HM_greyhound_admin_Fitness_overview_State 5-14
		<img class="syncdContent" data-step="0" src="./images/HM_greyhound_admin_Fitness_overview_STATE1-07-07-07-07-07.png" style="width:100%"/>
		<img class="syncdContent" data-step="123" src="./images/HM_greyhound_admin_Fitness_overview_STATE2-07-07-07-07-11.png" style="width:100%"/>
		<img class="syncdContent" data-step="4" src="./images/HM_greyhound_admin_Fitness_overview_STATE3-07-07-07-07-07-12.png" style="width:100%"/>
	</div>
</div>
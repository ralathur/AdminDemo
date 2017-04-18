<script type="text/javascript">
$(function () { 	
	$('.rightNav').on('click', function() {
		$('.rightNav').fadeOut(200);
		$('.genderhidden1').fadeOut(200);
		$('.leftNav').delay(200).fadeIn(200);
		$('.genderhidden2').delay(200).fadeIn(200);
	});
	$('.leftNav').on('click', function() {
		$('.leftNav').fadeOut(200);
		$('.genderhidden2').fadeOut(200);
		$('.rightNav').delay(200).fadeIn(200);
		$('.genderhidden1').delay(200).fadeIn(200);
	});
});
</script>

<div class="tab-content clientPage">
	<h3 class="advSearchHead area-title main">Client Dashboard</h3>
	<!--div class="row mtop40">
		<div class="labelwrap"><label>Saved Queries</label></div>
		<div class="fieldwrap">
			<select name="" id="savedQueries" class="w100p">
				<option value="" disabled selected>Select from a list of previously saved queries...</option>
				<option value="newsearch">&lt;New Search&gt;</option>
				<option value="30days">Newly Identified Diabetes, Hypertension Within 30 Days</option>
				<option value="">Newly Identified Diabetes, Hypertension Within 60 Days</option>
			</select>
		</div>
	</div-->
	
	<div id="contentwrap" class="clearfix">
		<div id="deck">


		<!-- <tr>
			<td style="width:49%">
				
			</td>
			<td style="width:2%">&nbsp;</td>
			<td style="width:49%">
				
			</td>
		</tr> -->

		<table style="width:100%; border:none;">
			<tr>
				<td style="width:49%">
					<div class="cardwrap card1 hm-new-chart">
						<div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon red"><span class="strong">Health Score</span> Total</h4></div>
						<div class="card-content" style="position:relative;padding-bottom:30px;top:20px">
							<div id="totalPopHealthScore" style="width:340px;margin:0 auto;height:430px"></div>
						</div>
					</div>
				</td>
				<td style="width:2%">&nbsp;</td>
				<td style="width:49%">
					<div class="cardwrap card1 hm-new-chart">
						<div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon red"><span class="strong">Health Score</span> Components</h4></div>
						<div class="card-content" style="position:relative;padding-bottom:30px;top:20px">
							<div id="compHealthScore" style="width:100%"></div>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<div class="cardwrap card1  hm-new-chart">
						<div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon orange"><span class="strong">Health Status</span> Chronic Conditions and High Risk Areas</h4></div>
						<div class="card-content" style="position:relative;">
							<div id="highRiskChronic" style=""></div>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td style="width:49%">
					<div class="cardwrap card1 hm-new-chart" >
						<div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon orange"><span class="strong">Health Status</span> High Risk Lifestyle Areas</h4></div>
						<div class="card-content" style="position:relative;padding-bottom:30px;top:20px">
							<div id="highRiskLifestyles" style=""></div>
						</div>
					</div>
				</td>
				<td style="width:2%"></td>
				<td style="width:49%">
					<div class="cardwrap card1 hm-new-chart">
						<div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon orange"><span class="strong">Health Status</span> Uncontrolled Conditions</h4></div>
						<div class="card-content" style="position:relative;padding-bottom:30px;top:20px">
							<div id="uncontrolledCond" style=""></div>
						</div>
					</div>
					
				</td>
			</tr>
			<tr>
				<td style="width:49%">
					<div class="cardwrap card1 hm-new-chart">
						<div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon green"><span class="strong">Effort</span> Registrations</h4></div>
						<div class="card-content" style="position:relative;padding-bottom:30px;top:20px">
							<div id="hcscRegistrations" style=""></div>
						</div>
					</div>
				</td>
				<td style="width:2%">&nbsp;</td>
				<td style="width:49%">
					<div class="cardwrap card1 hm-new-chart half-card">
						<div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon green"><span class="strong">Effort</span> Cancer Screening</h4></div>
						<div class="card-content" style="position:relative;padding-bottom:30px;top:20px">
							<div id="cancerScreening" style=""></div>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<div class="cardwrap card1 hm-new-chart">
						<div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon green"><span class="strong">Effort</span> Doctor Visit Compliance Rates</h4></div>
						<div class="card-content" style="position:relative;padding-bottom:30px;top:20px">
							<div id="drVisitCompliance" style=""></div>
						</div>
					</div>
				</td>
			</tr>
			<tr>

				<td colspan="3">
					<div class="cardwrap card1 hm-new-chart" >
						<div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon green"><span class="strong">Effort</span> Lab Work Compliance Rates</h4></div>
						<div class="card-content" style="position:relative;padding-bottom:30px;top:20px">
							<div id="labworkCompRate" style=""></div>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td style="width:49%">
					<div class="cardwrap card1 hm-new-chart">
						<div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon blue"><span class="strong">Outcomes</span> Hospital Admissions</h4></div>
						<div class="card-content" style="position:relative;padding-bottom:30px;top:20px">
							<div id="hospitalAdmissions" style=""></div>
						</div>
					</div>
				</td>
				<td style="width:2%">&nbsp;</td>
				<td style="width:49%">
					<div class="cardwrap card1 hm-new-chart" >
						<div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon blue"><span class="strong">Outcomes</span> Average A1C</h4></div>
						<div class="card-content" style="position:relative;padding-bottom:30px;top:20px">
							<div id="chartA1C"></div>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td style="width:49%">
					<div class="cardwrap card1 hm-new-chart">
						<div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon blue"><span class="strong">Outcomes</span> Average Blood Pressure</h4></div>
						<div class="card-content" style="position:relative;padding-bottom:30px;top:20px">
							<div id="averageBP" style=""></div>
						</div>
					</div>
				</td>
				<td style="width:2%">&nbsp;</td>
				<td style="width:49%">
					<div class="cardwrap card1 hm-new-chart">
						<div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon blue"><span class="strong">Outcomes</span> Average BMI</h4></div>
						<div class="card-content" style="position:relative;padding-bottom:30px;top:20px">
							<div id="averageBMI"></div>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<div class="cardwrap card1 hm-new-chart" >
						<div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon blue"><span class="strong">Outcomes</span> Cost Savings</h4></div>
						<div class="card-content" style="position:relative;padding-bottom:30px;top:20px">
							<div id="returnOnInvestment" style=""></div>
						</div>
					</div>
				</td>
				
			</tr>
		</table>
		

		<!-- <div class="cardwrap card1 hm-new-chart">
			<div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon orange"><span class="strong">Effort</span> Engagement Percentage</h4></div>
			<div class="card-content" style="position:relative;padding-bottom:30px;top:20px">
				<div id="engagementPercent" style=""></div>
			</div>
		</div> -->

		
		
	</div> <!-- END #content -->
</div> <!-- END #content -->
<script type="text/javascript">
$( document ).ready( function () {
	window.dashboard.data = window.dashboard.data1;
	window.dashboard.init();
	circle  = window.dashboard.totalHealthScore();
	document.state.subscribe(function(state) {
		// setTimeout( function() { circle.text(window.dashboard.data2.totalHealthScore.value)}, 300);
		var _data;

		if(state.timestep <= 2 ){
			_data = window.dashboard.data1;
		} else {
			_data = window.dashboard.data2;
		}

		$(circle.text).html(_data.totalHealthScore.value);
		console.log(circle);
		window.dashboard.data = _data;
		window.dashboard.init();
	})
});
</script>
</div>
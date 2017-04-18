<div class="tab-content incentivePage" style="display:none; right: 0px;">
	<h3 class="memSearchHead area-title main">Incentive Card Management</h3>
	<div class="tabwrap mtop20">
		<a class="tab incentive new active">New Account Setup</a>
		<a class="tab incentive funding">Account Funding</a>
		<a class="tab incentive report">Activity Report</a>
		<a class="tab incentive balance">Account Balance</a>
		<a class="tab incentive statistics">Activity Statistics</a>
	</div>
	<!-- New Account -->
	<div class="incentive-content new">
		<h4 class="area-title">New Account Setup</h4>
		<div class="row field bordertop20">
			<div class="labelwrap">Customer Name</div>
			<div class="fieldwrap">
				<input type="text" class="w200"> 
			</div>
		</div>
		<div class="row field">
			<div class="labelwrap">Account Identifier</div>
			<div class="fieldwrap">
				<input type="text" class="w200"> 
			</div>
		</div>
		<div class="row field">
			<div class="labelwrap">E-Mail Address</div>
			<div class="fieldwrap">
				<input type="text" class="w200"> 
			</div>
		</div>
		<div class="row field bordertop20">
			<div class="labelwrap">Street</div>
			<div class="fieldwrap">
				<input type="text" class="w200" placeholder=""> 
			</div>
		</div>
		<div class="row field">
			<div class="labelwrap">Line 2</div>
			<div class="fieldwrap">
				<input type="text" class="w200" placeholder="If Applicable"> 
			</div>
		</div>
		<div class="row field">
			<div class="labelwrap">City</div>
			<div class="fieldwrap">
				<input type="text" class="w200" placeholder=""> 
			</div>
		</div>
		<div class="row field">
			<div class="labelwrap">State</div>
			<div class="fieldwrap">
				<input type="text" class="w200" placeholder="XX"> 
			</div>
		</div>
		<div class="row field">
			<div class="labelwrap">Zip Code</div>
			<div class="fieldwrap">
				<input type="text" class="w200" placeholder="#####"> 
			</div>
		</div>
		<div class="row field">
			<div class="labelwrap">&nbsp;</div>
			<div class="fieldwrap"><a class="button red">Submit</a></div>
		</div>
	</div>
	<!-- account funding -->
	<div class="incentive-content funding" style="display:none;">
		<h4 class="area-title">Account Funding</h4>
		<div class="row field bordertop20">
			<div class="labelwrap">Client Name</div>
			<div class="fieldwrap">
				<input type="text" class="w200" placeholder="Metro City Bakery" readonly> 
			</div>
		</div>
		<div class="row field">
			<div class="labelwrap">Account ID</div>
			<div class="fieldwrap">
				<input type="text" class="w200" placeholder="#############" readonly> 
			</div>
		</div>
		<div class="row field">
			<div class="labelwrap">Amount ($)</div>
			<div class="fieldwrap">
				<input type="text" class="w200" placeholder="00.00"> 
			</div>
		</div>
		<div class="row field bordertop20">
			<div class="labelwrap">Name On Card</div>
			<div class="fieldwrap">
				<input type="text" class="w200" placeholder=""> 
			</div>
		</div>
		<div class="row field">
			<div class="labelwrap">Card Type</div>
			<div class="fieldwrap">
				<select name="cardtype" id="cardtype" class="w200">
					<option value=""><i class="fa fa-cc-amex"></i> &nbsp;AMEX</option>
					<option value=""><i class="fa fa-cc-visa"></i> &nbsp;VISA</option>
					<option value=""><i class="fa fa-cc-mastercard"></i> &nbsp;Master Card</option>
					<option value=""><i class="fa fa-cc-discover "></i> &nbsp;Discover</option>
			</select>
			</div>
		</div>
		<div class="row field">
			<div class="labelwrap">Credit Card Number</div>
			<div class="fieldwrap">
				<input type="text" class="w200" placeholder="###############"> 
			</div>
		</div>
		<div class="row field">
			<div class="labelwrap">CSC/CVC</div>
			<div class="fieldwrap">
				<input type="text" class="w200" placeholder=""> 
			</div>
		</div>
		<div class="row field">
			<div class="labelwrap">Expiration</div>
			<div class="fieldwrap">
				<input type="text" class="w200" placeholder="mm/yyyy"> 
			</div>
		</div>
		
		<div class="row field bordertop20">
			<div class="labelwrap">Street</div>
			<div class="fieldwrap">
				<input type="text" class="w200" placeholder=""> 
			</div>
		</div>
		<div class="row field">
			<div class="labelwrap">Line 2</div>
			<div class="fieldwrap">
				<input type="text" class="w200" placeholder="If Applicable"> 
			</div>
		</div>
		<div class="row field">
			<div class="labelwrap">City</div>
			<div class="fieldwrap">
				<input type="text" class="w200" placeholder=""> 
			</div>
		</div>
		<div class="row field">
			<div class="labelwrap">State</div>
			<div class="fieldwrap">
				<input type="text" class="w200" placeholder="XX"> 
			</div>
		</div>
		<div class="row field">
			<div class="labelwrap">Zip Code</div>
			<div class="fieldwrap">
				<input type="text" class="w200" placeholder="#####"> 
			</div>
		</div>
		<div class="row field bordertop20">
			<div class="labelwrap"></div>
			<div class="fieldwrap">
				<a class="radio form card deletecard active">Delete Card Number</a>
				<a class="radio form card savecard">Save Card Number</a>
			</div>
		</div>
		<div class="row field mbot20">
			<div class="labelwrap">&nbsp;</div>
			<div class="fieldwrap"><a class="button red">Submit</a></div>
		</div>
	</div>
	<!-- Activity Report -->
	<div class="incentive-content report" style="display:none;">
		<h4 class="area-title">Member/Gift Card Activity Report</h4>
		<div class="row field bordertop20">
			<div class="labelwrap">Report Type</div>
			<div class="fieldwrap">
				<a class="radio form report incentive-weekly active">Weekly Report</a>
				<a class="radio form report incentive-monthly">Monthly Report</a>
				<a class="radio form report incentive-ytd">YTD Report</a>
			</div>
		</div>

		<div class="row mtop20">
		<table id="incentivManagement/activity-table"
		data-domain="incentivManagement/activity"
		class = "bs-table">
		<thead>
			<tr>
				<th data-field="client" >Client</th>
				<th data-field="dateRange" >Date Range</th>
				<th data-field="lastName" >Last Name</th>
				<th data-field="firstName" >First Name</th>
				<th data-field="mi" >MI</th>
				<th data-field="dob" >DOB</th>
				<th data-field="age" >Age</th>
				<th data-field="gender" >Gender</th>
				<th data-field="card" >Card</th>
				<th data-field="dollarAmount" >Dollar Amount</th>
				<th data-field="cardsRedeemedMember" >Cards Redeemed/Member</th>
				<th data-field="totalRedeemed" >Total Redeemed</th>
			</tr>	
		</thead>
		</table>
		</div>
		
	</div>
	<!-- Account Balance -->
	<div class="incentive-content balance" style="display:none;">
		<h4 class="area-title">Account Balance</h4>
		<div class="row field bordertop20">
			<div class="labelwrap">Report Type</div>
			<div class="fieldwrap">
				<a class="radio form balance incentive-balance-weekly active">Weekly Report</a>
				<a class="radio form balance incentive-balance-monthly">Monthly Report</a>
			</div>
		</div>
		<div class="row mtop20">
		<table id="incentivManagement/balance-table"
		data-domain="incentivManagement/balance"
		class = "bs-table">
		<thead>
			<tr>
				<th data-field="client" >Client</th>
				<th data-field="startDate" >Start Date</th>
				<th data-field="weeklyDateSpa" >Weekly Date Span<th>
				<th data-field="monthlyDateSpan" >Monthly Date Span</th>
				<th data-field="startingBalance" >Starting Balance</th>
				<th data-field="totalCardsRedeemed" >Total Cards Redeemed</th>
				<th data-field="totalCostOfCardsRedeemed" >Total Cost of Cards Redeemed</th>
				<th data-field="endingBalance" >Ending Balance</th>
				<th data-field="balanceThreshold" >Balance Threshold</th>
			</tr>
		</thead>
		</table>
		</div>
		
	</div>
	<!-- Activity Statistics -->
	<div class="incentive-content statistics" style="display:none;">
		<h4 class="area-title">Activity Statistics</h4>
		<div class="row field bordertop20">
			<div class="labelwrap">Report Type</div>
			<div class="fieldwrap">
				<a class="radio form statistics incentive-statistics-weekly active">Week</a>
				<a class="radio form statistics incentive-statistics-monthly">Month</a>
				<a class="radio form statistics incentive-statistics-monthly">YTD</a>
			</div>
		</div>
	</div>
</div>
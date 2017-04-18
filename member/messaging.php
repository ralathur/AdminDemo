<div class="content-area clearfix" id="content-messaging">
	<h3 class="area-title">Messaging</h3>
	<h5 class="area-title mtop20">Note History for Judy</h5>
	<div class="row mtop20">
		<table id="messaging-table"
		data-domain="messaging"
		class = "bs-table"
		data-sort-name="date"
		data-sort-order="desc">
		<thead>
			<tr>
				<th data-field="date" data-sortable="true">Date</th>
				<th data-field="subject">Subject</th>
				<th data-field="message">Message</th>
				<th data-field="method" data-sortable="true">Method</th>
			</tr>
		</thead>
	</table>
</div>
<div class="row">
	<a data-toggle="modal" data-target="#sendMessage"class="button red alignleft various mtop20"><i class="fa fa-envelope "></i>&nbsp; Send Message</a>
	<a data-toggle="modal" data-target="#logMessage" class="button red alignleft various mtop20 mleft10"><i class="fa fa-plus-circle"></i>&nbsp;Add History</a>
</div>
</div>

<!-- Send Message -->
<div class="modal fade" hidden id="sendMessage">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content" style='height:460px'>
			<div class="modal-header">
				<h4>Send Message</h4>
			</div>
			<div class="modal-body">
				<div class="row field">
					<div class="labelwrap">
						<label for="call-cat">Message Subject</label>
					</div>
					<div class="fieldwrap">
						<input type="text" class="w100p" value="" id='messge-subject' placeholder="Intro"></input>
					</div>
				</div>  
				<div class="row field">
					<div class="labelwrap">
						<label for="call-cat">Message</label>
					</div>
					<div class="fieldwrap" >
						<textarea rows="10" cols="50" style="resize:none; line-height: normal;" id='message-input' >Hi Judy, my name is Amy Barnes and I'm a registered nurse here to help you manage your diabetes and answer your questions. Is now a good time to talk?</textarea>
					</div>
				</div>
				<div class="row field">
					<div class="labelwrap">
						<label for="call-cat">Method</label>
					</div>
					<div class="fieldwrap">
						<select name="diag-source" id="msg-source">
							<option>Email</option>
							<option>text</option>
							<option>push notification</option>
						</select>
					</div>
				</div>  
				<div class="row modal-footer">
					<div class="pull-right">
						<a class="button red" data-dismiss="modal" onclick='hop()'><i class="fa fa-envelope"></i>&nbsp; Send</a>
						<a class="button gray mleft20" data-dismiss="modal"><i class="fa fa-times-circle"></i>&nbsp; Cancel</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function hop () {
		console.log($('#messge-subject').val());
		console.log($('#message-input').val());
		console.log($('#msg-source option:selected').text());

		$table = $('#messaging-table');

		console.log($table.bootstrapTable('getData')[0]);

		var currentdate = new Date(); 
		var datetime = currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear();

		var data = {
			"date" : datetime,
			"subject" : 'Intro', 
			"message" : $('#message-input').val(), 
			"method" : $('#msg-source option:selected').text()		}

		$table.bootstrapTable('append', data);
		console.log($table);
		// document.state.set({'timestep': 4});

		document.cookie= "notify2=true;Path=/";
	}

</script>

<!-- log Message -->
<div class="modal fade" hidden id="logMessage">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style='height:270px'>
			<div class="modal-header">
				<h4>log Message</h4>
			</div>
			<div class="modal-body">
				<div class="row field">
					<div class="labelwrap">
						<label for="call-cat">Subject</label>
					</div>
					<div class="fieldwrap">
						<input type="text" class="w100p" value="" id="" placeholder="" />
					</div>
				</div>  
				<div class="row field">
					<div class="labelwrap">
						<label for="call-cat">method</label>
					</div>
					<div class="fieldwrap">
						<!-- <input type="text" class="w100p" value="" id="" placeholder="" /> -->
						<select name="advdaterange" id="advdaterange" >
							<option>Phone Call</option>
							<option>Video Call</option>
							<option>Missed Call</option>
							<option>Email</option>
							<option>Voicemail</option>
							<option>Mail</option>
							<option>text</option>
							<option>Push Notification</option>
						</select>
					</div>
				</div>          
				<div class="row field">
					<div class="labelwrap">
						<label for="call-date-from" class="alignleft mright10 strong">Date:</label>
					</div>
					<div class="fieldwrap">
						<input type="text" class="w120 datepicker" value="" id="call-date-from" value="04/01/2015" placeholder="04/01/2015" />
					</div>
				</div>  

				<div class="row modal-footer">
					<div class="pull-right">
						<a class="button red" data-dismiss="modal"><i class="fa fa-envelope"></i>&nbsp; log</a>
						<a class="button gray mleft20" data-dismiss="modal"><i class="fa fa-times-circle"></i>&nbsp; Cancel</a>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
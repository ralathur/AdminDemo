
$(document).ready(function(){

	
	// Show Member Search Results
	$('.searchnow').click(function(){
		 $('.results.search').fadeIn(200);
	});
	
	// Show Advanced Search Results
	$('.searchnowadv').click(function(){
		 $('.results.searchadv').fadeIn(200);
	});
	
	// Show Call Tracking Search Results
	$('.search-call-tracking').click(function(){
		 $('.results.calltracking').fadeIn(200);
	});	
	
	// Show Lab / Test Search Results
	$('.search-lab-results').click(function(){
		 $('.results.lab').fadeIn(200);
	});	
	
	// Show Diagnoses Search Results
	$('.search-diag').click(function(){
		 $('.results.diag').fadeIn(200);
	});	
	
	// Show Procedures Search Results
	$('.search-proc').click(function(){
		 $('.results.proc').fadeIn(200);
	});	
	
	// Show Medical Claims Search Results
	$('.search-claims-medical').click(function(){
		 $('.results.claims-medical').fadeIn(200);
	});	
	
	// Show Medical Events Search Results
	$('.search-medevents').click(function(){
		 $('.results.medevents').fadeIn(200);
	});	
	
	// Show Pharmacy Claims Search Results
	$('.search-claims-pharm').click(function(){
		 $('.results.claims-pharm').fadeIn(200);
	});
	
	// Show HA Credit Section
	$('.show-hacredit-results').click(function(){
		 $('.row.hacredit').fadeIn(200);
	});

	$('.hide-hacredit-results').click(function(){
		 $('.row.hacredit').fadeOut(200);
	});
	
	// Show Medical Event Add Content
	$('.show-medevent-add').click(function() {
		$('.medical-events-add-content').fadeIn(200);
	});
	
	$('.hide-medevent').click(function() {
		$('.medical-events-add-content').fadeOut(200);
	});


	//im sorry :(
	// Show Medical Claims
	$('.show-claims-medical').click(function () {
		$('.show-medical-claim-content').click(function(){
			 $('.claimsIDcontent').fadeIn(200);
		});
	});
	// Show RX Claims
	$('.show-claims-pharm').click(function () {
		$('.showRXclaims').click(function(){
			 $('.RXclaimsCont').fadeIn(200);
		});
	});


// ----------------

	$('.radio.form.elligibility').click(function(){
		$('.radio.form').removeClass('active');
		$(this).addClass('active');
	});	
	
	$('.radio.form.notification').click(function(){
		$('.radio.form').removeClass('active');
		$(this).addClass('active');
	});	
	
	$('.radio.form.other').click(function(){
		$('.radio.form').removeClass('active');
		$(this).addClass('active');
	});	
	
	$('.radio.year.current').click(function(){
		$('.radio.year').removeClass('active');
		$(this).addClass('active');
	});	
	
	$('.radio.year.previous').click(function(){
		$('.radio.year').removeClass('active');
		$(this).addClass('active');
	});	
	
//parameters
	$('.radio.parameter.and').click(function(){
		$('.radio.parameter').removeClass('active');
		$(this).addClass('active');
	});	
	
	$('.radio.parameter.or').click(function(){
		$('.radio.parameter').removeClass('active');
		$(this).addClass('active');
	});	
	
	$('.radio.parameter.2plus').click(function(){
		$('.radio.parameter').removeClass('active');
		$(this).addClass('active');
		$('.checkbox').each(function() { //loop through each checkbox
				this.checked = true;  //select all checkboxes with class "checkbox1"               
			});
	});	
	
	$('.check.prev-exam-date .fa-square-o').click(function(){
		$(this).toggleClass('fa-check-square');
	});
	
	$('label.prev-exam-date').click(function(){
		$('.check.prev-exam-date .fa-square-o').toggleClass('fa-check-square');
	});
	
	$('.check.a1cwaiver .fa-square-o').click(function(){
		$(this).toggleClass('fa-check-square');
	});
	
	$('label.a1cwaiver').click(function(){
		$('.check.a1cwaiver .fa-square-o').toggleClass('fa-check-square');
	});
	
	$('.check.ldlwaiver .fa-square-o').click(function(){
		$(this).toggleClass('fa-check-square');
	});
	
	$('label.ldlwaiver').click(function(){
		$('.check.ldlwaiver .fa-square-o').toggleClass('fa-check-square');
	});
	
	$('.check.creatwaiver .fa-square-o').click(function(){
		$(this).toggleClass('fa-check-square');
	});
	
	$('label.creatwaiver').click(function(){
		$('.check.creatwaiver .fa-square-o').toggleClass('fa-check-square');
	});
	
// ----------------

// Message Center Campaigns

	$('.tab.campaign.current').click(function(){
		$('.tab.campaign').removeClass('active');
		$('.campaign-content').fadeOut(200);
		$('.campaign-content.current').delay(200).fadeIn(200);
		$(this).addClass('active');
	});	
	
	$('.tab.campaign.historical').click(function(){
		$('.tab.campaign').removeClass('active');
		$('.campaign-content').fadeOut(200);
		$('.campaign-content.historical').delay(200).fadeIn(200);
		$(this).addClass('active');
	});	
	
	$('.tab.campaign.create').click(function(){
		$('.tab.campaign').removeClass('active');
		$('.campaign-content').fadeOut(200);
		$('.campaign-content.create').delay(200).fadeIn(200);
		$(this).addClass('active');
	});
	
	$('.campaign.example').click(function(){
		$('.tab.campaign').removeClass('active');
		$('.campaign-content').fadeOut(200);
		$('.campaign-content.example').delay(200).fadeIn(200);
		$('.tab.campaign.current').addClass('active');
	});
	
	$('.radio.query1.and').click(function(){
		$('.radio.query1').removeClass('active');
		$('.additional-query2').fadeIn(200);
		$(this).addClass('active');
	});	
	
	$('.radio.query1.or').click(function(){
		$('.radio.query1').removeClass('active');
		$('.additional-query2').fadeIn(200);
		$(this).addClass('active');
	});	
	
	$('a.cancel-query1').click(function(){
		$('.radio.query1').removeClass('active');
		$('.additional-query2').fadeOut(200);
	});	
	
	$('.radio.query2.and').click(function(){
		$('.radio.query2').removeClass('active');
		$('.additional-query3').fadeIn(200);
		$(this).addClass('active');
	});	
	
	$('.radio.query2.or').click(function(){
		$('.radio.query2').removeClass('active');
		$('.additional-query3').fadeIn(200);
		$(this).addClass('active');
	});	

// END Message Center Campaigns 

	// Active Menu Items & Content Areas
	$('.menuitem').on('click', function() {
		$('.menuitem').removeClass('active');
		$('.content-area').removeClass('active');
		$(this).addClass('active'); 
	});

	$('.show-risks-conditions').on('click', function() {
		$('.content-area').fadeOut(200);
		$('#content-risks-conditions').delay(200).fadeIn(200);
	});
	
	$('.show-goals-activities').on('click', function() {
		$('.content-area').fadeOut(200);
		$('#content-goals-activities').delay(200).fadeIn(200);
	});

	$('.show-health-profile').on('click', function() {
		$('.content-area').fadeOut(200);
		$('#content-health-profile').delay(200).fadeIn(200);
	});

	$('.show-pd').on('click', function() {
		$('.content-area').fadeOut(200);
		$('#content-pd').delay(200).fadeIn(200);
	});
	
	$('.show-demo').on('click', function() {
		$('.content-area').fadeOut(200);
		$('#content-demo').delay(200).fadeIn(200);
	});
	
	$('.show-family').on('click', function() {
		$('.content-area').fadeOut(200);
		$('#content-family').delay(200).fadeIn(200);
	});
	
	$('.show-security').on('click', function() {
		$('.content-area').fadeOut(200);
		$('#content-security').delay(200).fadeIn(200);
	});
	
	$('.show-messaging').on('click', function() {
		$('.content-area').fadeOut(200);
		$('#content-messaging').delay(200).fadeIn(200);
	});
	
		$('.show-tracking').on('click', function() {
			$('.content-area').fadeOut(200);
			$('#content-tracking').delay(200).fadeIn(200);
		});
		
		$('.show-tracking-new').on('click', function() {
			$('.content-area').fadeOut(200);
			$('#content-tracking-new').delay(200).fadeIn(200);
		});
	
	$('.show-diag').on('click', function() {
		$('.content-area').fadeOut(200);
		$('#content-diag').delay(200).fadeIn(200);
	});
	
	$('.show-proc').on('click', function() {
		$('.content-area').fadeOut(200);
		$('#content-proc').delay(200).fadeIn(200);
	});
	
	$('.show-claims-medical').on('click', function() {
		$('.content-area').fadeOut(200);
		$('#content-claims-medical').delay(200).fadeIn(200);
	});
	
	$('.show-medevents').on('click', function() {
		$('.content-area').fadeOut(200);
		$('#content-medevents').delay(200).fadeIn(200);
	});
	
	$('.show-claims-pharm').on('click', function() {
		$('.content-area').fadeOut(200);
		$('#content-claims-pharm').delay(200).fadeIn(200);
	});
	
	$('.show-lab').on('click', function() {
		$('.content-area').fadeOut(200);
		$('#content-lab').delay(200).fadeIn(200);
	});
	
		$('.show-lab-add').on('click', function() {
			$('.content-area').fadeOut(200);
			$('#content-lab-add').delay(200).fadeIn(200);
		});
		
		$('.show-lab-add-bmi').on('click', function() {
			$('.content-area').fadeOut(200);
			$('#content-lab-add-bmi').delay(200).fadeIn(200);
		});
	
	$('.show-hacredit').on('click', function() {
		$('.content-area').fadeOut(200);
		$('#content-hacredit').delay(200).fadeIn(200);
	});
	
	$('.show-override').on('click', function() {
		$('.content-area').fadeOut(200);
		$('#content-override').delay(200).fadeIn(200);
	});
	
	//search screen
	//$('.menuitem').on('click', function() {
	//	$('.menuitem').removeClass('active');
	//	$('.content-area').removeClass('active');
	//	$(this).addClass('active'); 
	//});
	
	// Stuff
	$('.show-memsearch').on('click', function() {
		$('.tab-content').fadeOut(200);
		$('.memSearchContent').delay(200).fadeIn(200);
	});
	
	$('.show-advsearch').on('click', function() {
		$('.tab-content').fadeOut(200);
		$('.advSearchContent').delay(200).fadeIn(200);
	});
	
	$('.show-incentive').on('click', function() {
		$('.tab-content').fadeOut(200);
		$('.incentivePage').delay(200).fadeIn(200);
	});
	
	
	$('.show-client').on('click', function() {
		$('.tab-content').fadeOut(200);
		$('.clientPage').delay(200).fadeIn(200);
	});

	$('.show-gaps').on('click', function() {
		$('.tab-content').fadeOut(200);
		$('.gapsContent').delay(200).fadeIn(200);
	});
	
	/* Message Center Campaign Show / Hide */
	$('.show-mcc').on('click', function() {
		$('.tab-content').fadeOut(200);
		$('.mcc-content').delay(200).fadeIn(200);
	});
	
	$('#savedQueries').change(function(){
	if($('#savedQueries').val()=="30days")
		{
			$('.results.searchadv').fadeIn(200);
			$('.adv-search-options').fadeOut(200);
			$('.searchnowadv').fadeOut(200);
			//$('.adv-search-button').delay(200).fadeIn(200);
		}
	if($('#savedQueries').val()=="newsearch")
		{
			$('.adv-type').fadeOut(200);
			$('.searchnowadv').fadeIn(200);
			$('.results.searchadv').fadeOut(200);
			$('.adv-search-options').delay(200).fadeIn(200);
			$('.adv-search-button').delay(200).fadeIn(200);
		}
	});
	
	$('#advdaterange').change(function(){
	if($('#advdaterange').val()=="alldates")
		{
			$('#daterangeadv').fadeOut(200);
		}
	else
		{
			$('#daterangeadv').fadeIn(200);
		}
	});
	
	
	// audience change
	
	$('#messageaudience').change(function(){
	if($('#messageaudience').val()=="aud1")
		{
			$('.aud1').delay(200).fadeIn(200);
		}
	else
		{
			$('.aud1').fadeOut(200);
		}
	if($('#messageaudience').val()=="aud2")
		{
			$('.aud2').delay(200).fadeIn(200);
		}
	else
		{
			$('.aud2').fadeOut(200);
		}
	if($('#messageaudience').val()=="aud3")
		{
			$('.aud3').delay(200).fadeIn(200);
		}
	else
		{
			$('.aud3').fadeOut(200);
		}
	if($('#messageaudience').val()=="aud4")
		{
			$('.aud4').delay(200).fadeIn(200);
		}
	else
		{
			$('.aud4').fadeOut(200);
		}
	if($('#messageaudience').val()=="aud5")
		{
			$('.aud5').delay(200).fadeIn(200);
		}
	else
		{
			$('.aud5').fadeOut(200);
		}
	if($('#messageaudience').val()=="aud6")
		{
			$('.aud6').delay(200).fadeIn(200);
		}
	else
		{
			$('.aud6').fadeOut(200);
		}
	if($('#messageaudience').val()=="aud7")
		{
			$('.aud7').delay(200).fadeIn(200);
		}
	else
		{
			$('.aud7').fadeOut(200);
		}
	if($('#messageaudience').val()=="aud8")
		{
			$('.aud8').delay(200).fadeIn(200);
		}
	else
		{
			$('.aud8').fadeOut(200);
		}
	});
	
	$("input[name=adv-type]:radio").click(function(){
		if($(this).val()=='customSearch')
			{
				$('.adv-type').fadeOut(200);
				$('.adv-search-options').delay(200).fadeIn(200);
				$('.adv-search-button').delay(200).fadeIn(200);
			}
		});
		
	// incentive Management

	$('.tab.incentive.new').click(function(){
		$('.tab.incentive').removeClass('active');
		$('.incentive-content').fadeOut(200);
		$('.incentive-content.new').delay(200).fadeIn(200);
		$(this).addClass('active');
	});	

	$('.tab.incentive.funding').click(function(){
		$('.tab.incentive').removeClass('active');
		$('.incentive-content').fadeOut(200);
		$('.incentive-content.funding').delay(200).fadeIn(200);
		$(this).addClass('active');
	});	

	$('.tab.incentive.report').click(function(){
		$('.tab.incentive').removeClass('active');
		$('.incentive-content').fadeOut(200);
		$('.incentive-content.report').delay(200).fadeIn(200);
		$(this).addClass('active');
	});		
	
	$('.tab.incentive.balance').click(function(){
		$('.tab.incentive').removeClass('active');
		$('.incentive-content').fadeOut(200);
		$('.incentive-content.balance').delay(200).fadeIn(200);
		$(this).addClass('active');
	});			
	
	$('.tab.incentive.statistics').click(function(){
		$('.tab.incentive').removeClass('active');
		$('.incentive-content').fadeOut(200);
		$('.incentive-content.statistics').delay(200).fadeIn(200);
		$(this).addClass('active');
	});	
	
	
	// incentive check boxes
	$('.radio.report.incentive-weekly').click(function(){
		$('.radio.report').removeClass('active');
		$(this).addClass('active');
	});	
	
	$('.radio.report.incentive-monthly').click(function(){
		$('.radio.report').removeClass('active');
		$(this).addClass('active');
	});	
	
	$('.radio.report.incentive-ytd').click(function(){
		$('.radio.report').removeClass('active');
		$(this).addClass('active');
		$('.checkbox').each(function() { //loop through each checkbox
				this.checked = true;  //select all checkboxes with class "checkbox1"               
			});
	});	
	// balance boxes
	$('.radio.balance.incentive-balance-weekly').click(function(){
		$('.radio.balance').removeClass('active');
		$(this).addClass('active');
	});	
	
	$('.radio.balance.incentive-balance-monthly').click(function(){
		$('.radio.balance').removeClass('active');
		$(this).addClass('active');
	});	
	
	$('.radio.balance.incentive-balance-ytd').click(function(){
		$('.radio.balance').removeClass('active');
		$(this).addClass('active');
		$('.checkbox').each(function() { //loop through each checkbox
				this.checked = true;  //select all checkboxes with class "checkbox1"               
			});
	});	
	// activity stats
	$('.radio.statistics.incentive-statistics-weekly').click(function(){
		$('.radio.statistics').removeClass('active');
		$(this).addClass('active');
	});	
	
	$('.radio.statistics.incentive-statistics-monthly').click(function(){
		$('.radio.statistics').removeClass('active');
		$(this).addClass('active');
	});	
	
	$('.radio.statistics.incentive-statistics-ytd').click(function(){
		$('.radio.statistics').removeClass('active');
		$(this).addClass('active');
		$('.checkbox').each(function() { //loop through each checkbox
				this.checked = true;  //select all checkboxes with class "checkbox1"               
			});
	});	
	// credit card
	$('.radio.card.deletecard').click(function(){
		$('.radio.card').removeClass('active');
		$(this).addClass('active');
	});	
	
	$('.radio.card.savecard').click(function(){
		$('.radio.card').removeClass('active');
		$(this).addClass('active');
	});	
	
	//close fancybox
	$('.closebox').on('click', function() {
		parent.$.fancybox.close();
	});
	
	//health coach functions
	
	//My Participants Menu Option 
	$('.show-coachmembers').click(function(){
		 $('.participantSearchContent').delay(200).fadeIn(200);
		 $('.search-criteria').delay(200).fadeIn(200);
		 $('.results.search').fadeOut(200);
		 $('.results.assignment-overview').fadeOut(200);
	});
	
	//Show Member Assignments
	$('.show-assignment').click(function(){
		 $('.results.search').fadeOut(200);
		 $('.search-criteria').fadeOut(200);
		 $('.results.assignment-overview').delay(200).fadeIn(200);
		 $('.infohide').delay(200).fadeIn(200);
		 
	});

});




<div>
<style scoped>
	.time-scrub{
		/*bottom: 4px;*/
		font-size: 12px;
		opacity: .2;
		/*padding: 4px;*/
		position: absolute;
		bottom: 0;
		height: 20px;
		background-color: black;

	}
	.time-scrub:hover {
		opacity: 1;
	}
	.time-scrub li > a {
		padding-top: 0 !important;
		padding-bottom: 0 !important;
	}
</style>
<!-- 	<div class="time-scrub">     
		<ol>
			<li>First Time Experience</li>
			<li role="separator" class="divider"></li>
			<li>A) Initial Dashboard</li>
			<li>B) HRA Results</li>
			<li>C) Post HRA</li>
			<li>D) Post WL Commit</li>
			<li>E) Post Bio Signup</li>
			<li role="separator" class="divider"></li>
			<li>logout</li>
			<li>Message</li>
			<li>Second Login</li>
			<li>A) Post Bio Results</li>
			<li role="separator" class="divider"></li>
			<li class="active" >B) Post Manage Diabetes</li>
			<li>C) Post Diabetes Article</li>
			<li>Change Goals - Activities</li>      
		</ol>
	</div> -->
	<div class="dropup time-scrub">
		<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-top: 0;padding-bottom: 0">
			timeline
			<span class="caret"></span>
		</button>
		<ul id='time-scrub-menu' class="dropdown-menu" aria-labelledby="dropdownMenu2">
			<li><a>Post FTE</a></li>
			<li><a>post HRA</a></li>
			<li><a>WL Signup</a></li>
			<li><a>Post diabetes singup</a></li>
			<li><a>Message</a></li>
			<li class='noStep'><a>sync <input type="checkbox" id="timeLineSyncCtrl" checked value="first_checkbox"></a> </li>
		</ul>
	</div>
	<script>
	$( document ).ready(function() {
		//makes the menu items set the timestep
		var timesteps =  [];

		$('#time-scrub-menu').children().each( function() {
			if( this.className != 'noStep'){
				$(timesteps.push(this));
			}
		});

		$(timesteps).each(function( index ) {
			$(this).click(function(){
				document.state.set( {timestep:(index)});
				$('#timeLineSyncCtrl').prop('checked', false)
			})
		})

		document.state.subscribe( function (state) {
			var timesteps =  [];
			$('#time-scrub-menu').children().each( function() {
				if( this.className != 'noStep'){
					$(timesteps.push(this));
				}
			});

			$(timesteps).each(function( index ) {
				$(this).removeClass('active');
				if(state.timestep == index) {
					$(this).addClass('active');
				}
				
			});

		})
	});
	</script>
</div>
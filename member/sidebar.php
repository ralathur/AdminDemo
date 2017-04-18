	<!-- Sidebar -->
	<div class="bgsidebar"></div>
	<div class="sidebar">
		<div class="userinfo">
			<div class="row mtop5" style="display: flex; flex-direction: column; width: 100%; align-items: center;">
				<img style="height:155px; padding: 0 27px" src="./images/judyHeadshot.png"/> 
				<span style="font-size: 20px; padding-top: 15px">Judy Simmons</span>
			</div>
			<div class="row sidechart" style=" display: flex; flex-direction: column; width: 100%; align-items: center;">
				<div id="health-score-container" style="width:70%; padding: 20px 0"></div>
				<!-- <div id="chart-healthactions" style="width:100%; height:100%;"></div> -->
			</div>
			<div class="row mtop5">
				<div class="alignleft strong pright10">Date of Birth:</div>
				<div class="w50p alignright">12/20/1964</div>
			</div>
			<div class="row mtop5">
				<div class="alignleft strong pright10">Gender:</div>
				<div class="w50p alignright">Female</div>
			</div>
			<div class="row mtop5">
				<div class="alignleft strong pright10">Ethnicity:</div>
				<div class="w50p alignright">White</div>
			</div>
			<div class="row mtop5">
				<div class="alignleft strong pright10">Phone:</div>
				<div class="w50p alignright">(866) 944-9001</div>
			</div>
			<div class="row mtop5">
				<div class="alignleft strong pright10">Email:</div>
				<div class="w50p alignright">judy@gmail.com</div>
			</div>
			<div class="row mtop5">
				<div class="alignleft strong pright10">Member ID:</div>
				<div class="w50p alignright">0022222201</div>
			</div>
			<div class="row mtop5">
				<div class="alignleft strong pright10">Group ID:</div>
				<div class="w50p alignright">Z3010E0</div>
			</div>
			<div class="row mtop5">
				<div class="alignleft strong pright10">Group Name:</div>
				<div class="w50p alignright">MetroCity Bakery</div>
			</div>

<!-- 			<div class="row logging mtop10">
				<input id="logging" type="checkbox" />
				<label for="logging" class="logging-text">Turn on diagnostic logging</label>
			</div> -->
			<script type="text/javascript">
				$( document ).ready(function() {
					var circle = new ProgressBar.Circle('#health-score-container',
					{  
						// Stroke color.
						// Default: '#555'
						color: '#2196F3',


						// Width of the stroke.
						// Unit is percentage of SVG canvas' size.
						// Default: 1.0
						// NOTE: In Line shape, you should control
						// the stroke width by setting container's height.
						// WARNING: IE doesn't support values over 6, see this bug:
						//          https://github.com/kimmobrunfeldt/progressbar.js/issues/79
						strokeWidth: 7,

						// If trail options are not defined, trail won't be drawn

						// Color for lighter trail stroke
						// underneath the actual progress path.
						// Default: '#eee'
						trailColor: '#333333',

						// Width of the trail stroke. Trail is always centered relative to
						// actual progress path.
						// Default: same as strokeWidth
						trailWidth: 6,

						// Inline CSS styles for the created SVG element
						// Set null to disable all default styles.
						// You can disable individual defaults by setting them to `null`
						// If you specify anything in this object, none of the default styles
						// apply
						svgStyle: {
							display: 'block',

							// Important: make sure that your container has same
							// aspect ratio as the SVG canvas. See SVG canvas sizes above.
							width: '100%'
						},

						// Text options. Text element is a <p> element appended to container
						// You can add CSS rules for the text element with the className
						// NOTE: When text is set, 'position: relative' will be set to the
						// container for centering. You can also prevent all default inline
						// styles with 'text.style: null'
						// Default: null
						text: {
							// Initial value for text.
							// Default: null
							value: "0",

							// Class name for text element.
							// Default: 'progressbar-text'
							//className: 'progressbar__label',

							// Inline CSS styles for the text element.
							// If you want to modify all CSS your self, set null to disable
							// all default styles.
							// If the style option contains values, container is automatically
							// set to position: relative. You can disable behavior this with
							// autoStyleContainer: false
							// If you specify anything in this object, none of the default styles
							// apply
							// Default: object speficied below
							style: {
								// // Text color.
								// // Default: same as stroke color (options.color)
								position: 'absolute',
								fontSize: '68px',
								left: '50%',
								 top: '50%',
								 padding: 0,
								 margin: 0,
								// // You can specify styles which will be browser prefixed
								transform: {
									prefix: true,
									value: 'translate(-50%, -50%)'
								}
							},

							// Only effective if the text.style is not null
							// By default position: relative is applied to container if text
							// is set. Setting this to false disables that feature.
							autoStyleContainer: true,

							// Only effective if the shape is SemiCircle.
							// If true, baseline for text is aligned with bottom of
							// the SVG canvas. If false, bottom line of SVG canvas
							// is in the center of text.
							// Default: true
							alignToBottom: true
						},

						// Fill color for the shape. If null, no fill.
						// Default: null
						//fill: 'rgba(0, 0, 0, 0.5)',

						// Duration for animation in milliseconds
						// Default: 800
						duration: 1200,

						// Easing for animation. See #easing section.
						// Default: 'linear'
						easing: 'easeInOut',

						// See #custom-animations section
						// Built-in shape passes reference to itself and a custom attachment
						// object to step function
						// from: { color: '#eee' },
						// to: { color: '#2196F3' },
						// step: function(state, circle, attachment) {
						// 	circle.path.setAttribute('stroke', state.color);
						// }
					}
					);

					function changehealthscore (state) {
						setTimeout( function() { circle.animate(state.healthScore/-850);
								if($('.progressbar-text').html() != state.healthScore.toString()){
									$('.progressbar-text').html('0')
									
									
									var oldScore = parseInt($('.progressbar-text').html());
									var newScore = state.healthScore;
									var currentScore = oldScore;
									//console.log('hop');
									var timeX = Math.round(500/Math.abs(newScore-oldScore))*3;
									console.log(timeX);
									$('.progressbar-text').attr('id','progressbar-text')


									var tid = setInterval(mycode, Math.round(600/Math.abs(newScore-oldScore))*3);
									var bar = document.getElementById("progressbar-text");
									var disp = document.getElementById('hp-health-score')
									function mycode() {
										currentScore +=3;
										//console.log(bar);//wholeText
										bar.innerHTML= currentScore;
										disp.innerHTML= currentScore;
										if(currentScore >= newScore)
										{
											disp.innerHTML = newScore;
											$('.progressbar-text').html(newScore);
											clearInterval(tid);
										}
								}
							}

							$('.progressbar-text').html(state.healthScore);
						},1000);
					}

					changehealthscore(document.state.get()); 
					document.state.subscribe(changehealthscore);
				});
			</script>

			</div>

		<style scoped>
			.w50p { 
				width: 50%;
			 }
			.pright10 {
				padding-right: 10px;
			}
			#thehell {
				width: 100%;
				padding-bottom: 10px;
				text-align: center;
				bottom: 0px;
				position: absolute;
				right: 0px;
			}
			#memberportal {
				display: flex;
			    flex-direction: column;
			    width: 100%;
			    align-items: center;
			}
		</style>

		<div id='thehell'>
			<div class="memberportal">
				<a href="https://demos.healthmine.com/working/member/v5/wip/dashboard_initial.php"><img src="images/memberportal-small.png"></img></a>
			</div>
			<div class="row mtop10">
				<a href="https://demos.healthmine.com/working/member/v5/wip/dashboard_initial.php" class="strong">View Member Portal &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>
	
</div> <!-- END #rightcontainer -->

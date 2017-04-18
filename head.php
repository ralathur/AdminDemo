<!DOCTYPE html>
<!-- 
Title:	
Author: Adam
Version: 1.0
-->
 
<html>
	<head>
		<title>Admin Portal</title>
		<meta name="viewport" content="width=device-width"  />

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>

		<script src="js/knockout/knockout-3.4.0.min.js"></script> <!-- knockout data binding -->

		<script src="js/progressbar/progressbar.min.js"></script> <!-- progressbar -->


		<link rel="stylesheet" href="js/bootstrap/bootstrap.min.css"></link>
		<script src="js/bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>



		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="js/bootstrap-table/bootstrap-table.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="js/bootstrap-table/bootstrap-table.min.js"></script>

		<!-- Latest compiled and minified Locales -->
		<script src="js/bootstrap-table/bootstrap-table-en-US.min.js"></script>




		<link rel="stylesheet" type="text/css" media="all" href="css/style.css" /> <!-- Main Style Sheet -->
		<link rel="stylesheet" type="text/css" media="all" href="css/style-client.css" /> <!-- Main Style Sheet -->
		
		<!-- Fonts -->
		<link href='//fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<!-- <link rel="stylesheet" href="js/jquery-ui.css" /> Removed so that datepicker css in style.css overrides the default -->
		
		<script type="text/javascript" src="js/healthmine.admin.js"></script>		
		<script src="js/highcharts.js"></script> <!-- High Charts -->
		<script src="js/jquery.flip.js"></script> <!-- jquery flip -->


		<script src="js/State.js"></script> <!-- appState -->
		<script src="js/bootstrapTableBuilder.js"></script> <!-- bootstrap table code -->
		<script type="text/javascript">
		$(function () {
		//PHA by Chronic or Risk Members
			$('#chart-healthactions').highcharts({
            	"chart": {
		"type": "pie",
		"height": 162,
		"width": 162,
		"style": {
			"fontFamily": "Arial"
		},
		"backgroundColor": "#ebebeb"
	},
	"tooltip": {
                "pointFormat": '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
	"plotOptions": {
		"pie": {
			"allowPointSelect": true,
			"cursor": true,
			"showInLegend": true,
			"dataLabels": {
				"enabled": false
			}
		}
	},
	"yAxis": {
		"title": {
			"text": null
		}
	},
	"title": {
		"text": null
	},
	"exporting": {
		"enabled": false
	},
	"legend": {
		"floating": true,
		"y": 13
	},
	"series": [
		{
			"index": 0,
			"colors": [
				"#e1dcdc",
				"#e21226"
				],
			"name": "Health Actions",
			"data": [
				[
					"Incompleted",
					3
				],
				[
					"Completed",
					2
				]
			]
		}
	]});
	
	//line chart
	$('#chart-activity').highcharts({
	
		"chart": {
		"type": "line",
		"height": 162,
		"width": 162,
		"style": {
			"fontFamily": "Arial"
		},
		"backgroundColor": "#ebebeb",
		"zoomType": "xy"
	},
	"tooltip": {
                "pointFormat": '{series.name}: <b>{point.y}</b>'
            },
	"yAxis": {
		"title": {
			"text": null
		}
	},
	"xAxis": {
            "categories": ['Feb', 'Mar', 'Apr']
        },
	"title": {
		"text": null
	},
	"exporting": {
		"enabled": false
	},
	"legend": {
		"floating": true,
		"y": 11,
		"enabled": false
	},
	"series": [
		{
			"index": 0,
			"dashStyle": "ShortDot",
			"dataLabels": {
				"enabled": true,
				"format": "{point.label}"
			},
			"color": "#e21226",
			"name": "eScore",
			"data": [
				{
					"name": "2/15",
					"label": null,
					"y": 771
				},
				{
					"name": "3/15",
					"label": null,
					"y": 640
				},
				{
					"name": "4/15",
					"label": null,
					"y": 900
				}

			]
		}
	]
		
	});
	
	});
	</script>
		
		
	</head>
	
	<body>

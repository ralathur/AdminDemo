$('#chart-compliance').highcharts({
                chart: {
                    type: 'bar'
                },
                title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
                xAxis: {
                    categories: ['Health Survey', 'Biometric Testing', 'Wellness Visit']
                },
                yAxis: {
                    title: {
                        text: 'Compliance Percent'
                    },
                    labels: {
                        formatter:function() {
                            var pcnt = (this.value) * 1/2.5;
                            return Highcharts.numberFormat(pcnt,0,',') + '%';
                        }
                    }
                },
                legend:
                {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: 150,
                    y: 0,
                    borderWidth: 0,
                    reversed: true,
                    labelFormatter: function() 
                    {
                        if(this.name!='Series 1')
                        {
                            return this.name;
                        }
                        else
                        {
                            return 'Legend';
                        }
                    }
                },
                tooltip: {
                    formatter: function() {
                        return  this.series.name + ' ' + this.x + '<br /><b>' +Math.ceil(Highcharts.numberFormat(this.y, 1)/305*100) + '%</b>';
                    }
                },
                plotOptions: {
            bar: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    formatter: function () {
                        return this.y + ' out of 305';
                    },
                    color: 'black',
                    style: {
                        textShadow: '0 0 2px white'
                    }
                }
            }
        },
                series: [
                {
                    name: 'YTD',
                    color: '#ffb81d',
                    index:0,
                    data: [237, 209, 233]
                }
                ]
            });
            
            //chronic
            $('#chart-chronic').highcharts({
                chart: {
                    type: 'bar'
                },
                title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
                subtitle: {
            text: '',
            x: -20
        },
                xAxis: {
                    categories: ['Symptoms of Depression', 'Metabolic Syndrome', 'Asthma', 'Diabetes', 'Pre-Diabetes', 'Secondary Prevention of CAD', 'Elevated Risk of CVD',
                    ]
                },
                yAxis: {
                    title: {
                        text: 'Prevalence of chronic conditions and health risks in observed population'
                    },
                    labels: {
                        formatter:function() {
                            var pcnt = (this.value) * 1;
                            return Highcharts.numberFormat(pcnt,0,',') + '%';
                        }
                    }
                },
                legend:
                {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 0,
                    borderWidth: 0,
                    reversed: true,
                    labelFormatter: function() 
                    {
                        if(this.name!='Series 1')
                        {
                            return this.name;
                        }
                        else
                        {
                            return 'Legend';
                        }
                    }
                },
                tooltip: {
                    formatter: function() {
                        return  this.series.name + ' ' + this.x + '<br /><b>' +Highcharts.numberFormat(this.y, 1) + '%</b>';

                    }
                },
                series: [
                {
                    name: 'YTD',
                    color: '#c091ff',
                    index:0.00,
                    data: [0.44, 1.4, 1.0, 4.7, 9, 2.1, 1.9]
                }
                ]
            });
            
            //visits
            $('#chart-visits').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
                xAxis: {
                    categories: [''],
                    title: {
                        text: 'Year To Date'
                    }
                },
                yAxis: {
                    title: {
                        text: ''
                    }
                },
                legend:
                {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 0,
                    borderWidth: 0,
                    reversed: false,
                    labelFormatter: function() 
                    {
                        if(this.name!='Series 1')
                        {
                            return this.name;
                        }
                        else
                        {
                            return 'Legend';
                        }
                    }
                },
                tooltip: {
                    formatter: function() {
                        return  this.series.name + ' ' + '<br /><b>' +Highcharts.numberFormat(this.y, 0) + '</b>';
                    }
                },
                series: [
                {
                    name: 'Visits',
                    color: '#007fc4',
                    index:0,
                    data: [425789]
                },
                {
                    name: 'Unique Visits',
                    color: '#2ea5e6',
                    index:1,
                    data: [187573]
                },              
                {
                    name: 'Population',
                    color: '#7bcc48',
                    index:2,
                    data: [225687]
                }
                ]
            });
            

            $('#chart-fitness').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
                xAxis: {
                    categories: ['Very Active', 'Somewhat Active', 'Not Active', 'No Data'],
                    title: {
                        text: ''
                    }
                },
                yAxis: {
                    title: {
                        text: ''
                    },
                    labels: {
                        formatter:function() {
                            var pcnt = (this.value) * 1;
                            return Highcharts.numberFormat(pcnt,0,',') + '%';
                        }
                    }
                },
                legend:
                {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 0,
                    borderWidth: 0,
                    reversed: false,
                    labelFormatter: function() 
                    {
                        if(this.name!='Series 1')
                        {
                            return this.name;
                        }
                        else
                        {
                            return 'Legend';
                        }
                    }
                },
                tooltip: {
                    formatter: function() {
                        return  this.series.name + ' ' + '<br /><b>' +Highcharts.numberFormat(this.y, 0) + '%</b>';
                    }
                },
                series: [
                {
                    name: 'Ages 18 to 25',
                    color: '#37661a',
                    index:0,
                    data: [37, 33, 19, 11]
                },
                {
                    name: 'Ages 26 to 39',
                    color: '#6cb33f',
                    index:1,
                    data: [29, 38, 24, 9]
                },              
                {
                    name: 'Ages 40 to 59',
                    color: '#83d94c',
                    index:2,
                    data: [17, 35, 33, 15]
                },
                {
                    name: 'Ages 60+',
                    color: '#a0cc85',
                    index:3,
                    data: [10, 34, 40, 16]
                }
                ]
            });
            
            $('#chart-bmi').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
                xAxis: {
                    categories: [''],
                    title: {
                        text: 'Year To Date'
                    }
                },
                yAxis: {
                    title: {
                        text: ''
                    }
                },
                legend:
                {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 0,
                    borderWidth: 0,
                    reversed: false,
                    labelFormatter: function() 
                    {
                        if(this.name!='Series 1')
                        {
                            return this.name;
                        }
                        else
                        {
                            return 'Legend';
                        }
                    }
                },
                tooltip: {
                    formatter: function() {
                        return  this.series.name + ' ' + '<br /><b>' +Highcharts.numberFormat(this.y, 0) + '</b>';
                    }
                },
                series: [
                {
                    name: 'Ages 18 to 25',
                    color: '#b38114',
                    index:0,
                    data: [23.2]
                },
                {
                    name: 'Ages 26 to 39',
                    color: '#ffb81d',
                    index:1,
                    data: [25.1]
                },              
                {
                    name: 'Ages 40 to 59',
                    color: '#ffd500',
                    index:2,
                    data: [24.6]
                },
                {
                    name: 'Ages 60+',
                    color: '#f2de00',
                    index:3,
                    data: [27.1]
                },
                {
                    name: 'All Members',
                    color: '#929292',
                    index:4,
                    data: [25]
                },
                ]
            });
            
            //Preventative Health Actions Completion Rate
            $('#chart-healthactions').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
                xAxis: {
                    categories: ['Completed None', 'Completed 1', 'Completed 2', 'Completed All'],
                    title: {
                        text: ''
                    }
                },
                yAxis: {
                    title: {
                        text: 'Completion Rate Percentage'
                    },
                    labels: {
                        formatter:function() {
                            var pcnt = (this.value) * 0.2; //modified to show 80%
                            return Highcharts.numberFormat(pcnt,0,',') + '%';
                        }
                    }
                },
                legend:
                {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 0,
                    borderWidth: 0,
                    reversed: false,
                    labelFormatter: function() 
                    {
                        if(this.name!='Series 1')
                        {
                            return this.name;
                        }
                        else
                        {
                            return 'Legend';
                        }
                    }
                },
                plotOptions: {
            series: {
                stacking: 'normal'
            }
        },
                tooltip: {
                    formatter: function() {
                        return  this.series.name + ' ' + '<br /><b>' +Highcharts.numberFormat(this.y, 0) + '%</b>';
                    }
                },
                series: [
                {
                    name: 'No Rewards',
                    color: '#731424',
                    index:0,
                    data: [8, 25, 5, 10]
                },
                {
                    name: 'HIA',
                    color: '#bf213c',
                    index:1,
                    data: [17, 75, 39, 18]
                },              
                {
                    name: 'Enhanced',
                    color: '#f12a4b',
                    index:2,
                    data: [21, 80, 41, 20]
                },
                {
                    name: 'HIA + Enhanced',
                    color: '#f17186',
                    index:3,
                    data: [23, 91, 49, 26]
                }
                ]
            });
            
            //Preventative Health Actions Completion Rate (gender)
            $('#chart-healthactions-gender').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
                xAxis: {
                    categories: ['Completed None', 'Completed 1', 'Completed 2', 'Completed All'],
                    title: {
                        text: ''
                    }
                },
                yAxis: {
                    title: {
                        text: ''
                    },
                    labels: {
                        formatter:function() {
                            var pcnt = (this.value) * 0.2; //modified to show 80%
                            return Highcharts.numberFormat(pcnt,0,',') + '%';
                        }
                    }
                },
                legend:
                {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 0,
                    borderWidth: 0,
                    reversed: false,
                    labelFormatter: function() 
                    {
                        if(this.name!='Series 1')
                        {
                            return this.name;
                        }
                        else
                        {
                            return 'Legend';
                        }
                    }
                },
                plotOptions: {
            series: {
                //stacking: 'normal'
            }
        },
                tooltip: {
                    formatter: function() {
                        return  this.series.name + ' ' + '<br /><b>' +Highcharts.numberFormat(this.y, 0) + '%</b>';
                    }
                },
                series: [
                {
                    name: 'Male',
                    color: '#2275F5',
                    index:0,
                    data: [23, 81, 25, 7]
                },
                {
                    name: 'Female',
                    color: '#F386FF',
                    index:1,
                    data: [21, 88, 43, 12]
                }
                ]
            });
            
            //Preventative Health Actions Completion Rate By Age
            $('#chart-healthactions-age').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
                xAxis: {
                    categories: ['Completed None', 'Completed 1', 'Completed 2', 'Completed All'],
                    title: {
                        text: ''
                    }
                },
                yAxis: {
                    title: {
                        text: ''
                    },
                    labels: {
                        formatter:function() {
                            var pcnt = (this.value) * 0.2; //modified to show 80%
                            return Highcharts.numberFormat(pcnt,0,',') + '%';
                        }
                    }
                },
                legend:
                {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 0,
                    borderWidth: 0,
                    reversed: false,
                    labelFormatter: function() 
                    {
                        if(this.name!='Series 1')
                        {
                            return this.name;
                        }
                        else
                        {
                            return 'Legend';
                        }
                    }
                },
                plotOptions: {
            series: {
                //stacking: 'normal'
            }
        },
                tooltip: {
                    formatter: function() {
                        return  this.series.name + ' ' + '<br /><b>' +Highcharts.numberFormat(this.y, 0) + '%</b>';
                    }
                },
                series: [
                {
                    name: 'Age 0-9',
                    color: '#00689E',
                    index:0,
                    data: [23, 81, 25, 7]
                },
                {
                    name: 'Age 10-19',
                    color: '#00989e',
                    index:1,
                    data: [21, 88, 43, 12]
                },              
                {
                    name: 'Age 20-29',
                    color: '#0c9d6f',
                    index:2,
                    data: [17, 91, 41, 4]
                },
                {
                    name: 'Age 30-39',
                    color: '#0c9d38',
                    index:3,
                    data: [14, 87, 39, 8]
                },
                {
                    name: 'Age 40-49',
                    color: '#6b9d0c',
                    index:3,
                    data: [10, 82, 32, 12]
                },
                {
                    name: 'Age 50+',
                    color: '#9d8e0c',
                    index:3,
                    data: [9, 71, 30, 5]
                }
                ]
            });
            
            //PHA by Chronic or Risk Members
            $('#chart-phachronicrisk').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            legend:
                {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -20,
                    y: 50,
                    borderWidth: 0,
                    reversed: false,
                    labelFormatter: function() 
                    {
                        if(this.name!='Series 1')
                        {
                            return this.name;
                        }
                        else
                        {
                            return 'Legend';
                        }
                    }
                },
            series: [{
                type: 'pie',
                name: 'Population',
                
                data: [
                    {
                        name: 'None',
                        y: 8.2,
                        sliced: false,
                        selected: false,
                        color: '#593c80'
                        
                    },
                    {
                        name: '1',
                        y: 3.2,
                        sliced: false,
                        selected: false,
                        color: '#886ab1'
                        
                    },
                    {
                        name: '2',
                        y: 1.4,
                        sliced: false,
                        selected: false,
                        color: '#b698de'
                        
                    },
                    {
                        name: '3',
                        y: 0.9,
                        sliced: false,
                        selected: false,
                        color: '#c0b0db'
                        
                    }
                ]
            }]  
        });
        
        //User Activity YTD By Gender 
            $('#chart-activity-gender').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
                xAxis: {
                    categories: ['Login', 'Logout', 'Password Change', 'Password Reset', 'Self Registration', 'Username Change', 'Username Retrieval', 'Read Message', 'View Video', 'Read Article', 'Search PHA', 'Connect Biofit Device'],
                    title: {
                        text: ''
                    }
                },
                yAxis: {
                    title: {
                        text: ''
                    },
                    labels: {
                        formatter:function() {
                            var pcnt = (this.value) * 0.5; //modified to show 80%
                            return Highcharts.numberFormat(pcnt,0,',') + '%';
                        }
                    }
                },
                legend:
                {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 0,
                    borderWidth: 0,
                    reversed: false,
                    labelFormatter: function() 
                    {
                        if(this.name!='Series 1')
                        {
                            return this.name;
                        }
                        else
                        {
                            return 'Legend';
                        }
                    }
                },
                plotOptions: {
            series: {
                stacking: 'normal'
            }
        },
                tooltip: {
                    formatter: function() {
                        return  this.series.name + ' ' + '<br /><b>' +Highcharts.numberFormat(this.y, 0) + '%</b>';
                    }
                },
                series: [
                {
                    name: 'Male',
                    color: '#2275F5',
                    index:0,
                    data: [45, 75, 50, 67, 56, 45, 77, 34, 67, 43, 83, 64]
                },
                {
                    name: 'Female',
                    color: '#F386FF',
                    index:1,
                    data: [55, 95, 40, 55, 55, 43, 65, 30, 64, 40, 86, 60]
                }
                ]
            });
            
            
            $('#chart-advancedbenefits').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            legend:
                {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -20,
                    y: 50,
                    borderWidth: 0,
                    reversed: false,
                    labelFormatter: function() 
                    {
                        if(this.name!='Series 1')
                        {
                            return this.name;
                        }
                        else
                        {
                            return 'Legend';
                        }
                    }
                },
            series: [{
                type: 'pie',
                name: 'Population',
                
                data: [
                    ['Non Compliant',       26.8],
                    {
                        name: 'Compliant',
                        y: 12.8,
                        sliced: true,
                        selected: true,
                        color: '#6cb33f'
                        
                    }
                ]
            }]  
        });
        //female activities - old... but maybe better
        $('#chart-activities-female').highcharts({
            "chart": {
        "type": "pie",
        "height": 347,
        "width": 295,
        "style": {
            "fontFamily": "Arial"
        }
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
        "text": "Female"
    },
    "legend": {
        "y": 6,
        "x": 6,
        "width":290,
        "itemWidth":145,
        "itemStyle":{"width":280}
    },
    "xAxis": {
        "type": "category"
    },
    "series": [
        {
            "index": 0,
            "tooltip": {
                "valuePrefix": null
            },
            "colors": [
                "#971f1f",
                "#da650b",
                "#faf54f",
                "#8fd12e",
                "#3cdc4d",
                "#61efb5",
                "#54e4e0",
                "#2aa3e4",
                "#464e8d",
                "#bb91e8",
                "#e891b7"
            ],
            "name": "Count",
            "data": [
                [
                    "Read Article",
                    20
                ],
                [
                    "Search PHA",
                    40
                ],
                [
                    "View Video",
                    10
                ],
                [
                    "Read Message",
                    15
                ],
                [
                    "Self Registration",
                    10
                ],
                [
                    "User Login",
                    50
                ],
                [
                    "Password Change",
                    10
                ],
                [
                    "Password Reset",
                    5
                ],
                [
                    "Username Change",
                    8
                ],
                [
                    "Get Username",
                    15
                ],
                [
                    "Logout",
                    25
                ]
            ]
        }
    ]   
            
        })
        //male activities - old... but maybe better
        $('#chart-activities-male').highcharts({
            "chart": {
        "type": "pie",
        "height": 347,
        "width": 295,
        "style": {
            "fontFamily": "Arial"
        }
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
        "text": "Male"
    },
    "legend": {
        "y": 6,
        "x": 6,
        "width":290,
        "itemWidth":145,
        "itemStyle":{"width":280}
    },
    "xAxis": {
        "type": "category"
    },
    "series": [
        {
            "index": 0,
            "tooltip": {
                "valuePrefix": null
            },
            "colors": [
                "#971f1f",
                "#da650b",
                "#faf54f",
                "#8fd12e",
                "#3cdc4d",
                "#61efb5",
                "#54e4e0",
                "#2aa3e4",
                "#464e8d",
                "#bb91e8",
                "#e891b7"
            ],
            "name": "Count",
            "data": [
                [
                    "Read Article",
                    20
                ],
                [
                    "Search PHA",
                    40
                ],
                [
                    "View Video",
                    10
                ],
                [
                    "Read Message",
                    15
                ],
                [
                    "Self Registration",
                    10
                ],
                [
                    "User Login",
                    50
                ],
                [
                    "Password Change",
                    10
                ],
                [
                    "Password Reset",
                    5
                ],
                [
                    "Username Change",
                    8
                ],
                [
                    "Get Username",
                    15
                ],
                [
                    "Logout",
                    25
                ]
            ]
        }
    ]   
            
        })
        
        $('#chart-activities').highcharts({
        title: {
            text: '',
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Users'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y}</b>'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Login',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }, {
            name: 'Logout',
            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
        }, {
            name: 'Password Change',
            data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
        }, {
            name: 'Password Reset',
            data: [2.9, 3.2, 4.7, 9.5, 12.9, 18.2, 22.0, 20.6, 19.2, 18.3, 17.6, 16.8]
        }, {
            name: 'Self Registration',
            data: [12.9, 12.2, 13.7, 14.5, 16.9, 12.2, 18.0, 19.6, 12.2, 12.3, 11.6, 10.8]
        }, {
            name: 'Username Change',
            data: [1, 1.2, 1.7, 2.5, 4.9, 6.2, 8.0, 8.6, 7.2, 7.3, 5.2, 4.2]
        }, {
            name: 'Username Retrieval',
            data: [0.9, 1.3, 2.2, 2.5, 3.9, 5.2, 9.0, 10.6, 9.2, 9.3, 7.6, 6.8]
        }, {
            name: 'Read Message',
            data: [5.9, 6.2, 6.7, 9.5, 13.9, 16.2, 17.0, 17.6, 16.2, 15.3, 12.6, 10.8]
        }, {
            name: 'View Video',
            data: [6.9, 7.2, 7.7, 9.5, 15.9, 18.2, 19.0, 18.6, 15.2, 13.3, 12.6, 12.8]
        }, {
            name: 'Read Article',
            data: [5.9, 6.2, 6.7, 7.5, 7.9, 8.2, 11.0, 12.6, 11.2, 11.3, 10.6, 9.8]
        }, {
            name: 'Search PHA',
            data: [10.9, 10.2, 11.7, 13.5, 15.9, 18.2, 18.0, 17.6, 18.2, 16.3, 17.6, 17.8]
        }, {
            name: 'Connect Biofit Device',
            data: [9.9, 9.2, 10.7, 11.5, 12.9, 13.2, 15.0, 16.6, 15.2, 15.3, 14.6, 15.8]
        }]
    });
        
        //billions of activities - password change
        $('#chart-act-pwchange').highcharts({
            "chart": {
        "type": "pie",
        "height": 115,
        "width": 295,
        "style": {
            "fontFamily": "Arial"
        }
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
    "tooltip": {
         "pointFormat": '{series.name}: <b>{point.percentage:.1f}%</b> ({point.y})'
    },
    "legend": {
        "y": 1,
        "enabled": false
    },
    "series": [
        {
            "index": 0,
            "colors": [
                "#2275f5",
                "#f386ff",
                "#90ed7d",
                "#f7a35c",
                "#8085e9",
                "#f15c80",
                "#e4d354",
                "#8085e8",
                "#8d4653",
                "#91e8e1"
            ],
            "name": "Password Change",
            "data": [
                [
                    99
                ],
                [
                    88
                ]
            ]
        }
    ]
        });
        
        //password reset
        $('#chart-act-pwreset').highcharts({
        "chart": {
        "type": "pie",
        "height": 115,
        "width": 295,
        "style": {
            "fontFamily": "Arial"
        }
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
    "tooltip": {
         "pointFormat": '{series.name}: <b>{point.percentage:.1f}%</b> ({point.y})'
    },
    "legend": {
        "y": 1,
        "enabled": false
    },
    "series": [
        {
            "index": 0,
            "colors": [
                "#2275f5",
                "#f386ff",
                "#90ed7d",
                "#f7a35c",
                "#8085e9",
                "#f15c80",
                "#e4d354",
                "#8085e8",
                "#8d4653",
                "#91e8e1"
            ],
            "name": "5",
            "data": [
                [
                    11
                ],
                [
                    12
                ]
            ]
        }
    ]   
        });
        $('#chart-act-usernamechange').highcharts({
        "chart": {
        "type": "pie",
        "height": 115,
        "width": 295,
        "style": {
            "fontFamily": "Arial"
        }
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
    "tooltip": {
         "pointFormat": '{series.name}: <b>{point.percentage:.1f}%</b> ({point.y})'
    },
    "legend": {
        "y": 1,
        "enabled": false
    },
    "series": [
        {
            "index": 0,
            "colors": [
                "#2275f5",
                "#f386ff",
                "#90ed7d",
                "#f7a35c",
                "#8085e9",
                "#f15c80",
                "#e4d354",
                "#8085e8",
                "#8d4653",
                "#91e8e1"
            ],
            "name": "5",
            "data": [
                [
                    46
                ],
                [
                    38
                ]
            ]
        }
    ]   
        });
        $('#chart-act-usernameret').highcharts({
            "chart": {
        "type": "pie",
        "height": 115,
        "width": 295,
        "style": {
            "fontFamily": "Arial"
        }
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
    "tooltip": {
         "pointFormat": '{series.name}: <b>{point.percentage:.1f}%</b> ({point.y})'
    },
    "legend": {
        "y": 1,
        "enabled": false
    },
    "series": [
        {
            "index": 0,
            "colors": [
                "#2275f5",
                "#f386ff",
                "#90ed7d",
                "#f7a35c",
                "#8085e9",
                "#f15c80",
                "#e4d354",
                "#8085e8",
                "#8d4653",
                "#91e8e1"
            ],
            "name": "5",
            "data": [
                [
                    71
                ],
                [
                    93
                ]
            ]
        }
    ]
        });
        $('#chart-act-login').highcharts({
        "chart": {
        "type": "pie",
        "height": 115,
        "width": 295,
        "style": {
            "fontFamily": "Arial"
        }
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
    "tooltip": {
         "pointFormat": '{series.name}: <b>{point.percentage:.1f}%</b> ({point.y})'
    },
    "legend": {
        "y": 1,
        "enabled": false
    },
    "series": [
        {
            "index": 0,
            "colors": [
                "#2275f5",
                "#f386ff",
                "#90ed7d",
                "#f7a35c",
                "#8085e9",
                "#f15c80",
                "#e4d354",
                "#8085e8",
                "#8d4653",
                "#91e8e1"
            ],
            "name": "5",
            "data": [
                [
                    4471
                ],
                [
                    3595
                ]
            ]
        }
    ]   
        });
        $('#chart-act-logout').highcharts({
        "chart": {
        "type": "pie",
        "height": 115,
        "width": 295,
        "style": {
            "fontFamily": "Arial"
        }
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
    "tooltip": {
         "pointFormat": '{series.name}: <b>{point.percentage:.1f}%</b> ({point.y})'
    },
    "legend": {
        "y": 1,
        "enabled": false
    },
    "series": [
        {
            "index": 0,
            "colors": [
                "#2275f5",
                "#f386ff",
                "#90ed7d",
                "#f7a35c",
                "#8085e9",
                "#f15c80",
                "#e4d354",
                "#8085e8",
                "#8d4653",
                "#91e8e1"
            ],
            "name": "5",
            "data": [
                [
                    1980
                ],
                [
                    1745
                ]
            ]
        }
    ]   
        });
        $('#chart-act-selfreg').highcharts({
        "chart": {
        "type": "pie",
        "height": 115,
        "width": 295,
        "style": {
            "fontFamily": "Arial"
        }
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
    "tooltip": {
         "pointFormat": '{series.name}: <b>{point.percentage:.1f}%</b> ({point.y})'
    },
    "legend": {
        "y": 1,
        "enabled": false
    },
    "series": [
        {
            "index": 0,
            "colors": [
                "#2275f5",
                "#f386ff",
                "#90ed7d",
                "#f7a35c",
                "#8085e9",
                "#f15c80",
                "#e4d354",
                "#8085e8",
                "#8d4653",
                "#91e8e1"
            ],
            "name": "5",
            "data": [
                [
                    111
                ],
                [
                    102
                ]
            ]
        }
    ]   
        });
        $('#chart-act-searchpha').highcharts({
        "chart": {
        "type": "pie",
        "height": 115,
        "width": 295,
        "style": {
            "fontFamily": "Arial"
        }
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
    "tooltip": {
         "pointFormat": '{series.name}: <b>{point.percentage:.1f}%</b> ({point.y})'
    },
    "legend": {
        "y": 1,
        "enabled": false
    },
    "series": [
        {
            "index": 0,
            "colors": [
                "#2275f5",
                "#f386ff",
                "#90ed7d",
                "#f7a35c",
                "#8085e9",
                "#f15c80",
                "#e4d354",
                "#8085e8",
                "#8d4653",
                "#91e8e1"
            ],
            "name": "5",
            "data": [
                [
                    643
                ],
                [
                    331
                ]
            ]
        }
    ]   
        });
        $('#chart-act-readmess').highcharts({
        "chart": {
        "type": "pie",
        "height": 115,
        "width": 295,
        "style": {
            "fontFamily": "Arial"
        }
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
    "tooltip": {
         "pointFormat": '{series.name}: <b>{point.percentage:.1f}%</b> ({point.y})'
    },
    "legend": {
        "y": 1,
        "enabled": false
    },
    "series": [
        {
            "index": 0,
            "colors": [
                "#2275f5",
                "#f386ff",
                "#90ed7d",
                "#f7a35c",
                "#8085e9",
                "#f15c80",
                "#e4d354",
                "#8085e8",
                "#8d4653",
                "#91e8e1"
            ],
            "name": "5",
            "data": [
                [
                    277
                ],
                [
                    353
                ]
            ]
        }
    ]   
        });
        $('#chart-act-readart').highcharts({
            "chart": {
        "type": "pie",
        "height": 115,
        "width": 295,
        "style": {
            "fontFamily": "Arial"
        }
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
    "tooltip": {
         "pointFormat": '{series.name}: <b>{point.percentage:.1f}%</b> ({point.y})'
    },
    "legend": {
        "y": 1,
        "enabled": false
    },
    "series": [
        {
            "index": 0,
            "colors": [
                "#2275f5",
                "#f386ff",
                "#90ed7d",
                "#f7a35c",
                "#8085e9",
                "#f15c80",
                "#e4d354",
                "#8085e8",
                "#8d4653",
                "#91e8e1"
            ],
            "name": "5",
            "data": [
                [
                    505
                ],
                [
                    408
                ]
            ]
        }
    ]
        });
        $('#chart-act-viewvid').highcharts({
            "chart": {
        "type": "pie",
        "height": 115,
        "width": 295,
        "style": {
            "fontFamily": "Arial"
        }
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
    "tooltip": {
         "pointFormat": '{series.name}: <b>{point.percentage:.1f}%</b> ({point.y})'
    },
    "legend": {
        "y": 1,
        "enabled": false
    },
    "series": [
        {
            "index": 0,
            "colors": [
                "#2275f5",
                "#f386ff",
                "#90ed7d",
                "#f7a35c",
                "#8085e9",
                "#f15c80",
                "#e4d354",
                "#8085e8",
                "#8d4653",
                "#91e8e1"
            ],
            "name": "5",
            "data": [
                [
                    238
                ],
                [
                    138
                ]
            ]
        }
    ]
        });




<!-- <div class="cardwrap wide card2">
            <div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon green"><span class="strong">Fitness Activity</span> Percentages</h4></div>
            <div class="card-content">
                <div id="chart-fitness" style="width:100%; height:100%;"></div>
            </div>
        </div> -->
        
        <!--div class="cardwrap wide card3">
            <div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon yellowdark">Average Group <span class="strong">BMI</span> Over Time</h4></div>
            <div class="card-content">
                <div id="chart-bmi" style="width:100%; height:100%;"></div>
            </div>
        </div-->
        
        <!-- <div class="cardwrap wide card4">
            <div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon orange"><span class="strong">Compliance</span> Percentages</h4></div>
            <div class="card-content">
                <div id="chart-compliance" style="width:100%; height:100%;"></div>
            </div>
        </div>
        
        <div class="cardwrap wide card5">
            <div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon red"><span class="strong">Preventive Health Actions</span> Completion Rate</h4></div>          
            <div class="card-content">
                <div id="chart-healthactions" style="width:100%; height:100%;"></div>
            </div>
        </div>      
        
        <div class="cardwrap wide card5">
            <div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon green"><span class="strong">Preventive Health Actions</span> By Gender</h4></div>          
            <div class="card-content">
                <div id="chart-healthactions-gender" style="width:100%; height:100%;"></div>
            </div>
        </div>
        
        <div class="cardwrap wide card5">
            <div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon blue"><span class="strong">Preventive Health Actions</span> By Age</h4></div>          
            <div class="card-content">
                <div id="chart-healthactions-age" style="width:100%; height:100%;"></div>
            </div>
        </div>
         -->
        
        <!--div class="cardwrap wide card6">
            <div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon green"><span class="strong">Compliance Rate </span>for Plans With Extended Benefits</h4></div>         
            <div class="card-content">
                <div id="chart-advancedbenefits" style="width:100%; height:100%;"></div>
            </div>
        </div>-->       
        
        <!-- <div class="cardwrap wide card7">
            <div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon purplelight">Rate Of <span class="strong">Chronic Conditions</span> and Health Risks Identification</h4></div>         
            <div class="card-content">
                <div id="chart-chronic" style="width:100%; height:100%;"></div>
            </div>
        </div>

        <div class="cardwrap wide card8">
            <div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon bluelight"><span class="strong">User Activity </span>over the Last 12 Months</h4></div>            
            <div class="card-content">
                <div id="chart-activities" style="width:100%; height:100%;"></div>
            </div>
        </div>
        <div class="cardwrap wide card5">
            <div class="cardstripe bg-graylight2"><h4 class="lightweight mbot10 withicon green"><span class="strong">User Activity YTD</span> by Gender</h4>
            
                    <div style="  float: right; margin-top: -38px; margin-right: -3px; font-size: 17px;"> 
                        <a class="alignright rightNav" style="color: #0079c1;  margin-right: -6%;"><i class="fa fa-arrow-right"></i></a>
                        <a class="alignright leftNav" style="color: #0079c1;  margin-right: -6%; display:none;"><i class="fa fa-arrow-left"></i></a>
                    </div>
                    
                    <div style="float: right; margin-top: -8%; padding-right: 5%">
                        <div>
                            <div style="background-color: #2275F5; height: 12px; width: 16px; margin-top: 12%; display: inline-block"></div>
                            <span style="color: #333333; font-size: 12px; font-weight: bold; fill: #333333;">Male</span>
                        </div>
                        <div style="margin-top: -15%;">
                            <div style="background-color: #F386FF; height: 12px; width: 16px; display: inline-block"></div>
                            <span style="color: #333333; font-size: 12px; font-weight: bold; fill: #333333;">Female</span>
                        </div>
                    </div>
            </div>          
            <div class="card-content">
            <div class="genderhidden1">
                <div class="activitySub">
                    <span class="titleLeft">Password Change</span>
                    <span class="titleRight">Password Reset</span>
                </div>
                <div class="chartrow">
                <div id="chart-act-pwchange" style="width:50%; height:auto; float:left;" ></div>
                <div id="chart-act-pwreset" style="width:50%; height:auto; float:left;" ></div>
                </div>
                <div class="activitySub">
                    <span class="titleLeft">Username Change</span>
                    <span class="titleRight">Username Retrieval</span>
                </div>
                <div class="chartrow">
                <div id="chart-act-usernamechange" style="width:50%; height:auto; float:left;" ></div>
                <div id="chart-act-usernameret" style="width:50%; height:auto; float:left;" ></div>
                </div>
                <div class="activitySub">
                    <span class="titleLeft">Login</span>
                    <span class="titleRight">Logout</span>
                </div>
                <div class="chartrow">
                <div id="chart-act-login" style="width:50%; height:auto; float:left;" ></div>
                <div id="chart-act-logout" style="width:50%; height:auto; float:left;" ></div>
                </div>
            </div>
            <div class="genderhidden2" style="display:none;">
                <div class="activitySub">
                    <span class="titleLeft">Self Registration</span>
                    <span class="titleRight">Search PHA</span>
                </div>
                <div class="chartrow">
                <div id="chart-act-selfreg" style="width:50%; height:auto; float:left;" ></div>
                <div id="chart-act-searchpha" style="width:50%; height:auto; float:left;" ></div>
                </div>
                <div class="activitySub">
                    <span class="titleLeft">Read Message</span>
                    <span class="titleRight">Read Article</span>
                </div>
                <div class="chartrow">
                <div id="chart-act-readmess" style="width:50%; height:auto; float:left;" ></div>
                <div id="chart-act-readart" style="width:50%; height:auto; float:left;" ></div>
                </div>
                <div class="activitySub">
                    <span class="titleLeft">View Video</span>
                    <span class="titleRight"></span>
                </div>
                <div class="chartrow">
                <div id="chart-act-viewvid" style="width:50%; height:auto; float:left;" ></div>
                </div>
            </div>
            </div>
            
            
            
        </div>
        
        
        <div class="cardwrap wide card5">
            <div class="cardstripe bg-graylight2"><h4 class="lightweight withicon purple twolines"><span class="strong">Preventive Health Actions by</span> Chronic Conditions or Medical Risks Members</h4></div>          
            <div class="card-content">
                <div id="chart-phachronicrisk" style="width:100%; height:100%;"></div>
            </div>
        </div> -->

        

var categoryData ={
    series1:["1/1/16", "2/1/16", "3/1/16", "4/1/16", "5/1/16", "6/1/16", "7/1/16", "8/1/16", "9/1/16", "10/1/16", "11/1/16", "12/1/16"],
    series2:["1/1/16", "2/1/16", "3/1/16", "4/1/16", "5/1/16", "6/1/16", "7/1/16", "8/1/16", "9/1/16", "10/1/16", "11/1/16", "12/1/16", 
     "1/1/17", "2/1/17", "3/1/17", "4/1/17", "5/1/17", "6/1/17", "7/1/17", "8/1/17", "9/1/17", "10/1/17", "11/1/17", "12/1/17"]
}

var dashboard = {
    init:function(){
        window.dashboard.compHealthScore();
        window.dashboard.chartA1C();
        window.dashboard.averageBMI();
        //window.dashboard.engagementPercent();
        window.dashboard.averageBP();
        window.dashboard.uncontrolledCond();
        // window.dashboard.popHealthEffortScore();
        window.dashboard.cancerScreening();
        window.dashboard.drVisitCompliance();
        window.dashboard.labworkCompRate();
        window.dashboard.hospitalAdmissions();
        window.dashboard.returnOnInvestment();
        // window.dashboard.popHealthScore();
        window.dashboard.hcscRegistrations();
        window.dashboard.highRiskLifestyles();
        window.dashboard.highRiskChronic();
    },

    data:{},
    data1:{
        totalHealthScore:{
            value: '622',
        },
        compHealthScore:{
            series1:[222, 400]
        },
        chartA1C:{
            categories: categoryData.series1,
            series1:[7.1, 7.3, 9.1, 9, 8.2, 8.1, 8, 9.4, 9.3, 9.2, 8.4, 8.2],
            series2:[8, 7.9, 7.8, 7.7, 7.4, 7.3, 7.2, 7.1, 6.9, 6.8, 6.7, 6.6],
            step:2
        },
        averageBMI:{
            categories: categoryData.series1,
             series1:[24.7,24.6,24.5,24.4,24.3,24.2,24.5,24.4,24.3,24.2,24.1,23.9],
             series2:[29,28.9,28.8,28.7,28.6,28.5,28.4,28.3,28.6,28.9,29.2,29.5],
             series3:[34,34.2,34.4,34.6,34.8,34.7,34.6,34.9,35.2,35.5,35.8,36.1],
            series4:[26,25.9,25.8,25.7,25.6,25.5,25.4,25.6,25.8,26,26.2,26.4],
            step:4
        },

        averageBP:{
            categories:categoryData.series1,

            series1:[128,129,130,131,129,127,122,124,123,121,118,115],
            series2:[88,89,90,91,89,87,85,88,91,90,89,88],
            step:2
                    },

        uncontrolledCond:{categories:categoryData.series1,
            step:4,
            series1:[6000,6010,6020,6030,6040,6050,6060,6070,6080,6090,6100,6110],
            series2:[1500,1510,1520,1530,1540,1550,1560,1570,1580,1590,1600,1800]
                    },

        cancerScreening:{categories:categoryData.series1,
            step:4,
            series1:[0.12,0.17,0.22,0.27,0.32,0.38,0.43,0.48,0.53,0.58,0.63,0.68],
            series2:[0.18,0.2,0.22,0.24,0.26,0.28,0.3,0.32,0.34,0.36,0.38,0.4],
            series3:[0.06,0.09,0.12,0.14,0.17,0.2,0.25,0.3,0.35,0.4,0.46,0.51]
                    },

                    drVisitCompliance:{categories:categoryData.series1,
            step:4,
            series1:[0.1,0.15,0.2,0.25,0.3,0.35,0.41,0.46,0.51,0.56,0.61,0.66],
            series2:[0.06,0.08,0.1,0.12,0.14,0.16,0.18,0.2,0.22,0.24,0.26,0.28],
            series3:[0.23,0.26,0.29,0.31,0.34,0.37,0.42,0.47,0.52,0.57,0.63,0.68],
            series4:[0.22,0.27,0.32,0.37,0.42,0.47,0.52,0.58,0.63,0.68,0.73,0.78],
            series5:[0.03,0.05,0.07,0.09,0.11,0.13,0.15,0.17,0.19,0.21,0.23,0.25],
            series6:[0.35,0.38,0.41,0.43,0.46,0.49,0.54,0.59,0.64,0.69,0.75,0.8],
            series7:[0.12,0.17,0.22,0.27,0.32,0.37,0.42,0.47,0.53,0.58,0.63,0.68],
            series8:[0.07,0.09,0.11,0.13,0.15,0.17,0.19,0.21,0.23,0.25,0.27,0.29],
            series9:[0.11,0.13,0.16,0.19,0.22,0.25,0.3,0.35,0.4,0.45,0.5,0.55],
            series10:[0.3,0.35,0.4,0.45,0.5,0.55,0.6,0.66,0.71,0.76,0.81,0.86],
            series11:[0.75,0.77,0.79,0.81,0.83,0.85,0.87,0.89,0.91,0.93,0.95,0.97],
            series12:[0.02,0.05,0.08,0.1,0.13,0.16,0.21,0.26,0.31,0.36,0.41,0.47]
         },

        labworkCompRate:{
            categories:categoryData.series1,

            step:4,

            series1:[0.1,0.151,0.202,0.253,0.304,0.355,0.406,0.457,0.508,0.559,0.61,0.661],
            series2:[0.246,0.266,0.286,0.306,0.326,0.346,0.366,0.386,0.406,0.426,0.446,0.466],
            series3:[0.057,0.085,0.113,0.141,0.169,0.197,0.248,0.299,0.35,0.401,0.452,0.503],series4:[0.348,0.399,0.45,0.501,0.552,0.603,0.654,0.705,0.756,0.807,0.858,0.909],series5:[0.346,0.366,0.386,0.406,0.426,0.446,0.466,0.486,0.506,0.526,0.546,0.566],series6:[0.35,0.378,0.406,0.434,0.462,0.49,0.541,0.592,0.643,0.694,0.745,0.796]        
        },

        hospitalAdmissions:{series1:[614,937,647,982,86,549,542,131,885,62,915,859],
            series2:[776,79,307,826,400,158,478,47,947,981,822,445]
        },

        returnOnInvestment:{
            categories:categoryData.series2,

            //step:4,

            
            series1:[0,6,7,15,19,21,26,28,29,32,35,38],
            series2:[568,568,568,568,568,568,568,568,568,568,568,568],
            series3:[568,562,561,553,549,547,542,540,539,536,533,530]
        
        },

        hcscRegistrations:{
            categories:categoryData.series1,

            step:4,

            series1:[38,82,67,207,113,195,185,169,177,230,257,299],
            series2:[0,10,32,113,160,94,77,69,56,49,37,29]
        },

        highRiskLifestyles:{
            series1:[419,405,360,164,44,31],

            series2:[20,15,10,10,5,
            3]
        },

        highRiskChronic:{
            series1:[259,203,250,447,74,26,134,31,65,5,0,18,6],
            series2:[393,296,246,19,201,131,18,67,7,60,51,6,0]
        },



    },
    data2:{
        totalHealthScore:{
            value: '645',
        },
        compHealthScore:{
            series1:[222, 423]
        },
        chartA1C:{
            categories: categoryData.series2,
            series1:[7.1, 7.3, 9.1, 9, 8.2, 8.1, 8, 9.4, 9.3, 9.2, 8.4, 8.2, 8.1, 7.7, 8.8, 8.5, 8.2, 7.9, 7.6, 7.3, 7, 6.7, 7.1, 7.3],
            series2:[8, 7.9, 7.8, 7.7, 7.4, 7.3, 7.2, 7.1, 6.9, 6.8, 6.7, 6.6, 7.4, 7.2, 7.1, 7, 6.9, 6.8, 6.2, 6.1, 6.4, 6.1, 6, 5.9],
            step:4
        },
        averageBMI:{
            categories: categoryData.series2,
            series1:[24.7,24.6,24.5,24.4,24.3,24.2,24.5,24.4, 24.3,24.2,24.1,23.9,23.7,23.5,23.7,23.9,24.1,24.3,24.5,24.3,24.1,24,23.9,23.8],
            series2:[29,28.9,28.8,28.7,28.6,28.5,28.4,28.3,28.6,28.9,29.2,29.5,29.4,29.3,29.2,29.1,29,28.9,28.8,28.7,28.6,28.5,28.4,28.3],
            series3:[34,34.2,34.4,34.6,34.8,34.7,34.6,34.9,35.2,35.5,35.8,36.1,36.4,36.3,36.2,36.1,36,35.9,35.8,35.7,35.6,35.5,35.4,35.3],
            series4:[26,25.9,25.8,25.7,25.6,25.5,25.4,25.6,25.8,26,26.2,26.4,26.6,26.8,27,27.2,27.4,27.1,26.8,26.5,26.2,25.9,25.6,25.3],
             step:4
        },
        averageBP:{
            categories:categoryData.series2,
            series1:[128,129,130,131,129,127,122,124,123,121,118,115],
            series2:[88,89,90,91,89,87,85,88,91,90,89,88],

            series1:[128,129,130,131,129,127,122,124,123,121,118,115,117,120,122,124,128,126,123],
            series2:[88, 89, 90, 91, 89, 87, 85, 88, 91, 90, 89, 88, 89, 89, 90, 90, 92, 91, 89],
            step:4
        },
        uncontrolledCond:{
            categories:categoryData.series2,
            step:4,
            series1:[6000,6010,6020,6030,6040,6050,6060,6070,6080,6090,6100,6110,6120,6130,7500,7510,7520,7530,7540],
            series2:[1500,1510,1520,1530,1540,1550,1560,1570,1580,1590,1600,1800,1810,1820,1830,1840,1850,1860,1870]
        },
        cancerScreening:{
            categories:categoryData.series2,
            step:4,
            series1:[0.12,0.17,0.22,0.27,0.32,0.38,0.43,0.48,0.53,0.58,0.63,0.68,0.42,0.46,0.5,0.54,0.58,0.62,0.66],
            series2:[0.18,0.2,0.22,0.24,0.26,0.28,0.3,0.32,0.34,0.36,0.38,0.4,0.36,0.37,0.38,0.39,0.4,0.41,0.42],
            series3:[0.06,0.09,0.12,0.14,0.17,0.2,0.25,0.3,0.35,0.4,0.46,0.51,0.38,0.43,0.45,0.47,0.49,0.54,0.59]
        },
        drVisitCompliance:{
            categories:categoryData.series2,
            step:4,
            series1:[0.1,  0.15,  0.2,  0.25,  0.3,  0.35,  0.41,  0.46,  0.51,  0.56,  0.61,  0.66,  0.26,  0.3,  0.34,  0.38,  0.42,  0.46,  0.5],
            series2:[0.06,  0.08,  0.1,  0.12,  0.14,  0.16,  0.18,  0.2,  0.22,  0.24,  0.26,  0.28,  0.24,  0.25,  0.26,  0.27,  0.28,  0.29,  0.3],
            series3:[0.23,  0.26,  0.29,  0.31,  0.34,  0.37,  0.42,  0.47,  0.52,  0.57,  0.63,  0.68,  0.24,  0.29,  0.31,  0.33,  0.35,  0.4,  0.45],
            series4:[0.22,  0.27,  0.32,  0.37,  0.42,  0.47,  0.52,  0.58,  0.63,  0.68,  0.73,  0.78,  0.34,  0.38,  0.42,  0.46,  0.5,  0.54,  0.58 ],
            series5:[0.03,  0.05,  0.07,  0.09,  0.11,  0.13,  0.15,  0.17,  0.19,  0.21,  0.23,  0.25,  0.33,  0.34,  0.35,  0.36,  0.37,  0.38,  0.39 ],
            series6:[0.35,  0.38,  0.41,  0.43,  0.46,  0.49,  0.54,  0.59,  0.64,  0.69,  0.75,  0.8,  0.23,  0.28,  0.3,  0.32,  0.34,  0.39,  0.44 ],
            series7:[0.12,  0.17,  0.22,  0.27,  0.32,  0.37,  0.42,  0.47,  0.53,  0.58,  0.63,  0.68,  0.22,  0.26,  0.3,  0.34,  0.38,  0.42,  0.46 ],
            series8:[0.07,  0.09,  0.11,  0.13,  0.15,  0.17,  0.19,  0.21,  0.23,  0.25,  0.27,  0.29,  0.31,  0.32,  0.33,  0.34,  0.35,  0.36,  0.37],
            series9:[0.11,  0.13,  0.16,  0.19,  0.22,  0.25,  0.3,  0.35,  0.4,  0.45,  0.5,  0.55,  0.15,  0.2,  0.22,  0.24,  0.26,  0.31,  0.37],
            series10:[0.3,  0.35,  0.4,  0.45,  0.5,  0.55,  0.6,  0.66,  0.71,  0.76,  0.81,  0.86,  0.27,  0.31,  0.35,  0.39,  0.43,  0.47,  0.51 ],
            series11:[0.75,  0.77,  0.79,  0.81,  0.83,  0.85,  0.87,  0.89,  0.91,  0.93,  0.95,  0.97,  0.8,  0.81,  0.82,  0.83,  0.84,  0.85,  0.86 ],
            series12:[0.02, 0.05, 0.08, 0.1, 0.13, 0.16, 0.21, 0.26, 0.31, 0.36, 0.41, 0.47, 0.23, 0.28, 0.3, 0.32, 0.34, 0.39, 0.44]
        },
        labworkCompRate:{
            categories:categoryData.series2,
            step:4,
            series1:[0.1,0.151,0.202,0.253,0.304,0.355,0.406,0.457,0.508,0.559,0.61,0.661,0.341,0.381,0.421,0.461,0.501,0.541,0.581],
            series2:[0.246,0.266,0.286,0.306,0.326,0.346,0.366,0.386,0.406,0.426,0.446,0.466,0.328,0.338,0.348,0.358,0.368,0.378,0.388],
            series3:[0.057,0.085,0.113,0.141,0.169,0.197,0.248,0.299,0.35,0.401,0.452,0.503,0.11,0.161,0.181,0.201,0.221,0.272,0.323],
            series4:[0.348,0.399,0.45,0.501,0.552,0.603,0.654,0.705,0.756,0.807,0.858,0.909,0.264,0.304,0.344,0.384,0.424,0.464,0.504],
            series5:[0.346,0.366,0.386,0.406,0.426,0.446,0.466,0.486,0.506,0.526,0.546,0.566,0.264,0.274,0.284,0.294,0.304,0.314,0.324],
            series6:[0.35,0.378,0.406,0.434,0.462,0.49,0.541,0.592,0.643,0.694,0.745,0.796,0.277,0.328,0.348,0.368,0.388,0.439,0.49]
        },
        hospitalAdmissions:{
            series1:[614,937,647,982,86,549,542,131,885,62,915,859],
            series2:[776,79,307,826,400,158,478,47,947,981,822,445]
        },
        returnOnInvestment:{
            categories:categoryData.series2,
            step:4,
            series1:[0,6,7,15,19,21,26,28,29,32,35,38, 40, 43, 48, 49, 53, 55, 57, 63, 68, 71, 73, 76],
            series2:[568,568,568,568,568,568,568,568,568,568,568,568,568,568,568,568,568,568,568,568,568,568,568,568],
            series3:[568,562,561,553,549,547,542,540,539,536,533,530,528,525,520,519,515,513,511,505,500,497,495,492]
        },
        hcscRegistrations:{
            categories:categoryData.series2,
            step:4,
            series1:[38,82,67,207,113,195,185,169,177,230,257,299,190,150,176,173,224,247,46],
            series2:[0,10,32,113,160,94,77,69,56,49,37,29,3,37,44,46,45,14,2]
        },
        highRiskLifestyles:{
            series1:[419, 405, 360, 164, 44, 31],
            series2:[20, 15, 10, 10,5,3]
        },
        highRiskChronic:{
            series1:[259,203,250,447,74,26,134,31,65,5,0,18,6],
            series2:[393,296,246,19,201,131,18,67,7,60,51,6,0]
        },


    },
    
    totalHealthScore:function(){
        var circle = new ProgressBar.Circle('#totalPopHealthScore',
            {  
                                // Stroke color.
                // Default: '#555'
                color: '#e21226',



                // Width of the stroke.
                // Unit is percentage of SVG canvas' size.
                // Default: 1.0
                // NOTE: In Line shape, you should control
                // the stroke width by setting container's height.
                // WARNING: IE doesn't support values over 6, see this bug:
                //          https://github.com/kimmobrunfeldt/progressbar.js/issues/79
                strokeWidth: 15,

                // If trail options are not defined, trail won't be drawn

                // Color for lighter trail stroke
                // underneath the actual progress path.
                // Default: '#eee'
                trailColor: '#333333',

                // Width of the trail stroke. Trail is always centered relative to
                // actual progress path.
                // Default: same as strokeWidth
                trailWidth: 15,

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
                    value: dashboard.data.totalHealthScore.value,

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
                            value: 'translate(-50%, -115%)'
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
                //  circle.path.setAttribute('stroke', state.color);
                // }
            });
            setTimeout( function() { circle.animate(-(dashboard.data.totalHealthScore.value/850))}, 300);
            console.log(dashboard.data.totalHealthScore.value/850);

        return circle;
         
    },
    compHealthScore:function(){
        $('#compHealthScore').highcharts({
                chart: {
                    type: 'bar',
                    height:400
                },
                title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
                xAxis: {
                    categories: ['Effort', 'Status']
                },
                yAxis: {
                    title: {
                        text: 'Score'
                    },
                    labels: {
                        formatter:function() {
                            return this.value;
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
                        return  this.key + ' Score: ' + this.y;
                    }
                },
                plotOptions: {
            bar: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    formatter: function () {
                        return 'Score: ' + this.y;
                    },
                    color: 'white',
                    style: {
                        textShadow: '0 0 2px white'
                    }
                }
            }
        },
        series: [
        {
            name: '',
            color: '#e21226',
            index:0,
            data: dashboard.data.compHealthScore.series1
        }]
    });
       
    },
    chartA1C : function(){
        $('#chartA1C').highcharts({
            title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
            chart:{
                height:400
            },
            // subtitle: {
            //     text: 'Source: WorldClimate.com',
            //     x: -20
            // },
            xAxis: {
                categories: ["1/1/16", "2/1/16", "3/1/16", "4/1/16", "5/1/16", "6/1/16", "7/1/16", "8/1/16", "9/1/16", "10/1/16", "11/1/16", "12/1/16", 
     "1/1/17", "2/1/17", "3/1/17", "4/1/17", "5/1/17", "6/1/17", "7/1/17", "8/1/17", "9/1/17", "10/1/17", "11/1/17", "12/1/17"],
                labels:{
                    step:dashboard.data.chartA1C.step,
                    staggerLines: 0
                }
            },
            yAxis: {
                title: {
                    text: 'A1C'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: 'A1C'
            },
            legend: {
                layout: 'vertical',
                align: 'center',
                verticalAlign: 'bottom',
                borderWidth: 0
            },
            series: [{
                name: 'Average A1c - 1yr Identified Diabetic Population',
                data: dashboard.data.chartA1C.series1
            }, {
                name: 'Average A1c - 3yr Diabetic Population',
                data: dashboard.data.chartA1C.series2
            }]
        })
    },
    averageBMI:function(){
        $('#averageBMI').highcharts({
            title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
            chart:{
                height:400
            },
            // subtitle: {
            //     text: 'Source: WorldClimate.com',
            //     x: -20
            // },
            xAxis: {
                categories: dashboard.data.averageBMI.categories,
                labels:{
                    step:dashboard.data.averageBMI.step
                }
            },
            yAxis: {
                title: {
                    text: 'BMI'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: 'BMI'
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                borderWidth: 0
            },
            series: [{
                name: 'Average BMI - Low Risk',
                data: dashboard.data.averageBMI.series1
            }, 
            {
                name: 'Average BMI - Moderate Risk',
                data: dashboard.data.averageBMI.series2
          },
            {
                name: 'Average BMI - High Risk',
                data: dashboard.data.averageBMI.series3
            }, 
            {
                name: 'Average BMI - Entire Population',
                data: dashboard.data.averageBMI.series4
            }]
        })
    },
    engagementPercent:function(){
        $('#engagementPercent').highcharts({
            title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
            chart:{
                height:400
            },
            xAxis: {
                categories: ["1/1/16","2/1/16","3/1/16","4/1/16","5/1/16","6/1/16","7/1/16","8/1/16","9/1/16","10/1/16",
                "11/1/16","12/1/16","1/1/17","2/1/17","3/1/17","4/1/17","5/1/17","6/1/17","7/1/17"],
                labels:{
                    step:4
                }
            },
            yAxis: {
                title: {
                    text: 'Engagement'
                },
                labels: {
                    formatter: function(){
                      return window.dashboard.helpers.toPercent(this.value);
                    }
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: '% Engagement'
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                borderWidth: 0
            },
            series: [{
                name: 'Unregistered',
                data: [0.995,0.99,0.985,0.983,0.981,0.977,0.954,0.932,0.91,0.889,0.886,0.883,0.88,0.877,0.874,0.872,0.869,0.867,0.864]
            },
            {
                name: 'Registered',
                data: [0.005,0.01,0.015,0.017,0.019,0.023,0.046,0.068,0.09,0.111,0.114,0.117,0.12,0.123,0.126,0.128,0.131,0.133,0.136]
            }]
        })
    },
    averageBP:function(){
        $('#averageBP').highcharts({
            title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
            chart:{
                height:400
            },
            xAxis: {
                categories: dashboard.data.averageBP.categories,
                labels:{
                    step:dashboard.data.averageBP.step
                }
            },
            yAxis: {
                title: {
                    text: 'Blood Pressure'
                },
                labels: {
                    formatter: function(){
                      return this.value;
                    }
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: 'Blood Pressure'
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                borderWidth: 0
            },
            series: [{
                name: 'Systolic',
                data: dashboard.data.averageBP.series1
            },
            {
                name: 'Diastolic',
                data: dashboard.data.averageBP.series2
            }]
        })
    },
    uncontrolledCond:function(){
        $('#uncontrolledCond').highcharts({
            title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
            chart:{
                
            },
            xAxis: {
                categories: dashboard.data.uncontrolledCond.categories,
                labels:{
                    step: dashboard.data.uncontrolledCond.step
                }
            },
            yAxis: {
                title: {
                    text: 'Members'
                },
                labels: {
                    formatter: function(){
                      return this.value;
                    }
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: 'Members'
            },
            legend: {
                layout: 'vertical',
                align: 'center',
                verticalAlign: 'bottom',
                borderWidth: 0
            },
            series: [{
                color:'#ff6e26',
                name: 'Uncontrolled Blood Pressure',
                data: dashboard.data.uncontrolledCond.series1
            },
            {
                color:'#ac3a00',
                name: 'Uncontrolled Blood Sugar (A1C > 9)',
                data: dashboard.data.uncontrolledCond.series2
            }]
        })
    },
    popHealthEffortScore:function(){
        $('#popHealthEffortScore').highcharts({
            title: {
                text: 'Population Health and Effort Score',
                x: -20 //center
            },
            chart:{
                
            },
            xAxis: {
                categories: ["1/1/16","2/1/16","3/1/16","4/1/16","5/1/16","6/1/16","7/1/16","8/1/16","9/1/16","10/1/16",
                "11/1/16","12/1/16","1/1/17","2/1/17","3/1/17","4/1/17","5/1/17","6/1/17","7/1/17"],
                labels:{
                    step:4
                }
            },
            yAxis: {
                title: {
                    text: 'Score'
                },
                labels: {
                    formatter: function(){
                      return this.value;
                    }
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: 'Score'
            },
            legend: {
                layout: 'vertical',
                align: 'center',
                verticalAlign: 'bottom',
                borderWidth: 0
            },
            series: [{
                name: 'Population Health Status Score',
                data: [340,350,360,370,490,500,510,520,530,540,500,510,480,490,500,470,490,510,550]
            },
            {
                name: 'Population Health Effort Score',
                data: [300,310,320,330,340,350,370,390,410,430,450,470,470,470,470,480,490,500,540]
            }]
        })
    },
    cancerScreening:function(){
        $('#cancerScreening').highcharts({
            title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
            chart:{
                
            },
            xAxis: {
                categories: dashboard.data.cancerScreening.categories,
                labels:{
                    step:dashboard.data.cancerScreening.step,
                }
            },
            yAxis: {
                title: {
                    text: '% Compliant'
                },
                labels: {
                    formatter: function(){
                      return window.dashboard.helpers.toPercent(this.value);
                    }
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: '% Compliant',
                formatter: function(){
                      return window.dashboard.helpers.toPercent(this.y) + ' Compliant';
                    }

            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                borderWidth: 0
            },
            series: [{
                name: 'Breast Cancer Screening',
                data: dashboard.data.cancerScreening.series1,
            },
            {
                name: 'Cervical Cancer Screening',
                data: dashboard.data.cancerScreening.series2,
            },
            {
                name: 'Colon Cancer Screening',
                data: dashboard.data.cancerScreening.series3
            }]
        })
    },
    drVisitCompliance:function(){
        $('#drVisitCompliance').highcharts({
            title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
            chart:{
                
            },
            xAxis: {
                categories: dashboard.data.drVisitCompliance.categories,
                labels:{
                    step:dashboard.data.drVisitCompliance.step
                }
            },
            yAxis: {
                title: {
                    text: '% Compliant'
                },
                labels: {
                    formatter: function(){
                      return window.dashboard.helpers.toPercent(this.value);
                    }
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: '% Compliant',
                formatter: function(){
                      return window.dashboard.helpers.toPercent(this.y) + ' Compliant';
                    }

            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                borderWidth: 0
            },
            series: [{
                name: 'Visit for Asthma',
                data: dashboard.data.drVisitCompliance.series1
            },
            {
                name: 'Visit for Behavioral Health',
                data: dashboard.data.drVisitCompliance.series2
            },
            {
                name: 'Visit for COPD',
                data: dashboard.data.drVisitCompliance.series3
            },
            {
                name: 'Visit for Diabetes',
                data: dashboard.data.drVisitCompliance.series4
            },
            {
                name: 'Visit for Elevated Risk for CVD',
                data: dashboard.data.drVisitCompliance.series5
            },
            {
                name: 'Visit for Heart Failure',
                data: dashboard.data.drVisitCompliance.series6
            },
            {
                name: 'Visit for Hyperlipidemia',
                data: dashboard.data.drVisitCompliance.series7
            },
            {
                name: 'Visit for Hypertension',
                data: dashboard.data.drVisitCompliance.series8
            },
            {
                name: 'Visit for Metabolic Syndrome',
                data: dashboard.data.drVisitCompliance.series9
            },
            {
                name: 'Visit for Obesity',
                data: dashboard.data.drVisitCompliance.series10
            },
            {
                name: 'Visit for Pregnancy',
                data: dashboard.data.drVisitCompliance.series11
            },
            {
                name: 'Visit for Tobacco Use',
                data: dashboard.data.drVisitCompliance.series12
            }]
        })
    },
    labworkCompRate:function(){
        $('#labworkCompRate').highcharts({
            title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
            chart:{
                
            },
            xAxis: {
                categories: dashboard.data.labworkCompRate.categories,
                labels:{
                    step:dashboard.data.labworkCompRate.step
                }
            },
            yAxis: {
                title: {
                    text: '% Compliant'
                },
                labels: {
                    formatter: function(){
                      return window.dashboard.helpers.toPercent(this.value);
                    }
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: '% Compliant',
                formatter: function(){
                      return window.dashboard.helpers.toPercent(this.y) + ' Compliant';
                    }

            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                borderWidth: 0
            },
            series: [{
                name: 'Blood Sugar Tests',
                data: dashboard.data.labworkCompRate.series1
            },
            {
                name: 'Hemoglobin A1C',
                data: dashboard.data.labworkCompRate.series2
            },
            {
                name: 'Lipid Panel',
                data: dashboard.data.labworkCompRate.series3
            },
            {
                name: 'Lung Function Testing',
                data: dashboard.data.labworkCompRate.series4
            },
            {
                name: 'Serum Creatinine',
                data: dashboard.data.labworkCompRate.series5
            },
            {
                name: 'Urine Microalbumin',
                data: dashboard.data.labworkCompRate.series6
            }]
        })
    },
    hospitalAdmissions: function(){
        $('#hospitalAdmissions').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
           
            // subtitle: {
            //     text: 'Source: WorldClimate.com'
            // },
            xAxis: {
                categories: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Members'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} members</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Hospital Admissions (2015)',
                data: dashboard.data.hospitalAdmissions.series1

            }, {
                name: 'Hospital Admissions (2016)',
                data: dashboard.data.hospitalAdmissions.series2

            }]
        });
    },
    returnOnInvestment:function(){
    $('#returnOnInvestment').highcharts({
            chart: {
                zoomType: 'xy'
            },
            title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
           
            xAxis: [{
                categories: dashboard.data.returnOnInvestment.categories,
                crosshair: true,
                labels:{
                    step:dashboard.data.returnOnInvestment.step
                }
            }],
            yAxis: [{ // Primary yAxis
                labels: {
                    format: '${value} M',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                },
                title: {
                    text: 'Spend',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                }
            }, { // Secondary yAxis
                title: {
                    text: 'Savings',
                    style: {
                        color: Highcharts.getOptions().colors[0]
                    }
                },
                labels: {
                    format:'${value} M',
                    style: {
                        color: Highcharts.getOptions().colors[0]
                    }
                },
                opposite: true
            }],
            tooltip: {
                shared: true
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                x: 120,
                verticalAlign: 'top',
                y: 200,
                floating: true,
                backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
            },
            series: [{
                name: 'Savings',
                type: 'column',
                format:'${value} M',
                yAxis: 1,
                data: dashboard.data.returnOnInvestment.series1,
                tooltip: {
                    valuePrefix:'$',
                    valueSuffix: 'M'
                }
            }, {
                name: 'Average Cost',
                type: 'spline',
                data: dashboard.data.returnOnInvestment.series2,
                tooltip: {
                    valuePrefix: '$',
                    valueSuffix: 'M'
                }
            },
            {
                name: 'Actual Cost',
                type: 'spline',
                data: dashboard.data.returnOnInvestment.series3,
                tooltip: {
                    valuePrefix: '$',
                    valueSuffix: 'M'
                }
            }
            ]
        });
    },
    popHealthScore:function(){
        $('#popHealthScore').highcharts({
            chart: {
                zoomType: 'x'
            },
            title: {
                text: 'Population Health Score'
            },
            subtitle: {
                text: document.ontouchstart === undefined ?
                        'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
            },
            xAxis: [{
                categories: ["1/1/16","2/1/16","3/1/16","4/1/16","5/1/16","6/1/16","7/1/16","8/1/16","9/1/16","10/1/16",
                "11/1/16","12/1/16","1/1/17","2/1/17","3/1/17","4/1/17","5/1/17","6/1/17","7/1/17"],
                labels:{
                    step:5
                }
            }],
            yAxis: {
                title: {
                    text: 'Health Score'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'area',
                name: 'Member Score',
                data: [410,420,430,575,585,595,605,615,625,500,510,480,490,500,470,490,510,550]
            }]
        });

    },
    hcscRegistrations:function(){
        $('#hcscRegistrations').highcharts({
            chart: {
                type: 'area'
            },
            title: {
                    text: '',
                    style: {
                        display: 'none'
                    }
                },
            
            xAxis: {
                categories:dashboard.data.hcscRegistrations.categories,
                allowDecimals: false,
                labels: {
                    formatter: function () {
                        return this.value; // clean, unformatted number for year
                    },
                    step: dashboard.data.hcscRegistrations.step
                }
            },
            yAxis: {
                title: {
                    text: 'Members'
                },
                labels: {
                    formatter: function () {
                        return this.value;
                    }
                }
            },
            tooltip: {
                pointFormat: '{series.name} <b>{point.y:,.0f}</b>'
            },
            plotOptions: {
                area: {
                    //pointStart: 1940,
                    marker: {
                        enabled: false,
                        symbol: 'circle',
                        radius: 2,
                        states: {
                            hover: {
                                enabled: true
                            }
                        }
                    }
                }
            },
            series: [{
                name: 'Self-Service',
                color: '#6cb33f',
                data: dashboard.data.hcscRegistrations.series1
            }, {
                name: 'Customer Service',
                color: '#222',
                data: dashboard.data.hcscRegistrations.series2
            }]
        });
    },
    
    highRiskLifestyles:function(){
        $('#highRiskLifestyles').highcharts({
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
                    categories: ['Physical Activity', 'Healthy Weight', 'Healthy Eating', 'Alcohol Use', 'Stress Management','Productivity'],
                    title: {
                        text: ''
                    }
                },
                yAxis: {
                    title: {
                        text: 'Percentage of Participants'
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
                    x: 120,
                    verticalAlign: 'top',
                    y: 100,
                    floating: true,
                    backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF',
                    layout: 'vertical',
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
                        return Highcharts.numberFormat(this.y, 0) + ' ' + this.series.name + 's';
                    }
                },
                series: [
                {
                    name: 'Subscriber',
                    color: '#ff6e26',
                    index:0,
                    data: dashboard.data.highRiskLifestyles.series1
                },
                {
                    name: 'Spouse',
                    color: '#dc4c03',
                    index:1,
                    data: dashboard.data.highRiskLifestyles.series2
                }]
            });
       
    },
    highRiskChronic:function(){
        $('#highRiskChronic').highcharts({
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
                    categories: ["High Blood Pressure (Hypertension)","Hyperlipidemia","Elevated Risk for CVD","Obesity","Diabetes","Secondary Prevention of CAD",
                                "Metabolic Syndrome","Symptoms of Depression","Asthma","COPD","Heart Failure","Smoking","Pregnancy"],
                    title: {
                        text: ''
                    }
                },
                yAxis: {
                    title: {
                        text: 'Members'
                    },
                    labels: {
                        // formatter:function() {
                        //     var pcnt = (this.value) * 0.2; //modified to show 80%
                        //     return Highcharts.numberFormat(pcnt,0,',') + '%';
                        // }
                    }
                },
                legend:
                {
                    x: -120,
                    verticalAlign: 'top',
                    align:'right',
                    y: 50,
                    floating: true,
                    backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF',
                    layout: 'vertical',
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
                        return Highcharts.numberFormat(this.y, 0) + ' ' + this.series.name;
                    }
                },
                series: [
                {
                    name: 'Registered',
                    color: '#ff6e26',
                    index:0,
                    data: dashboard.data.highRiskChronic.series1
                },
                {
                    name: 'Unregistered',
                    color: '#dc4c03',
                    index:1,
                    data: dashboard.data.highRiskChronic.series2
                }]
            });
       
    },
    helpers: {
        toPercent:function(val){
            return Math.round(100 * val) + '%';
        }
    }

}


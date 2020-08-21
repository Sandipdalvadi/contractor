"use strict";
    var ctx = document.getElementById("myChart");
    function roundChart(totalCustomerOrder,totalCustomer,labelsName){
        // console.log(labelsName);
        // console.log(totalCustomer);
        // alert(totalCustomerOrder);
        var data = {
            labels: labelsName,
            datasets: [{
                data: [parseInt(totalCustomerOrder), parseInt(totalCustomer)],
                backgroundColor: [
                    "#1ABC9C",
                    "#FCC9BA"
                ],
                borderWidth: [
                    "0px",
                    "0px"
                ],
                borderColor: [
                    "#1ABC9C",
                    "#FCC9BA"
    
                ]
            }]
        };
        var myDoughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: data
        });
    }
    function customFunction(multipleDays){

        
        var a = (AmCharts.makeChart("visitor", {
    		type: "serial",
    		hideCredits: !0,
    		theme: "light",
    		dataDateFormat: "YYYY-MM-DD",
    		precision: 2,
    		valueAxes: [{
    			id: "v1",
    			title: "Bookings",
    			position: "left",
    			autoGridCount: !1,
    			labelFunction: function (e) {
    				return Math.round(e)
    			}
    		}, {
    			id: "v2",
    			title: "Profit",
    			gridAlpha: 0,
    			position: "right",
    			autoGridCount: !1
    		}],
    		graphs: [{
    			id: "g3",
    			valueAxis: "v1",
    			lineColor: "#feb798",
    			fillColors: "#feb798",
    			fillAlphas: 1,
    			type: "column",
    			title: "Bookings",
    			valueField: "sales1",
    			clustered: !1,
    			columnWidth: .5,
    			legendValueText: "[[value]]",
    			balloonText: "[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"
    		},{
    			id: "g1",
    			valueAxis: "v2",
    			lineColor: "#fe9365",
    			fillColors: "#fe9365",
    			fillAlphas: 1,
    			type: "column",
    			title: "Profit",
    			valueField: "market1",
    			clustered: !1,
    			columnWidth: .3,
    			legendValueText: "SAR[[value]]",
    			balloonText: "[[title]]<br /><b style='font-size: 130%'>SAR[[value]]</b>"
    		}],
    		chartCursor: {
    			pan: !0,
    			valueLineEnabled: !0,
    			valueLineBalloonEnabled: !0,
    			cursorAlpha: 0,
    			valueLineAlpha: .2
    		},
    		categoryField: "date",
    		categoryAxis: {
    			parseDates: !0,
    			dashLength: 1,
    			minorGridEnabled: !0
    		},
    		legend: {
    			useGraphSettings: !0,
    			position: "top"
    		},
    		balloon: {
    			borderThickness: 1,
    			cornerRadius: 5,
    			shadowAlpha: 0
    		},
    		dataProvider: multipleDays
    	}), AmCharts.makeChart("proj-earning", {
    		type: "serial",
    		hideCredits: !0,
    		theme: "light",
    		dataProvider: [{
    			type: "UI",
    			visits: 10
    		}, {
    			type: "UX",
    			visits: 15
    		}, {
    			type: "Web",
    			visits: 12
    		}, {
    			type: "App",
    			visits: 16
    		}, {
    			type: "SEO",
    			visits: 8
    		}],
    		valueAxes: [{
    			gridAlpha: .3,
    			gridColor: "#fff",
    			axisColor: "transparent",
    			color: "#fff",
    			dashLength: 0
    		}],
    		gridAboveGraphs: !0,
    		startDuration: 1,
    		graphs: [{
    			balloonText: "Active User: <b>[[value]]</b>",
    			fillAlphas: 1,
    			lineAlpha: 1,
    			lineColor: "#fff",
    			type: "column",
    			valueField: "visits",
    			columnWidth: .5
    		}],
    		chartCursor: {
    			categoryBalloonEnabled: !1,
    			cursorAlpha: 0,
    			zoomable: !1
    		},
    		categoryField: "type",
    		categoryAxis: {
    			gridPosition: "start",
    			gridAlpha: 0,
    			axesAlpha: 0,
    			lineAlpha: 0,
    			fontSize: 12,
    			color: "#fff",
    			tickLength: 0
    		},
    		export: {
    			enabled: !1
    		}
    	}), document.getElementById("newuserchart").getContext("2d"));
        
    }
   
$(document).ready(function(){
// 	alert('Hello');

	
});
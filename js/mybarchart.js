window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Server Side Market Share"
	},
	axisY: {
		title: "Market Share (%)"
	},
	data: [{        
		type: "column",  
		showInLegend: false, 
		legendMarkerColor: "grey",
		//legendText: "",
		dataPoints: [      
			{ y: 76.5, label: "PHP" },
			{ y: 6.4,  label: "ASP.NET" },
			{ y: 5.7,  label: "Ruby" },
			{ y: 4.7,  label: "Java" },
			{ y: 3.0,  label: "Scala" },
		]
	}]
});
chart.render();

}
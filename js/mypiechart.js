window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: ""
	},
	data: [{
		type: "pie",
		startAngle: 270,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: 25, label: "Analysis"},
			{y: 25, label: "Design"},
			{y: 25, label: "Development"},
			{y: 15, label: "Testing"},
			{y: 10, label: "Launch/Maintain"}
		]
	}]
});
chart.render();

}
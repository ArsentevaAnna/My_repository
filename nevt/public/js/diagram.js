function diagramHistogram(array) {

    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        title: {
            text: "Столбчатая"
        },
        axisY: {
            /*title: "Growth Rate (in %)",
            suffix: "%",*/
            includeZero: false
        },
        data: [{
            type: "column",
            dataPoints: array
        }]
    });
    chart.render();


/*	$("#resizable").resizable({
		create: function (event, ui) {
			$("#chartContainer1").CanvasJSChart(options1);
		},
		resize: function (event, ui) {
			$("#chartContainer1").CanvasJSChart().render();
		}
	});*/
	
}

function diagramPieChart(array) {
		var chart = new CanvasJS.Chart("chartContainer", {
		animationEnabled: true,
		title:{
			text: "Круговая диаграмма",
			horizontalAlign: "left"
		},
		data: [{
			type: "doughnut",
			startAngle: 60,
			//innerRadius: 60,
			indexLabelFontSize: 17,
			indexLabel: "{label} - #percent%",
			toolTipContent: "<b>{label}:</b> {y} (#percent%)",
			dataPoints: array
			// [
				// { y: 67, label: "Inbox" },
				// { y: 28, label: "Archives" },
				// { y: 10, label: "Labels" },
				// { y: 7, label: "Drafts"},
				// { y: 15, label: "Trash"},
				// { y: 6, label: "Spam"}
			// ]
		}]
	});
	
	chart.render();
	
}
	$(document).ready(function() {
	var ma={
		'mail':'admin@gmail.com',
	}

	$.ajax({
		url:'http://localhost/test/index.php/sort/ema',
		type:'POST',
		data:ma,
        dataType: "json",
		success:r
	});

});
function r(data)
{

	document.getElementById("container").style.display="block";  
// console.log(data.length);
var chart=[];
var drill=[];
var mar=[];

for(i=0;i<data.length;i++)
{
    var total=parseInt(data[i].tamil)+parseInt(data[i].english)+parseInt(data[i].maths)+parseInt(data[i].science)+parseInt(data[i].social);
chart.push({name:data[i].register_number,y:parseInt(total),drilldown:data[i].register_number});

mar.push(["Tamil",parseInt(data[i].tamil)],["English",parseInt(data[i].english)],["Maths",parseInt(data[i].maths)],["Science",parseInt(data[i].science)],["Social",parseInt(data[i].social)]);
drill.push({name:data[i].register_number,id:data[i].register_number,data:mar});
mar=[];
}
console.log(chart);

// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Browser market shares. January, 2018'
    },
    subtitle: {
        text: 'Click the slices to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
    },
    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y}'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    "series": [
        {
            "name": "Browsers",
            "colorByPoint": true,
            "data": chart
        }
    ],
    "drilldown": {
        "series": drill
    }
});
}
function dat()
{
        // $(".loader").show();
var ma={
	'id':1
}
		$.ajax({
		url:'http://localhost/test/index.php/sort/markforsslc',
		type:'post',
		data:ma,
        datatype: 'html',
        async: false,
		success:function(data){
            //alert(data)
                    $("#popup").dialog("open").html(data);
                    return;
        },
        error: function(data) {
                $(".loader").hide();
                alert("error" + JSON.stringify(data));
            }
	});
}
function markforsslc(data)
{
                    // $(".loader").hide();
	// console.log(data);
                        // return false;

// document.getElementById('popup').innerHTML=data;
}
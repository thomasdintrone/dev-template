/************************************************************************************************
* Data Charts Plugin JS
* Description: Convenient and nice time saver for creating animated line graphs. 
* Author: Thomas Dintrone
* Version 1.0
************************************************************************************************/
function dataChart(chart, settings){
	// settings
    var config = {
        'currentYear': 2,
    };
    if ( settings ){$.extend(config, settings);}
	
	// config.currentYear
	
	// LOAD EACH BAR CHART
	// Bar charts are on multiple pages, hence why it's outside on it's own
	$(chart).each(function (index, element) {
		var graphHeight = $(element).text();
		$(element).animate({ height:graphHeight }, 800, function(){
			graphHeight = parseInt(graphHeight, 10);
			graphHeight = (100 - graphHeight);
			var tPos = graphHeight + '%';
			$(element).parent('div').find('.toolTip').css({ opacity:0, 'visibility':'visible', top:tPos }).animate({ opacity:1 });
		});
	});	  

}
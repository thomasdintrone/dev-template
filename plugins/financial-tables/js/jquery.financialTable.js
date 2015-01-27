/************************************************************************************************
* Financial Table Plugin JS
* Description: Convenient and nice time saver for creating financial table to business standards. 
* Author: Thomas Dintrone
* Version 1.0
************************************************************************************************/
function setTable(table, settings){
	// settings
    var config = {
        'dollarPosition': [0, 0, 0, 0, 0],
        'currentYear': 2,
		'textColor': '#000000',
		'row': [],
		'border': [],
		'firstColWidth': '400px',
    };
    if ( settings ){$.extend(config, settings);}
	
	// SET THE TABLE:	
	$(table).addClass('selectedTable');
	$(table).find('th:first').addClass('firstCol').css({ width:config.firstColWidth });
	
	$(table + ' td').css({ color:config.textColor })
	
	colCount = $(table + ' tbody tr:first td').length;
	findRow = $(table).find('tbody tr');
	
	b = 0; // for border ** Started to wrk this out but didn't finish yet...
	$(findRow).each(function(i,e) {
		c 		= 1;
		posNum 	= -1;
		r 		= $(e).find('td');
		
		//$(r).text(b);
		
		if(config.row[b] == b+1) {		
			var borderClass = 'border'+config.border[b];
			$(e).addClass(borderClass);
		}
		
		$(r).each(function(index, element) {
            $(element).addClass('col'+c);
			
			//Find the current year
			if(c == config.currentYear) { 
				$(element).addClass('curYear'); 
			}
			
			if(c == 1) { 
				// do nothing
			} else {				
				// Do the Rest
				$(element).wrapInner('<div></div>');
				
				var pos = config.dollarPosition[posNum];
				//div = $(element).find('div');
				div = $(element);
				div.html(function(i, old){
					return old
							.replace('$', '<span class="dollar" style="left:'+pos+'px">$</span>')
							.replace('(', '<span class="paren">(')
							.replace(')', ')</span>')
							.replace('%)', '%)</span>')
							.replace('%', '<span class="percent">%</span>');
				});
			}
        	c++;
			posNum++;
		});
		
		b++;
     });

	$(table).css({ opacity:0, 'visibility':'visible' }).animate({ opacity:1 });
}
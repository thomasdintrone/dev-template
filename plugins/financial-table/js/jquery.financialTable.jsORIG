/************************************************************************************************
* Financial Table Plugin JS
* Description: Convenient and nice time saver for creating financial table to business standards. 
* Author: Thomas Dintrone
* Version 1.0
************************************************************************************************/
function setTable(table, dollarPositionArray){
	$(table).find('th:first').addClass('firstCol');
	
	colCount = $(table + ' tbody tr:first td').length;
	row = $(table).find('tbody tr');
	$(row).each(function(i,e) {
		c = 1;
		posNum = -1;
		r = $(e).find('td');
		
		$(r).each(function(index, element) {
            $(element).addClass('col'+c);
			
			if(c == 1) { 
				// do nothing
			} else {
				$(element).wrapInner('<div></div>');
				
				var pos = dollarPositionArray[posNum];
				//div = $(element).find('div');
				div = $(element);
				div.html(function(i, old){
					return old
							.replace('$', '<span class="dollar" style="left:'+pos+'px">$</span>')
							.replace('(', '<span class="paren">(')
							.replace(')', ')</span>');
				});
			}
        	c++;
			posNum++;
		});
		
     });

}
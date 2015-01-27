<?php require_once('../../includes/initialize.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Slider Example</title>
<meta name="robots" content="noindex,nofollow">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS -->
<link href="<?php echo SITE_ROOT; ?>style.css" type="text/css" rel="stylesheet">

<!-- PLUGINS CSS -->
<?php $plugins->load_plugin_css(); ?>
</head>

<body>

<div class="tableWrap">
            	<table id="table1">
                	<thead>
                    	<tr>
                            <th class="tableHeader" align="left">Statement of Operations Data</th>
                            <th colspan="5" align="center" class="borderB1">Year Ended December 31,</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="borderB2 years">
                            <td class="left noH">(in thousands, except per share information)</td>
                            <td>2013</td>
                            <td>2012</td>
                            <td>2011</td>
                            <td>2010</td>
                            <td>2009</td>
                        </tr>
                        <tr>
                            <td>Revenues</td>
                            <td>$3,041,011</td>
                            <td>$3,476,870</td>
                            <td>$3,553,712</td>
                            <td>$2,133,922</td>
                            <td>$1,305,793</td>
                        </tr>
                        <tr>
                            <td>Cost of goods sold</td>
                            <td>2,867,991</td>
                            <td>3,380,099</td>
                            <td>3,381,480</td>
                            <td>1,981,396</td>
                            <td>1,221,745</td>
                        </tr>
                        <tr>
                            <td>Gross profit</td>
                            <td>173,020</td>
                            <td>96,771</td>
                            <td>172,232</td>
                            <td>152,526</td>
                            <td>84,048</td>
                        </tr>
                        <tr>
                            <td>Selling, general and adminstrative expenses</td>
                            <td>(65,169)</td>
                            <td>(79,019)</td>
                            <td>(73,219)</td>
                            <td>(60,475)</td>
                            <td>(44,923)</td>
                        </tr>
                        <tr>
                            <td>Gain on disposal of assets<sup>(1)</sup></td>
                            <td>&mdash;</td>
                            <td>47,133	</td>
                            <td>&mdash;</td>
                            <td>&mdash;</td>
                            <td>&mdash;</td>
                        </tr>
                        <tr>
                            <td>Operating income</td>
                            <td>107,851</td>
                            <td>64,885</td>
                            <td>99,013</td>
                            <td>92,051</td>
                            <td>39,125</td>
                        </tr>
                        <tr>
                            <td>Total other expense</td>
                            <td>(35,570)</td>
                            <td>(39,729)</td>
                            <td>(37,114)</td>
                            <td>(26,000)</td>
                            <td>(18,880)</td>
                        </tr>
                        <tr>
                            <td>Net income</td>
                            <td>43,391</td>
                            <td>11,763	</td>
                            <td>38,213</td>
                            <td>48,162</td>
                            <td>20,154</td>
                        </tr>
                        <tr>
                            <td>Net income attributable to Green Plains</td>
                            <td>43,391</td>
                            <td>11,779</td>
                            <td>38,418</td>
                            <td>48,012</td>
                            <td>19,790</td>
                        </tr>
                        <tr class="spaceT">
                            <td>Earnings per share attributable to Green Plains:</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><span class="indent1">Basic</span></td>
                            <td>$1.44		</td>
                            <td>$0.39</td>
                            <td>$1.09</td>
                            <td>$1.55</td>
                            <td>$0.79</td>
                        </tr>
                        <tr class="spaceB">
                            <td><span class="indent1">Diluted</span></td>
                            <td>$1.26</td>
                            <td>$0.39</td>
                            <td>$1.01</td>
                            <td>$1.51</td>
                            <td>$0.79</td>
                        </tr>
                        <tr>
                            <td class="tableHeader">Other Data</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>EBITDA (unaudited and in thousands)<sup>(2)</sup></td>
                            <td>$156,640</td>
                            <td>$115,505</td>
                            <td>$148,620</td>
                            <td>$129,550</td>
                            <td>$67,707</td>
                        </tr>
                     </tbody>
                     <tfoot>
                     
                     </tfoot>
                </table>

</body>
<!-- JAVASCRIPT -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<!-- SELECTIVZR -->
<!-- Allows for CSS3 pseudo selectors || Reference: http://selectivizr.com -->
<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="js/selectivizr/selectivizr-min.js"></script>
  <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
<![endif]--> 

<!-- PLUGINS JS -->
<?php $plugins->load_plugin_js(); ?>

<script type="text/javascript">
$(function(){
	setTable('#table1', { 
			//Set Variables:
			'dollarPosition':[14, 14, 14, 14, 14], 
			'currentYear':2, 
			'textColor': '#5A5D3F',
		} 
	);
});
</script>
</html>
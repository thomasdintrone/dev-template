<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Data Chart Example</title>
<meta name="robots" content="noindex,nofollow">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS -->
<link href="css/data-chart.css" type="text/css" rel="stylesheet">

<style type="text/css">
.content { width:500px; margin:0 auto; }
</style>
</head>

<body>

<div class="content">

    <h3>US Oil Production</h3>
    <p>(in millions of gallons)</p>
                    
    <div class="barChartWrap">
        <div class="dataLines">
            <div class="dataRow"><span>800</span></div>
            <div class="dataRow"><span>700</span></div>
            <div class="dataRow"><span>600</span></div>
            <div class="dataRow"><span>500</span></div>
            <div class="dataRow"><span>400</span></div>
            <div class="dataRow"><span>300</span></div>
            <div class="dataRow"><span>200</span></div>
            <div class="dataRow"><span>100</span></div>
            <div class="dataRow bottom"><span>0</span></div>
        </div><!-- END .dataLines -->
                        
        <div class="columnWrap">
            <div class="dataColumn"><div class="dataBar">42%</div><span>'10</span><em class="toolTip">628</em></div><!-- END .dataColumn -->
            <div class="dataColumn"><div class="dataBar">61%</div><span>'11</span><em class="toolTip">628</em></div><!-- END .dataColumn -->
            <div class="dataColumn"><div class="dataBar">82%</div><span>'12</span><em class="toolTip">628</em></div><!-- END .dataColumn -->
            <div class="dataColumn"><div class="dataBar">76%</div><span>'13</span><em class="toolTip">628</em></div><!-- END .dataColumn -->
            <div class="dataColumn current"><div class="dataBar">84%</div><span>'14</span><em class="toolTip">628<i></em></div><!-- END .dataColumn -->
        </div><!-- END .columnWrap -->
    </div><!-- END .barChartWrap -->
    
</div><!-- END .content -->
</body>
<!-- JAVASCRIPT -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<script src="js/data-chart.js"></script>


<script type="text/javascript">
$(function(){
	
	dataChart('div.dataBar');
	
});
</script>
</html>
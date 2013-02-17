<?php

/* 
INSERT YOUR GOOGLE ANALYTICS ACCOUNT DATA HERE 
*************************************************
*************************************************
*/
define('ga_email','willgrauvogel@gmail.com'); /* Your Google Analytics Account E-mail Address */
define('ga_password','grayduckal3r'); /* Your Google Analytics Account Password */
define('ga_profile_id','33017455'); /* Your Google Analytics Account Profile ID. Profile id is the last number (y) after dash in your tracking code UA-xxxxxx-y */
$lang = "en"; /* Your language. It has to be the text before .php in the language file. You can create new language files. Please send new language files to info@webdesignmarbella.com to be included in the script */

include ("languages/$lang.php");
require 'gapi.class.php';
$ga = new gapi(ga_email,ga_password);

$dimensions=array('date');
$metrics=array('visitors','newVisits','visits','pageviews','timeOnPage','bounces','entrances','exits');

$errormsg = "none";

	if($_POST["startdate"]){
		$start_date = date('Y-m-d',strtotime($_POST["startdate"]));
	}else{
		$start_date=date('Y-m-d',strtotime('-1 month'));
	}
	//$start_date=date('Y-m-d',strtotime('-1 month'));
	
	if($_POST["enddate"]){
		$end_date = date('Y-m-d',strtotime($_POST["enddate"]));
	}else{
		$end_date=date('Y-m-d');
	}
	//$end_date=date('Y-m-d');

	if ($start_date > $end_date)
		$errormsg = "invalid";

	//echo json_encode($errormsg);

//requestReportData($report_id, $dimensions, $metrics, $sort_metric=null, $filter=null, $start_date=null, $end_date=null, $start_index=1, $max_results=30)
$records=$ga->requestReportData(ga_profile_id,$dimensions, $metrics,array('-visits'),null,$start_date,$end_date);

function js_escape($text) {
	$text = wp_specialchars($text, 'double');
	$text = str_replace('&#039;', "'", $text);
	return preg_replace("/\r?\n/", "\\n", addslashes($text));
}

function wp_specialchars( $text, $quotes = 0 ) {
    // Like htmlspecialchars except don't double-encode HTML entities
    $text = preg_replace('/&([^#])(?![a-z1-4]{1,8};)/', '&#038;$1', $text);
    $text = str_replace('<', '&lt;', $text);
    $text = str_replace('>', '&gt;', $text);
    if ( 'double' === $quotes ) {
	    $text = str_replace('"', '&quot;', $text);
    } elseif ( 'single' === $quotes ) {
    	$text = str_replace("'", '&#039;', $text);
    } elseif ( $quotes ) {
        $text = str_replace('"', '&quot;', $text);
        $text = str_replace("'", '&#039;', $text);
    }
	return $text;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Google Analytics Reports</title>
<script type='text/javascript' src='http://www.google.com/jsapi'></script>
<script type='text/javascript'>
	//timeline
	google.load('visualization', '1', {packages:['annotatedtimeline','geomap','table']});
	google.setOnLoadCallback(gaChartTimeline);
	function gaChartTimeline() {
	    var gaData = new google.visualization.DataTable();
	    gaData.addColumn('date', '<?=DATE;?>');
	    gaData.addColumn('number', '<?=VISITS;?>');
	    gaData.addColumn('number', '<?=PAGEVIEWS;?>');
	    gaData.addColumn('number', '<?=VISITORS;?>');
	    gaData.addColumn('number', '<?=NEWVISITS;?>');
	    gaData.addRows(<?php echo count ($ga->getResults());?>);
		<?php
		$row = 0;
		$script = '';
		foreach($ga->getResults() as $result):
			$date = date ( 'Y,m-1,d', strtotime ($result->getDate()) );
			$script .= "gaData.setValue({$row}, 0, new Date({$date}));
			gaData.setValue({$row}, 1, {$result->getVisits()});
			gaData.setValue({$row}, 2, {$result->getPageviews()});
			gaData.setValue({$row}, 3, {$result->getVisitors()});
			gaData.setValue({$row}, 4, {$result->getNewVisits()});";
			$row ++;
		endforeach;
		echo $script;
		?>	  
	    var gaVisitsPageviewsChart = new google.visualization.AnnotatedTimeLine(document.getElementById('chartTimeline'));
	    gaVisitsPageviewsChart.draw(gaData, {
	        wmode: 'transparent',
	        displayZoomButtons: false,
	        displayAnnotations: true
	    });	
	}
	
	//map overlay
	<?php
	$gamap = new gapi(ga_email,ga_password);

	$dimensions=array('country');
	$metrics=array('visits');
	$gamap->requestReportData(ga_profile_id,$dimensions,$metrics,array('-visits'),null,$start_date,$end_date);
	?>
	google.setOnLoadCallback(gaChartMapOverlay);
	function gaChartMapOverlay(){
	    var gaData = new google.visualization.DataTable();
	    gaData.addColumn('string', '<?=COUNTRY;?>');
	    gaData.addColumn('number', '<?=VISITS;?>');
	    gaData.addRows(<?php echo count($gamap->getResults());?>);
		<?php
		$row = 0;
		$script = '';
		foreach($gamap->getResults() as $result):
			$script .= "gaData.setValue({$row},0,\"".js_escape($result->getCountry())."\");
			gaData.setValue({$row},1, {$result->getVisits()});";
			$row ++;
		endforeach;
		echo $script;
		?>
		
		var chartOptions = {};
		chartOptions['dataMode'] = 'regions';
		chartOptions['region'] = 'world';
		var chartMap = new google.visualization.GeoMap(document.getElementById('chartWorldMap'));
		chartMap.draw(gaData,chartOptions);
	}
	
	
	//keywords
	<?php
	$gak = new gapi(ga_email,ga_password);

	$dimensions=array('keyword');
	$metrics=array('visits');
	
	$gak->requestReportData(ga_profile_id,$dimensions,$metrics,array('-visits'),null,$start_date,$end_date);
	?>
	google.setOnLoadCallback(gaTableKeywords);
	function gaTableKeywords(){
	    var gaData = new google.visualization.DataTable();
	    gaData.addColumn('string', '<?=KEYWORDS;?>');
	    gaData.addColumn('number', '<?=VISITS;?>');
	    gaData.addRows(<?php echo count($gak->getResults());?>);
		<?php
		$row = 0;
		$script = '';
		foreach($gak->getResults() as $result):
			$script .= "gaData.setValue({$row},0,\"".js_escape($result->getKeyword())."\");
			gaData.setValue({$row},1, {$result->getVisits()});";
			$row ++;
		endforeach;
		echo $script;
		?>
		var table = new google.visualization.Table(document.getElementById('tableKeywords'));
		table.draw(gaData, {pageSize:10,page:'enable',showRowNumber: true});
	}
	
	//sources
	<?php
	$gas = new gapi(ga_email,ga_password);

	$dimensions=array('source');
	$metrics=array('visits');
	
	$gas->requestReportData(ga_profile_id,$dimensions,$metrics,array('-visits'),null,$start_date,$end_date);
	?>
	
	google.setOnLoadCallback(gaTableSource);
	function gaTableSource(){
	    var gaData = new google.visualization.DataTable();
	    gaData.addColumn('string', '<?=SOURCE;?>');
	    gaData.addColumn('number', '<?=VISITS;?>');
	    gaData.addRows(<?php echo count($gas->getResults());?>);
		<?php
		$row = 0;
		$script = '';
		foreach($gas->getResults() as $result):
			$script .= "gaData.setValue({$row},0,\"".js_escape($result->getSource())."\");
			gaData.setValue({$row},1, {$result->getVisits()});";
			$row ++;
		endforeach;
		echo $script;
		?>
		var table = new google.visualization.Table(document.getElementById('tableSource'));
		table.draw(gaData, {pageSize:10,page:'enable',showRowNumber: true});
	}
	
	//browsers
	<?php
	$gab = new gapi(ga_email,ga_password);

	$dimensions=array('browser');
	$metrics=array('visits');
	
	$gab->requestReportData(ga_profile_id,$dimensions,$metrics,array('-visits'),null,$start_date,$end_date);
	?>
	
	google.setOnLoadCallback(gaTableBrowser);
	function gaTableBrowser(){
	    var gaData = new google.visualization.DataTable();
	    gaData.addColumn('string', '<?=BROWSER;?>');
	    gaData.addColumn('number', '<?=VISITS;?>');
	    gaData.addRows(<?php echo count($gab->getResults());?>);
		<?php
		$row = 0;
		$script = '';
		foreach($gab->getResults() as $result):
			$script .= "gaData.setValue({$row},0,\"".js_escape($result->getBrowser())."\");
			gaData.setValue({$row},1, {$result->getVisits()});";
			$row ++;
		endforeach;
		echo $script;
		?>
		var table = new google.visualization.Table(document.getElementById('tableBrowser'));
		table.draw(gaData, {pageSize:10,page:'enable',showRowNumber: true});
	}
</script>
<style>
body{
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	text-align:center;
}
legend {font-weight:bold;}
label {font-weight:bold;}
fieldset {margin: 20px 0 20px 0;}
.container {
	width:960px;
	margin-left:auto;
	margin-right:auto;
	text-align:left;
	}
.reportHolder {
	border: 1px solid #999;
}

.reportHolder th {
	border: 1px solid #ccc;
	background-color: #ccc;
	padding: 2px;
}

.reportHolder td.chart {
	border: 1px dashed #ccc;
	height: 300px;
	vertical-align: top;
}

.summary {
	margin: 0;
	padding: 0;
}

.summary th {
	text-align: right;
	background-color: #ccc;
	width: 15%;
	padding: 2px;
	border: 1px solid #ccc;
}

.summary td {
	width: 35%;
	padding: 2px;
	border: 1px solid #ccc;
}

div.chartholder {
	height: 98%;
	width: 98%;
	text-align: center;
	margin: 5px;
}
</style>
	<link type="text/css" href="css/ui-lightness/jquery-ui-1.7.2.custom.css" rel="stylesheet" />	
	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
	<script type="text/javascript" src="js/ui.datepicker.js"></script>
	<script type="text/javascript">
	$(function() {
		$("#startdate").datepicker();
		$("#enddate").datepicker();
	});
	</script>
</head>

<body>
<div class="container">

<img src="img/ugar-logo.png" width="392" height="58" alt="Ultimate Google Analytics Reports" />
<form action="<?php echo $PHP_SELF; ?>"  method="post">
  <fieldset>
<legend><?=DATERANGE;?></legend>
<label for="startdate"><?=STARTDATE;?>: </label> <input type="text" id="startdate" name="startdate"> 
<label for="enddate"><?=ENDDATE;?>:</label> <input type="text" id="enddate" name="enddate">
<input type="submit" value="<?=GO;?>" />
</fieldset>
</form>

<table class="reportHolder" width="100%">
	<tr>
		<td colspan="2">
		<table class="summary" width="100%">
			<tr>
				<th><?=FROM;?>:</th>
				<td><?php echo $start_date;	?></td>
				<th><?=TO;?>:</th>
				<td><?php echo $end_date; ?></td>
			</tr>
			<tr>
				<th><?=VISITS;?>:</th>
				<td><?php echo $ga->getVisits() ?></td>
				<th><?=BOUNCERATE;?>:</th>
				<td><?php echo number_format(($ga->getBounces()/$ga->getEntrances())*100,2) ?> %</td>
			</tr>
			<tr>
				<th><?=PAGEVIEWS;?>:</th>
				<td><?php echo $ga->getPageviews() ?></td>
				<th><?=NEWVISITS;?>:</th>
				<td><?php echo $ga->getNewVisits() ?></td>
			</tr>
			<tr>
				<th><?=PAGESVISITS;?>:</th>
				<td><?php
				echo number_format($ga->getPageviews() / $ga->getVisits(),2);
				?></td>
				<td colspan="2">&nbsp;</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<th width="100%"><?=TIMELINE;?></th>
	</tr>
	<tr>
		<td width="100%" class="chart">
		<div id="chartTimeline" class="chartholder"></div>
		</td>
	</tr>
	<tr>
		<th width="100%"><?=MAPOVERLAY;?></th>
	</tr>
	<tr>
		<td width="100%" class="chart" style="height:350px;">
		<div id="chartWorldMap" class="chartholder"></div>
		</td>
	</tr>
	<tr>
		<th width="100%"><?=TOPSEARCHKEYWORDS;?></th>
	</tr>
	<tr>
		<td width="100%" class="chart" style="height:300px;" >
		<div id="tableKeywords" class="chartholder"></div>
		</td>
	</tr>	
	<tr>
		<th width="100%"><?=TRAFFICSOURCE;?></th>
	</tr>
	<tr>
		<td width="100%" class="chart" style="height:300px;" >
		<div id="tableSource" class="chartholder"></div>
		</td>
	</tr>
	<tr>
		<th width="100%"><?=BROWSER;?></th>
	</tr>
	<tr>
		<td width="100%" class="chart" style="height:300px;" >
		<div id="tableBrowser" class="chartholder"></div>
		</td>
	</tr>		
</table>
</div>
</body>
</html>

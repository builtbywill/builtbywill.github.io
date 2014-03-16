<?php

	//Journal Publications
	$journalXML   = $_SERVER['DOCUMENT_ROOT']."/dev/prototype/assets/xml/journal.xml";
	$proceedXML   = $_SERVER['DOCUMENT_ROOT']."/dev/prototype/assets/xml/proceedings.xml";
	$panelXML     = $_SERVER['DOCUMENT_ROOT']."/dev/prototype/assets/xml/panel-discussions.xml";
	$invSemXML    = $_SERVER['DOCUMENT_ROOT']."/dev/prototype/assets/xml/invited-seminars.xml";
	$invConfXML   = $_SERVER['DOCUMENT_ROOT']."/dev/prototype/assets/xml/invited-conferences.xml";
	$confXML      = $_SERVER['DOCUMENT_ROOT']."/dev/prototype/assets/xml/conferences.xml";
	$techBriefXML = $_SERVER['DOCUMENT_ROOT']."/dev/prototype/assets/xml/technical-briefings.xml";
	$techRepXML   = $_SERVER['DOCUMENT_ROOT']."/dev/prototype/assets/xml/technical-reports.xml";
	$techRevXML   = $_SERVER['DOCUMENT_ROOT']."/dev/prototype/assets/xml/technical-reviews.xml";
	
	header("Content-type: application/x-msdownload");
	header("Content-Disposition: attachment; filename=extraction.csv");
	header("Pragma: no-cache");
	header("Expires: 0");
	//echo "Old,New\r\n"; //header
	outputIDs($journalXML);
	outputIDs($proceedXML);
	outputIDs($panelXML);
	outputIDs($invSemXML);
	outputIDs($invConfXML);
	outputIDs($confXML);
	outputIDs($techBriefXML);
	outputIDs($techRepXML);
	outputIDs($techRevXML);	
	
	function outputIDs($xmlFile)
	{
		$doc = new DOMDocument();
		$doc->load($xmlFile);
		//Select the parent of all items
		$nodeList = $doc->getElementsByTagName("item");
		foreach($nodeList as $nItem)
		{
			//store the info
			$old   = $nItem->getElementsByTagName("old")->item(0)->nodeValue;
			$id    = $nItem->getElementsByTagName("id")->item(0)->nodeValue;
			
			if(strlen($old) == 2)
			{
				$old = substr($old,0,1)."0".substr($old,1,1);
			}
			
			if(!empty($old)){
				//echo $old.",".$id."\r\n";
				//echo " ".$old." , ".$id." \r\n";
				//echo $old.".html,".$id.".php\r\n";
				echo $old."_,".$id."_\r\n";
				echo $old.".,".$id.".\r\n";
				//echo "/".$old.".,/".$id.".\r\n";
			}
		}		
	}
?>
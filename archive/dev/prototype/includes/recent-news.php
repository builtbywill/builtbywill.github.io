<?php include("../assets/php/constants.php"); ?>
<!-- @start recent-news -->
<div class="side-box">
    <h2><a href="<?php echo $siteRoot; ?>news" title="Recent News">Recent News</a></h2>
	<?php
	// create new DOM and XPath objects and load the XML file
	$doc = new DOMDocument();
	$doc->load($rssXML);
	$xpath = new DOMXpath($doc);
	
	$maxDisplay = 6;
	
	//get all the item elements
	$itemArray = $doc->getElementsByTagName("item");
	//loop thru the item elements
	foreach($itemArray as $item)
	{
		//get the global unique identifier for this item
		$iGuid = $item->getElementsByTagName("guid");
		$iGuidValue = (int)$iGuid->item(0)->nodeValue;
		$iTitle = $item->getElementsByTagName("title")->item(0)->nodeValue;
		$iDate = $item->getElementsByTagName("pubDate")->item(0)->nodeValue;
		$iMonthNum = substr($iDate,5,2);
		$iMonthName = date("M", mktime(0, 0, 0, $iMonthNum, 10));
		$iDay = substr($iDate,8,2);
		$iText = substr($item->getElementsByTagName("description")->item(0)->nodeValue,0,200)."..."; 
		
		if($maxDisplay > 0)
		{
		
	?>
        <a class="side" href="<?php echo $siteRoot; ?>news?id=<?php echo $iGuidValue; ?>"><?php echo $iTitle; ?></a>
	<?php 
		}
		$maxDisplay--;
	} 
	//Cleanup
	?>        
</div>      
<!-- @end recent-news -->

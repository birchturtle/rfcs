<?php
function searchterm(string $term){
	echo "searching for " . $term . "\n";
		$curly = curl_init();
	curl_setopt($curly, CURLOPT_URL, "https://www.rfc-editor.org/search/rfc_search_detail.php?title=" . $term);
	curl_setopt($curly, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($curly);
	curl_close($curly);
	if ($output) {
		$dom = new DOMDocument();
		$dom->loadHTML($output);
		$xpath = new DOMXpath($dom);
		$rfcs = $xpath->query("//table[contains(@class, 'gridtable')]");
		foreach ($rfcs->item(0)->childNodes as $rfc) {
			echo $rfc->childNodes->item(0)->textContent . " - " . $rfc->childNodes->item(2)->textContent . " - " . $rfc->childNodes->item(4)->textContent . " - " . $rfc->childNodes->item(6)->textContent . "\n";
		}
	}
	 else {
	echo "empty, sorry";
	}
}

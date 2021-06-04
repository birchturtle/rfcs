<?php
function getrfc(int $rfc){
	$curly = curl_init();
	curl_setopt($curly, CURLOPT_URL, "https://www.rfc-editor.org/rfc/rfc" . $rfc . ".txt");
	curl_setopt($curly, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($curly);
	curl_close($curly);
	if ($output) {
		$output = preg_split("/\n/", $output);
		$i = 0;
		$count = count($output);
		while ($i < $count) {
			if ($output[$i] == "")
			{
				unset($output[$i]);
				$output = array_values($output);
				$count = count($output);
				continue;
			} else {
				echo $i . ": \t" . $output[$i] . "\n";
				$i++;
			}
		}
	} else {
	echo "empty, sorry";
	}
}

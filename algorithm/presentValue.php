<?php

echo $argv[1] ."\n";
echo $argv[2] ."\n";
echo $argv[3] ."\n";

$return = presentValue($argv[1],$argv[2],$argv[3]);
echo $return."\n";

/**
 * 関数
 * @param {number} pYen - Amount to look for present value
 * @param {number} pRate - Annual discount rate
 * @param {number} pYear - Operating year
 *
 * @return {number} present value
 */
function presentValue($pYen, $pRate, $pYear) {

	$presentValue = 0;
	$presentValue = $pYen / pow((1 + $pRate/100), $pYear);

	return $presentValue;

}


?>
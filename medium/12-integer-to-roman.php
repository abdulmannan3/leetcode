<?php

/**@link https://leetcode.com/problems/roman-to-integer/
 * @author Abdul Mannan
 *
 *  My result
 *  Runtime: 8 ms, faster than 100.00% of PHP online submissions for Integer to Roman.
 * Memory Usage: 15.5 MB, less than 96.72% of PHP online submissions for Integer to Roman.
 */

class Solution {

  /**
   * @param Integer $num
   * @return String
   */
  function intToRoman($inp) {
	$romans = [
	  'M' => 1000,
	  'CM' => 900,
	  'D' => 500,
	  'CD' => 400,
	  'C' => 100,
	  'XC' => 90,
	  'L' => 50,
	  'XL' => 40,
	  'X' => 10,
	  'IX' => 9,
	  'V' => 5,
	  'IV' => 4,
	  'I' => 1,
	];




	$res='';
	foreach($romans as $k=>$v){

	  if($inp>=$v){
		echo "$inp $k $v".PHP_EOL;
		$q=intval($inp/$v);
		$inp=intval($inp%$v);
		$res.=str_repeat($k,$q);
	  }
	  if($inp==0){
		break;
	  }

	}
	return $res;
  }
}
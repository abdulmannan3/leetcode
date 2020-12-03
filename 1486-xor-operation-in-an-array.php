<?php
/**@link https://leetcode.com/problems/xor-operation-in-an-array/
 * @author Abdul Mannan
*/

class Solution {

  /**
   * @param Integer $n
   * @param Integer $start
   * @return Integer
   */
  function xorOperation($n, $start) {
	$output=$start;
	for($i=1;$i<$n;$i++){
	  $output= $output^($start + (2*$i) );
	}
	return $output;
  }

}
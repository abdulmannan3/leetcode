<?php

/* @link https://leetcode.com/problems/kth-largest-element-in-an-array/
 * @author Abdul Mannan
 *
 *  My result
 *  Runtime: 16 ms, faster than 100.00% of PHP online submissions for Kth Largest Element in an Array.
 * Memory Usage: 16.8 MB, less than 44.83% of PHP online submissions for Kth Largest Element in an Array.
 */
class Solution
{

  /**
   * @param Integer[] $nums
   * @return Integer
   */
  function findKthLargest($nums, $k)
  {

	$heap = new SplMinHeap();
	foreach ($nums as $v) {

	  $heap->insert($v);
	  if ($heap->count() > $k) {
		$heap->extract();
	  }
	}
	return $heap->top();
  }
}
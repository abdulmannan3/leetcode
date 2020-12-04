<?php

class Solution
{

  /**
   * @param Integer[] $nums
   * @return Integer
   */
  function thirdMax($nums)
  {

	$nums = array_unique($nums, SORT_NUMERIC);
	$length = count($nums);

	if ($length > 2) {
	  $heap = new SplMinHeap();
	  foreach ($nums as $v) {

		$heap->insert($v);
		if ($heap->count() > 3) {
		  $heap->extract();
		}
	  }
	  return $heap->top();
	}
	return max($nums);
  }
}

$test = new Solution();
echo $test->thirdMax([1, 1, 2]);
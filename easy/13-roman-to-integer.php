<?php
/**@link https://leetcode.com/problems/roman-to-integer/
 * @author Abdul Mannan
 */
class Solution
{

  /**
   * @param String $s
   * @return Integer
   */
  function romanToInt($inp)
  {
	$roman = ["I" => 1,
	  "V" => 5,
	  "X" => 10,
	  "L" => 50,
	  "C" => 100,
	  "D" => 500,
	  "M" => 1000];


	$int = 0;

	for ($i = 0; $i < strlen($inp); $i++) {
	  $current = $roman[$inp[$i]];
	  $lookAhead = $inp[$i + 1] ?? 'A';
	  if ($inp[$i] == 'I' && ($lookAhead == 'V' || $lookAhead == 'X')) {
		$current *= -1;
	  } elseif ($inp[$i] == 'X' && ($lookAhead == 'L' || $lookAhead == 'C')) {
		$current *= -1;
	  } elseif ($inp[$i] == 'C' && ($lookAhead == 'D' || $lookAhead == 'M')) {
		$current *= -1;
	  }
	  $int += $current;
	}
	return $int;
  }
}

/*
 Fastest solution pretty elegant still think mine should have been quicker considering substr and strpos should be more intensive
function romanToInt($s) {
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
        $result = 0;
        foreach ($romans as $key => $value) {
            while (strpos($s, $key) === 0) {
                $result += $value;
                $s = substr($s, strlen($key));
            }
        }
        return $result;
    }
 */
<?php
namespace classes;

use classes\RulesFactory;

/**
Greed (Dice Game)

Write a class Greed with a score() method that accepts an array of die values (up to 6). Scoring rules are as follows:

A single one (100)
A single five (50)
Triple ones [1,1,1] (1000)
Triple twos [2,2,2] (200)
Triple threes [3,3,3] (300)
Triple fours [4,4,4] (400)
Triple fives [5,5,5] (500)
Triple sixes [6,6,6] (600)
Note that the scorer should work for any number of dice up to 6.

Four-of-a-kind (Multiply Triple Score by 2)
Five-of-a-kind (Multiply Triple Score by 4)
Six-of-a-kind (Multiply Triple Score by 8)

Three Pairs [2,2,3,3,4,4] (800)

Straight [1,2,3,4,5,6] (1200)

 **/

class Greed {

	/**
	 * @var mixed
	 */
	private $count;
	/**
	 * @var mixed
	 */
	private $count_of_same_values;
	/**
	 * @var array
	 */
	private $allowed_values = [1, 2, 3, 4, 5, 6];

	/**
	 * @param array $data
	 */
	private function validate(array $data) {
		$this->count = count($data);
		$this->count_of_same_values = array_count_values($data);
		if ($this->count == 0 || $this->count > 6) {
			return false;
		}

		foreach ($this->count_of_same_values as $value => $frequency) {
			var_dump($value);
			if (!in_array($value, $this->allowed_values)) {
				return false;
			}
		}
		return true;
	}

	/**
	 * @param array $data
	 * @return mixed
	 */
	public function score(array $data) {

		sort($data);

		if (!$this->validate($data)) {
			return false;
		}
		$final_score = 0;

		if (count($this->count_of_same_values) == 6) {
			//definitley straight;
			$straight = new Straight($data);
			$final_score = $straight->get_score();
			if ($final_score > 0) {
				return $final_score;
			}

		}
		// There is a possibilty that it can be pairs or straights
		foreach ($this->count_of_same_values as $value => $frequency) {
			$rule = RulesFactory::get_instance($value, $frequency);
			if (is_object($rule)) {
				$final_score += $rule->get_score();
			}
		}
		return $final_score;
	}
}
?>
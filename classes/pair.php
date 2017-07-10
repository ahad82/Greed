<?php
namespace classes;

class Pair extends BaseScore {

	/**
	 * @var int
	 */
	private static $pair_count = 0;
	/**
	 * @param $value
	 */
	public function __construct($value) {
		static::$pair_count++;
	}

	private function reset_counter() {
		static::$pair_count = 0;
	}

	/**
	 * @return int
	 */
	public function get_score() {
		if (static::$pair_count == 3) {
			$this->reset_counter();
			return 800;
		} else {
			return 0;
		}
	}

}

?>
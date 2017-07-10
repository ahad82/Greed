<?php
namespace classes;

abstract class BaseScore {

	/**
	 * @param int $value
	 */
	public function __construct($value) {
		$this->value = $value;
	}

	/**
	 * @return int
	 */
	public function get_score() {
		if (isset($this->scores[$this->value])) {
			return $this->scores[$this->value];
		} else {
			return 0;
		}
	}
}
?>

<?php
namespace classes;

class Sextuple extends BaseScore {

	/**
	 * @return int
	 */
	public function get_score() {

		$tripple = new Tripple($this->value);
		return $tripple->get_score() * 8;
	}
}

?>
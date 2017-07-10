<?php
namespace classes;

class Quadruple extends BaseScore {

	/**
	 * @return int
	 */
	public function get_score() {

		$tripple = new Tripple($this->value);
		return $tripple->get_score() * 2;
	}
}

?>
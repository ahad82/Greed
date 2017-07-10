<?php
namespace classes;

class Quintuple extends BaseScore {

	/**
	 * @return int
	 */
	public function get_score() {

		$tripple = new Tripple($this->value);
		return $tripple->get_score() * 4;
	}
}

?>
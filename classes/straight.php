<?php
namespace classes;

class Straight {

	/**
	 * @var array
	 */
	private $straight_list = [1, 2, 3, 4, 5, 6];
	/**
	 * @param $input_data
	 */
	public function __construct($input_data) {
		$this->input_data = $input_data;
		sort($this->input_data);
	}

	/**
	 * @return int
	 */
	public function get_score() {
		//assuming its not sorted
		if ($this->input_data == $this->straight_list) {
			return 1200;
		} else {
			return 0;
		}
	}
}

?>
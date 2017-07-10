<?php
namespace classes;

class RulesFactory {

	/**
	 * @var array
	 */
	private static $class_name_per_rule = [
		1 => "Single",
		2 => "Pair",
		3 => "Tripple",
		4 => "Quadruple",
		5 => "Quintuple",
		6 => "Sextuple",
	];

	/**
	 * @param int $value
	 * @param int $frequency
	 */
	public static function get_instance($value, $frequency) {

		if (isset(static::$class_name_per_rule[$frequency])) {
			$class_name = "classes\\" . static::$class_name_per_rule[$frequency];
			return new $class_name($value);
		} else {
			return false;
		}
	}
}

?>
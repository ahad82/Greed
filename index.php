<?php
use classes\Greed;
//auto loader
spl_autoload_register(function ($class_name) {
	echo "ïncluding {$class_name} <br>";
	require_once ("{$class_name}.php");
});

//Dice values modify here.
$data = [
	1,
	1,
	1,
	3,
	3,
	3,
];

$greed = new Greed();
$score = $greed->score($data);

if ($score === false) {
	echo "Invalid or wrong data" . var_dump($data);
} else {
	echo "Final score :: {$score}";
}

?>
<?php
function calculator($a, $b, $operation) {
	$result = 0;
	switch ($operation) {
			case "+":
			    $result = $a + $b;
			    break;
			case "-":
			    $result = $a - $b;
			    break;
			case "*":
			    $result = $a * $b;
			    break;
			case "/":
			$result = $a / $b;
			if (($a == 0) or ($b == 0 )){
				echo "Ошибка: Нельзя делять на ноль";
			}
			    break;
			case "**":
			    $result = $a ** $b;
			    break;
		default;
		echo "Ошибка: Данная операция не поддерживается";
		return;
		break;
	}
	echo "Результат: ". $result;
}
	echo "1. "; calculator(2, 2, "+");
    echo "1. "; calculator(2, 2, "-");
	echo "1. "; calculator(2, 2, "*");
	echo "1. "; calculator(2, 2, "/");
	echo "1. "; calculator(2, 2, "**");
<?php
$num1 = readline("Enter the first number: ");
$num2 = readline("Enter the second number: ");
$operation = readline("Enter the operation (+, -, *, /): ");

switch ($operation) {
    case '+':
        $result = $num1 + $num2;
        echo "Result: $result\n";
        break;
    case '-':
        $result = $num1 - $num2;
        echo "Result: $result\n";
        break;
    case '*':
        $result = $num1 * $num2;
        echo "Result: $result\n";
        break;
    case '/':
        if ($num2 == 0) {
            echo "Error: Division by zero is not allowed.\n";
        } else {
            $result = $num1 / $num2;
            echo "Result: $result\n";
        }
        break;
    default:
        echo "Invalid operation. Please use +, -, *, or /.\n";
}
?>

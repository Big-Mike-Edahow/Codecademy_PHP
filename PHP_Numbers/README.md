PHP has two number data types: integers and floating point numbers.

We can use arithmetic operators for performing math operations:

Operation:		Example:

Addition	+	echo 1 + 4.5; // Prints: 5.5

Subtraction	-	echo 9 - 1; // Prints: 8

Multiplication	*	echo -1.9 * 2.9; // Prints: -5.51

Division	/	echo 9 / 1; // Prints: 9

Modulo	%	echo 11 % 3; // Prints: 2

Exponentiation	**	echo 8**2; // Prints: 64

Operations have an order of precedence meaning that certain types of operations in a chain will be evaluated before others: first evaluated will be any operation wrapped in parenthesis (()), next exponents (**), then multiplication (*) and division (/), and finally addition (+) and subtraction (-). The acronym PEMDAS can be a helpful way of remembering the order.

We can assign number values to variables and then perform numerical operations with them.

We can use mathematical assignment operators as a shorthand when reassigning number variables:

Operation:	Long Syntax:	Short Syntax:

Add	$x = $x + $y	$x += $y

Subtract	$x = $x - $y	$x -= $y

Multiply	$x = $x * $y	$x *= $y

Divide	$x = $x / $y	$x /= $y

Mod	$x = $x % $y	$x %= $y

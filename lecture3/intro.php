<?php

echo 'Hola SICI4997!<br><br>http://sici4997.uprp.edu/~username/intro.php<br>';

# Comentario

// Comentario

/* Comentario multi l�nea
 * Hola
 * como
 * estas
 */

echo 'Hola<br>'; // Saludando
echo 'Como estas?<br>'; # Preguntando

$nota = 'A'; // Variable con un String

$promedio = 3.5; // Variable con un Decimal

$notas = ['A', 'B', 'C', 'D', 'F']; // Variable con un Array

$temp = []; // As� se define un Array vac�o
$temp = array(); // Estas es otra forma

// Uniendo texto y variables e imprimiendo
echo 'Yo quiero en este clase sacar ';
echo $nota;
echo ' para de esa forma tener un promedio de ';
echo $promedio;
echo '<br>';

$quizz = 7;
$quizzTotal = 10;

$promedioQuizz = ($quizz / $quizzTotal) * 100; // Operadores aritm�ticos

echo 'Saque en el quizz un promedio de: ';
echo $promedioQuizz;
echo '%<br>';

echo 'Despu�s del bono, saque en el quizz: ';
echo $promedioQuizz++; // 70%
echo '%<br>';

echo 'Despu�s del bono, saque en el quizz: ';
echo ++$promedioQuizz; // 72%
echo '%<br>';

echo '5 + 6 = ';
echo (5 + 6);
echo '<br>';

$quince = 15;
$quince /= 3; // 5

echo $quince;
echo '<br>';

$intro = 'Mi nombre es ';
$intro .= 'Omar G. Soto Fortu�o';
echo $intro . '<br>' . 'Despu�s<br>';

$outcome = ($promedioQuizz > 80); // Operador de comparaci�n

echo 'Saque mas de 80 en el quizz? ' . $outcome . '<br>';

$outcome2 = ($promedioQuizz <= 80); // Operador de comparaci�n

echo 'Saque menos de 80 en el quizz? ' . $outcome2 . '<br>';

/*
 * Combinaci�n de operaciones l�gicos y de comparaci�n
 */
$notaF = ($promedioQuizz < 60);
$notaD = ($promedioQuizz >= 60 && $promedioQuizz < 70);
$notaC = ($promedioQuizz >= 70 && $promedioQuizz < 80);
$notaB = ($promedioQuizz >= 80 && $promedioQuizz < 90);
$notaA = ($promedioQuizz >= 90);

// Se mostrar� un 1 en la expresi�n booleana que eval�e a TRUE. En este caso, deber�a ser la C
echo 'Notas:<br>';
echo 'Tiene A? ' . $notaA . '<br>';
echo 'Tiene B? ' . $notaB . '<br>';
echo 'Tiene C? ' . $notaC . '<br>'; // Aqu� deber�a salir el 1
echo 'Tiene D? ' . $notaD . '<br>';
echo 'Tiene F? ' . $notaF . '<br>';

?>
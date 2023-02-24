<?php

/**
 * Escreva um programa que, dada uma matrix 3x3, armazena em cada posição da matriz, a soma dos valores da linha e coluna que definem a posição. Por 
 * exemplo, na posição [1][2] você deverá armazenar o valor 1+2 = 3 e assim por diante. Imprima a matriz na tela.
 * @author jacson
 *
 */
class Exercicio2 {
	
	public function __construct() {
		// Define uma matriz com 3 linhas
		$matriz = array(array(), array(), array() );
		
		// Loop para preencher a matriz com as somas das linhas e colunas, o exercício não indica o indice do primeiro valor, partiremos do padrão, que é o 0 
		for ($i = 0; $i < 3; $i++) {
			for ($j = 0; $j < 3; $j++) {
				$matriz[$i][$j] = $i + $j;
			}
		}
		
		// Imprimir a matriz na tela
		for ($i = 0; $i < 3; $i++) {
			for ($j = 0; $j < 3; $j++) {
				echo $matriz[$i][$j] . " ";
			}
			echo PHP_EOL;
		}
	}
}
new Exercicio2();

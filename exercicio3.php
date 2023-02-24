<?php

/**
 * Escreva um programa que lê 2 matrizes A e B, cada uma com 3 linhas e 2 colunas. Construir uma matriz C de mesma dimensão (3x2)
 * onde C é formada pela soma dos elementos da matriz A com os elementos da matriz B (exemplo: C[1][1] = A[1][1] + B[1][1]).
 * Apresentar ao final as 3 matrizes (A, B e C).
 * @author jacson
 *
 */
class Exercicio3 {
	
	public function __construct() {
		// Define a matriz A 3x2 e preenche com valores lidos do usuário
		$matrizA = array(array(), array(), array());
		echo "Favor informar os valores inteiros da matriz A a seguir:" . PHP_EOL;
		for ($i = 0; $i < 3; $i++) {
			for ($j = 0; $j < 2; $j++) {
				$matrizA[$i][$j] = (int) readline("Digite o valor da posição [$i][$j] da matriz A: ");
			}
		}
		
		// Define a matriz B 3x2 e preenche com valores lidos do usuário
		$matrizB = array(array(), array(), array());
		echo "Favor informar os valores inteiros da matriz B a seguir" . PHP_EOL;
		for ($i = 0; $i < 3; $i++) {
			for ($j = 0; $j < 2; $j++) {
				$matrizB[$i][$j] = (int) readline("Digite o valor da posição [$i][$j] da matriz B: ");
			}
		}
		
		// Define a matriz C 3x2 e preenche com a soma dos elementos de A e B
		$matrizC = array(array(), array(), array());
		for ($i = 0; $i < 3; $i++) {
			for ($j = 0; $j < 2; $j++) {
				$matrizC[$i][$j] = $matrizA[$i][$j] + $matrizB[$i][$j];
			}
		}
		
		// Imprime as matrizes A, B e C na tela
		echo "Matriz A:" . PHP_EOL;
		for ($i = 0; $i < 3; $i++) {
			for ($j = 0; $j < 2; $j++) {
				echo $matrizA[$i][$j] . " ";
			}
			echo PHP_EOL;
		}
		echo PHP_EOL;
		
		echo "Matriz B:" . PHP_EOL;
		for ($i = 0; $i < 3; $i++) {
			for ($j = 0; $j < 2; $j++) {
				echo $matrizB[$i][$j] . " ";
			}
			echo PHP_EOL;
		}
		echo PHP_EOL;
		
		echo "Matriz C:" . PHP_EOL;
		for ($i = 0; $i < 3; $i++) {
			for ($j = 0; $j < 2; $j++) {
				echo $matrizC[$i][$j] . " ";
			}
			echo PHP_EOL;
		}

	}
}
new Exercicio3();

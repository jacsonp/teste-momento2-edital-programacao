<?php

/**
 * Faça um programa que preencha um vetor com 6 valores distintos digitados pelo usuário. Em seguida, exiba o maior e o menor valor do vetor,
 *  indicando em qual posição eles se encontram. Depois, imprima os itens no vetor em ordem crescente
 * @author jacson
 *
 */
class Exercicio1 {

	public function __construct() {
		
		// Criar um vetor
		$valores = array();
		
		// Loop para preencher o vetor com valores digitados pelo usuário
		for ($i = 0; $i < 6; $i++) {
		    $valor = (int) readline("Digite um novo valor: "); // converte valores digitados para inteiros
		    
		    // Verifica se o valor já existe no vetor
		    if (in_array($valor, $valores)) {
		        $valor = (int) readline("Valor já informado, favor digitar outro valor: ");
		    }
		    
		    echo "Valor: $valor" . PHP_EOL;
		    $valores[$i] = $valor;
		}
		
		// Iniciando variáveis de controle com o primeiro valor
		$maiorValor = $valores[0];
		$menorValor = $valores[0];
		$posicaoMaior = 0;
		$posicaoMenor = 0;
		
		// Obtém o maior e o menor valor do vetor, juntamente com suas posições
		for ($i = 1; $i < 6; $i++) {
		    if ($valores[$i] > $maiorValor) {
		        $maiorValor = $valores[$i];
		        $posicaoMaior = $i;
		    }
		    if ($valores[$i] < $menorValor) {
		        $menorValor = $valores[$i];
		        $posicaoMenor = $i;
		    }
		}
		
		// Imprime o maior e o menor valor, juntamente com suas posições
		echo "Maior valor: $maiorValor (posição $posicaoMaior)" . PHP_EOL;
		echo "Menor valor: $menorValor (posição $posicaoMenor)" . PHP_EOL;
		
		// Ordena o vetor em ordem crescente
		sort($valores);
		
		// Imprime o vetor em ordem crescente
		echo "Valores em ordem crescente: ";
		for ($i = 0; $i < 6; $i++) {
		    echo $valores[$i] . " ";
		}
		echo PHP_EOL;
	}
}
new Exercicio1();
?>

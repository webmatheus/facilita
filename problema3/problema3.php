<?php 

//inicializa
$_rand_cell_element = rand(0,9);

//declara array/vetor
$_res_mat =  array(); 

//limites linha e coluna
$i_lim=5;
$j_lim=5;

//matriz aleatória
echo "matriz aleatória <BR>";
for($i=0; $i<$i_lim; $i++){
	for($j=0; $j<$j_lim; $j++){
		
		//preenche "celula" da matriz
		$_res_mat[$i][$j] = rand(0,9);
		
		//imprime celula
		echo $_res_mat[$i][$j]."\t";
	}
	
	//quebra de linha
	echo "<BR>";
}

//matriz mumeros pares a partir de um aleatorio ==============
echo "<BR>matriz pares <BR>";
for($i=0; $i<$i_lim; $i++){
	for($j=0; $j<$j_lim; $j++){
		
		$_candidat_numer = rand(0,9);
		
		//enquanto nao for par e != 0, solicita outro numero
		while($_candidat_numer%2!=0 || $_candidat_numer == 0){
			$_candidat_numer = rand(0,9);
		}
		
		//preenche "celula" da matriz com "par" validado
		$_res_mat[$i][$j] = $_candidat_numer;
		
		//imprime celula
		echo $_res_mat[$i][$j]."\t";
	}
	
	//quebra de linha
	echo "<BR>";
}

//matriz mumeros impares a partir de um aleatorio ==============
echo "<BR>matriz ímpares <BR>";
for($i=0; $i<$i_lim; $i++){
	for($j=0; $j<$j_lim; $j++){
		
		$_candidat_numer = rand(0,9);
		
		//enquanto nao for par e != 0, solicita outro numero
		while($_candidat_numer%2==0 || $_candidat_numer == 0){
			$_candidat_numer = rand(0,9);
		}
		
		//preenche "celula" da matriz com "par" validado
		$_res_mat[$i][$j] = $_candidat_numer;
		
		//imprime celula
		echo $_res_mat[$i][$j]."\t";
	}
	
	//quebra de linha
	echo "<BR>";
}
 
?>
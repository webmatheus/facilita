<?php 

//taxas de crescimento ao ano (cm)
 $_grow_coef_juca = 3;
 $_grow_coef_chico = 2;
 
 //alturas iniciais (cm)
 $_init_height_juca=110;
 $_init_height_chico=150;
 
 //alturas variaveis (cm)
 $_var_height_juca = $_init_height_juca;
 $_var_height_chico = $_init_height_chico;
 
 $_years = 1;
 
 //passar dos anos (progressao da altura)
 while($_var_height_juca <= $_var_height_chico){
	
	//cresce juca
	$_var_height_juca+=$_grow_coef_juca;	
	
	//cresce chico
	$_var_height_chico+=$_grow_coef_chico;
	 
	 echo "passou um ano<BR>";
	 
	$_years++; 
 }
 
 echo "serão necessários ".$_years." anos até que juca seja maior que chico";
 
 
?>
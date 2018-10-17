<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
 <?php 
  $valor1= $_POST ["valor1"];
  $valor2= $_POST ["valor2"];
  $valor3= $_POST ["valor3"]; 
  ?>
  
  <html>
  <head>
 <title> Comprimento, Largura e Altura</title>
 </head>
 <body>
 <div align="center"><font color="#003300" size="4">Ler valores de comprimento, largura e Altura</font> </div>
 <hr color="#0000ff">
   <?php
   $volume= $valor1*$valor2*$valor3;
   echo "Valor do volume $volume";
 	  ?>
	  <form><br>
	  <input type="button" name="Calcular" value="Calcular" onClick="parent.location='http://localhost:1030/teste/exercicios/form1.php'">
	  
	  </form>
	  
      </body>
	  </html>
	     
 
  
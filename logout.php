<!--
Instituição: UNINOVE
Curso: Ciencia da  Computação 
Disciplina: Insfraestrutura Computacional
Professor: Antônio Sérgio  
Alunas: Miriam Maranhão, Thais Napolitano
Objetivo: Tela de Logout
-->
<?php
session_start();
session_destroy();
header('Location: index.php');
exit(); 
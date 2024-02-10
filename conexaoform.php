/* 
Instituição: UNINOVE
Curso: Ciencia da  Computação 
Disciplina: Insfraestrutura Computacional
Professor: Antônio Sérgio  
Alunas: Miriam Maranhão, Thais Napolitano
Objetivo: Tela de conexão com o banco de dados
*/
<?php
define('HOST','127.0.0.1');
define('USUARIO','irtvm');
define('SENHA','Irtvm@123');
define('DB','u244070043_irtvm');

$conexao = mysqli_connect(HOST,USUARIO, SENHA, DB);
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}
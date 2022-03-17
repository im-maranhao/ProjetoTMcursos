<!-- 
Instituição: UNINOVE
Curso: Ciencia da  Computação 
Disciplina: Insfraestrutura Computacional
Professor: Antônio Sérgio  
Alunas: Miriam Maranhão, Thais Napolitano
Objetivo: Tela de conexão com banco de dados 
-->
<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'u244070043_irtvm');
define('DB_PASSWORD', 'T123456m');
define('DB_NAME', 'u244070043_irtvm');
$conexao = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}
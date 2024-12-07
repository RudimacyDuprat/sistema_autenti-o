<?php
$host = 'localhost';
$user = 'root';
$password = ''; // Verifique a senha de root do MySQL
$database = 'db_cadastro';

// Estabelecendo conexão
$conn = mysqli_connect($host, $user, $password, $database);

// Verificando conexão
if (!$conn) {
    die("Erro de conexão: " . mysqli_connect_error());
}
echo "Conexão bem-sucedida!";

include_once ("conexao.php");
// 1. Capturar a senha do formulário (exemplo, método POST)
$senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);

// 2. Validar a senha (requisitos: pelo menos 8 caracteres, uma letra, um número e um caractere especial)
if (!$senha || !preg_match('/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $senha)) {
    die("A senha deve conter pelo menos 8 caracteres, incluindo uma letra, um número e um caractere especial.");
}

// 3. Gerar o hash da senha para armazenar com segurança
$hash = password_hash($senha, PASSWORD_DEFAULT);

// 4. Exemplo de como armazenar no banco de dados (simulação)
echo "Senha validada e hash gerado:<br>";
echo $hash;


$result_db_cadastro ="INSERT INTO db_cadastro (nome, data nascimento,genero,endereço,telefone,email,cpf,rg,cargo) VALUES ('$nome',$data nascimento','$genero','$endereço',$'telefone','$email','$cpf','$rg','$cargo')";
$result_db_cadastro = mysqli_query($conn,$result_db_cadastro);
?>








<?php
include("../config/config.php");


switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $data_nascimento = $_POST["data_nascimento"];


        // Query corrigida
        $sql = "INSERT INTO usuarios (nome, email, senha, data_nascimento) VALUES (
            '{$nome}', '{$email}', '{$senha}', '{$data_nascimento}'
        )";

        $res = $conexao->query($sql);

        if ($res) {
            echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
            echo "<script>window.location.href = 'listar-usuario.php';</script>";
            exit();
        } else {
            echo "Erro ao cadastrar: " . $conexao->error;
        }
        break;

    case 'editar':
        // Código para editar
        break;

    case 'excluir':
        // Código para excluir
        break;
}
?>

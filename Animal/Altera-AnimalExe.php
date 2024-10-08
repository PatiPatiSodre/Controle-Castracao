<?php
include('../include/conexao.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
$especie = $_POST['especie'];
$raca = $_POST['raca'];
$dataNascimento = $_POST['data_nascimento'];
$castrado = $_POST['castrado'] == "sim" ? 1 : 0;
$pessoa = $_POST['pessoa'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Style.css" />
    <link rel="stylesheet" href="../css/Deletar.css" />
    <title>Resultado</title>
</head>

<body>
    <div class="menu">
        <a href="#" class="brand"><img src="../img/logo-gato.webp" alt=""></a>
        <nav>
            <ul>
                <li><a href="#">Cidade</a>
                    <ul>
                        <li><a href="../Cidade/Cadastro-Cidade.html">Cadastrar</a></li>
                        <li><a href="../Cidade/Listar-Cidade.php">Visualizar</a></li>
                    </ul>
                </li>
                <li><a href="">Pessoa</a>
                    <ul>
                        <li>
                            <a href="../Pessoa/Cadastro-Pessoa.php">Cadastrar</a>
                        </li>
                        <li>
                            <a href="../Pessoa/Listar-Pessoa.php">Visualizar</a>
                        </li>
                    </ul>
                </li>
                <li><a href="">Animal</a>
                    <ul>
                        <li>
                            <a href="../Animal/Cadastro-Animal.php">Cadastrar</a>
                        </li>
                        <li>
                            <a href="../Animal/Listar-Animal.php">Visualizar</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <section>
        <div class="principal">
            <h1>Alteração de cidade</h1>
            <?php
            $dataNascimentoFormatada = date('Y-m-d', strtotime($dataNascimento));
            $dataAtual = new DateTime();
            $dataNascimentoOb = new DateTime($dataNascimentoFormatada);
            $idadeOb = $dataNascimentoOb->diff(new DateTime(date('Y-m-d')));
            $idade = $idadeOb->format('%Y');
            echo "<p>ID: $id</p>";
            echo "<p>Nome: $nome</p>";
            echo "<p>Espécie: $especie</p>";
            echo "<p>Raça: $raca</p>";
            echo "<p>Data Nascimento: $dataNascimento</p>";
            echo "<p>Idade: $idade</p>";
            echo "<p>castrado: $castrado</p>";
            echo "<p>Id Pessoa: $pessoa";
            $sql = "UPDATE animal SET nome = '$nome', especie = '$especie', raca = '$raca', data_nascimento = '$dataNascimentoFormatada', castrado = $castrado, id_pessoa = $pessoa WHERE id = $id";
            $result = mysqli_query($con, $sql);
            if ($result)
                echo "Dados atualizados!";
            else
                echo "Erro ao atualizar dados!\n" . mysqli_error($con);
            ?>
        </div>
    </section>
</body>

</html>

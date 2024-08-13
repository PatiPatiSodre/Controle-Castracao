<?php
include('../include/conexao.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Style.css" />
    <link rel="stylesheet" href="../CSS/Deletar.css">
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
            <h1>Alteração de cliente</h1>
            <?php
            echo "<p>Id: $id</p>";
            echo "Nome: $nome</br>";
            echo "E-mail: $email</br>";
            echo "Endereço: $endereco</br>";
            echo "Bairro: $bairro</br>";
            echo "CEP: $cep</br></br>";
            $sql = "UPDATE pessoa SET nome = '$nome', email = '$email', endereco = '$endereco', bairro = '$bairro', cep = '$cep', id_cidade = $cidade WHERE id = $id";
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

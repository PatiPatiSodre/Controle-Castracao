<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/Style.css" />
    <link rel="stylesheet" href="../CSS/Cadastro.css" />
    <title>Cadastrar Pessoa</title>
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
        <div class="principal box">
            <h2>Cadastro de Pessoa</h2>
            <form action="./Cadastro-PessoaExe.php" method="post">
                <div>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" />
                </div>
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" />
                </div>
                <div>
                    <label for="endereco">Endereco</label>
                    <input type="text" name="endereco" id="endereco" />
                </div>
                <div>
                    <label for="bairro">Bairro</label>
                    <input type="text" name="bairro" id="bairro" />
                </div>
                <div>
                    <label for="cep">CEP</label>
                    <input type="text" name="cep" id="cep" />
                </div>
                <div>
                    <label for="cep">Cidade</label>
                    <select name="cidade" id="cidade">
                        <?php
                        include('../include/conexao.php');
                        $sql = "SELECT * FROM cidade";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['id'] . "'>" . $row['nome'] . "/" . $row['estado'] . "</option>";
                        }
                        ?>
                        <label for="cidade">Cidade</label>
                    </select>
                </div>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </section>
</body>

</html>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Style.css">
    <link rel="stylesheet" href="../CSS/Listar.css">
    <title>Lista Pessoas</title>
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
        <div class="principal flex inverter_column">
            <?php
            include('../include/conexao.php');
            $sql = "SELECT pes.id, pes.nome nomepessoa, pes.email, pes.endereco, pes.bairro, pes.cep, cid.nome nomecidade, cid.estado FROM pessoa pes LEFT JOIN cidade cid ON cid.id = pes.id_cidade";
            // Executa a consulta
            $result = mysqli_query($con, $sql);
            ?>
            <h1>Consulta de Cidades</h1>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Endereço</th>
                        <th>Bairro</th>
                        <th>Cep</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>Alterar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['nomepessoa'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['endereco'] . "</td>";
                        echo "<td>" . $row['bairro'] . "</td>";
                        echo "<td>" . $row['cep'] . "</td>";
                        echo "<td>" . $row['nomecidade'] . "</td>";
                        echo "<td>" . $row['estado'] . "</td>";
                        echo "<td><a href='Altera-Pessoa.php?id=" . $row['id'] . "'>Alterar</a></td>";
                        echo "<td><a href='Deleta-Pessoa.php?id=" . $row['id'] . "'>Deletar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>

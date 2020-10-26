<?php

    require_once '../helpers/autoload.php';
    
    use Classes\Cadastro;

    $cadastro = new Cadastro();
    $tabela = $cadastro->exibir();

    if($tabela) {
        echo "
        <table border='1'>
            <tr>
                <td>ID</td>
                <td>NOME</td>
                <td>TELEFONE</td>
                <td>EMAIL</td>
            </tr>
        ";
        foreach($tabela as $linha) {
            echo "
            <tr>
                <td>" . $linha['codigo'] . "</td>
                <td>" . $linha['nome'] . "</td>
                <td>" . $linha['telefone'] . "</td>
                <td>" . $linha['email'] . "</td>
            </tr>";
        }
        echo "</table>";

        echo "<p><a href='index.html' title='Novo Cadastro'>Novo Cadastro</a></p>";
    }

?>
<?php

    namespace Controllers;

    use Models\CadastroModel;
    use Entity\Cadastro;
    use PDOException;

    class CadastroController {

        /**
        * Método que exibe a listagem de pessos cadastradas
        */
        public function index()
        {
            $pessoas = (new CadastroModel())->exibir();
            
            return $pessoas;
        }

        /**
        * Método de cadastro de item passando os valores via POST
        */
        public function inserir($nome, $telefone, $email)
        {
            try {
                $cadastro = (new Cadastro())
                ->setNome(filter_var($nome), FILTER_SANITIZE_STRING)
                ->setTelefone(filter_var($telefone), FILTER_SANITIZE_STRING)
                ->setEmail(filter_var($email), FILTER_SANITIZE_STRING);
                
                (new CadastroModel())->inserir($cadastro);
                header("Location: lista_usuarios.php");

            } catch (PDOException $exception) {
                error_log($exception);
                exit;
            }
        }
    }

?>
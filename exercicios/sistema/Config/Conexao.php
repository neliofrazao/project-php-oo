<?php

    namespace Config;

    use PDO;

    class Conexao
    {
        private static $host = 'localhost';
        private static $user = 'root';
        private static $pass = '';
        private static $db = 'sistema';

        private $connect;

        public function __construct()
        {
            $this->connect = new PDO(
                'mysql:host=' . self::$host . ';dbname=' . self::$db, self::$user, self::$pass
            );
        }

        public function getConnect()
        {
            return $this->connect;
        }
    }
    
?>
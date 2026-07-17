<?php 

class Conexao{
    
    public static function LigarConexao(){

        //DADOS DE CONEXAO

        $host       = getenv('BRILLCAR_DB_HOST') ?: 'localhost';
        $username   = getenv('BRILLCAR_DB_USERNAME') ?: 'root';
        $password   = getenv('BRILLCAR_DB_PASSWORD') ?: '';
        $dbname     = getenv('BRILLCAR_DB_NAME') ?: 'db_brillcar';

        try{

            //referencia da classe do php que trabalha com dados do objeto - DENTRO DO () Ã‰ O DRIVE DE CONEXAO, NOME DO BANCO, SENHA E OPCAO DO BANCO
            $pdo = new PDO("mysql:host=$host;dbname=$dbname; charset=utf8", $username, $password); 

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;

        }catch(PDOException $e){

            throw new RuntimeException("Erro ao conectar com o banco de dados.", 0, $e);
        }

        
    }

}

?>

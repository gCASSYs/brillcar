<?php 
class ClassContato{
    
    //Atributos
    public $nomeContato;
    public $emailContato;
    public $foneContato;
    public $motivoContato;
    public $mensContato; 

    // METODO: INSERIR
    public function Inserir(){

        
        $sql = "INSERT INTO tbl_contato (
        nome_contato,
        email_contato,
        telefone_contato,
        motivo_contato,
        mensagem_contato
        ) VALUES (
        :nome,
        :email,
        :telefone,
        :motivo,
        :mensagem
        )";

        require_once('Conexao.php');

        $conexao = Conexao::LigarConexao();

        // Usa parametros para evitar quebra da query e injection com dados do formulario.
        $stmt = $conexao->prepare($sql);
        $stmt->execute([
            ':nome' => $this->nomeContato,
            ':email' => $this->emailContato,
            ':telefone' => $this->foneContato,
            ':motivo' => $this->motivoContato,
            ':mensagem' => $this->mensContato
        ]);
    }
}

?>

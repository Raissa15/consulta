<?php
//timezone
date_default_timezone_set('America/Sao_Paulo');

// conexão com o banco de dados
define('BD_SERVIDOR','localhost');
define('BD_USUARIO','root');
define('BD_SENHA','');
define('BD_BANCO','projetoweb');
    
class Banco{

    protected $mysqli;
    private $cadastro;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    /*$email
    $senha
    $endereco
    $bairro
    $cep
    $cidade
    $estado*/


    public function setAgendamentos($email,$senha,$endereco,$bairro,$cep,$cidade,$estado){
        $stmt = $this->mysqli->prepare("INSERT INTO consulta (`email`, `senha`, `endereco`, `bairro`, `cep`, `cidade`, `estado`) VALUES (?,?,?,?,?,?,?);");
        $stmt->bind_param("sssssss",$email,$senha,$endereco,$bairro,$cep,$cidade,$estado);
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }
    public function getAgendamentos($id){
        try {
            if(isset($id) && $id > 0){
                $stmt = $this->mysqli->query("SELECT * FROM consulta WHERE id = '" . $id . "';");
            }else{
                $stmt = $this->mysqli->query("SELECT * FROM consulta;");
            }

            $lista = $stmt->fetch_all(MYSQLI_ASSOC);
            $f_lista = array();
            $i = 0;
            foreach ($lista as $l) {
                $f_lista[$i]['id'] = $l['id'];
                $f_lista[$i]['email'] = $l['email'];
                $f_lista[$i]['endereco'] = $l['endereco'];
                $f_lista[$i]['senha'] = $l['senha'];
                $f_lista[$i]['bairro'] = $l['bairro'];
                $f_lista[$i]['cep'] = $l['cep'];
                $f_lista[$i]['cidade'] = $l['cidade'];
                $f_lista[$i]['estado'] = $l['estado'];
                
                $i++;
            }
            return $f_lista;
        }catch (Exception $e) {
            echo "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }
    public function updateAgendamentos($id,$email,$senha,$endereco,$bairro,$cep,$cidade,$estado){
        $stmt = $this->mysqli->query("UPDATE consulta SET `email` = '" . $email . "', `senha` =  '" . $senha . "', `endereco` =  '" . $endereco . "', `bairro` =  '" . $bairro . "', `cep` =   '" . $cep . "', `cidade` =   '" . $cidade . "', `estado` =   '" . $esatdo . "' WHERE `id` =  '" . $id . "';");
        if( $stmt > 0){
            return true ;
        }else{
            return false;
        }
    }

   
    public function deleteAgendamentos($id){
        $stmt = $this->mysqli->query("DELETE FROM consulta WHERE `id` =  '" . $id . "';");
        if( $stmt > 0){
            return true ;
        }else{
            return false;
        }
    }   
}    
?>
<?php
class Conn implements IConn{

    private $host;
    private $dbname;
    private $user;
    private $password;

    public function __construct($host, $dbname, $user, $password){
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;

    }
    public function connect(){
        try{                                                    #nome de usuario,senha de usuario
            return new \PDO(
                'mysql:host='.$this->host.';dbname='.$this->dbname,
                $this->user,
                $this->password,
            );
        
        }catch(\PDOException $e){
            
            echo 'Error! Message: ' . $e->getMessage()."Code:".$e->getCode();
            exit;
        }        
    }
}
?>
<?php
    class ServicePaciente
    {
        private $db;
        private $paciente;

        public function __construct(IConn $db,IPaciente $paciente){
            $this->db = $db->connect();
            $this->paciente = $paciente;
        }
        public function list(){
            $query = "select * from paciente";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public function save(){
            $query = "insert into paciente (`nome`,`cpf`,`endereco`,`doenca_id`) VALUES (:nome,:cpf,:endereco,:doenca_id)";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(":nome",$this->paciente->getNome());
            $stmt->bindValue(":cpf",$this->paciente->getCpf());
            $stmt->bindValue(":endereco",$this->paciente->getEndereco());
            $stmt->bindValue(":doenca_id",$this->paciente->getDoenca_id());
            $stmt->execute();
            return $this->db->lastInsertId();
        }
        public function update(){
            $query = "update `paciente` set `nome`=?, `cpf`=? where `id`=?";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(1,$this->paciente->getNome());
            $stmt->bindValue(2,$this->paciente->getCpf());
            $stmt->bindValue(3,$this->paciente->getId());
            $ret = $stmt->execute();
            return $ret;
        }
        public function delete(int $id){
            $query = "delete from paciente where `id`=:id";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(":id",$id);
            $ret = $stmt->execute();
            return $ret;
        }
        public function find($id){
            $query = "select * from paciente where `id`=:id";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(":id",$id);
            $stmt->execute();
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        }
    }
?>
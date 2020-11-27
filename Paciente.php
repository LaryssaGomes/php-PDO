<?php

class Paciente implements IPaciente{
    private $id;
    private $nome;
    private $cpf;
    private $endereco;
    private $doenca_id;

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }
    public function getCpf() {
        return $this->cpf;
    }
    public function setCpf($cpf) {
        $this->cpf = $cpf;
        return $this;
    }
    public function getEndereco() {
        return $this->endereco;
    }
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
        return $this;
    }
    public function getDoenca_id() {
        return $this->doenca_id;
    }
    public function setDoenca_id($doenca_id) {
        $this->doenca_id = $doenca_id;
        return $this;
    }

}
?>
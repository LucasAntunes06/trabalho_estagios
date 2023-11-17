<?php
namespace Model\VO;

final class UsuarioVO extends VO {
    private $nome;
    private $login;

    public function __construct($id = 0, $nome = '') {
        parent::__construct($id);
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

}

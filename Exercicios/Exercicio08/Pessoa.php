<?php


class Pessoa {
    private $_nome;
    private $_sexo;
    private $_idade;



// Fazer o metodo fazerAniversario()

    /**
     * Get the value of _nome
     */ 
    public function getNome()
    {
        return $this->_nome;
    }

    /**
     * Set the value of _nome
     *
     * @return  self
     */ 
    public function setNome($_nome)
    {
        $this->_nome = $_nome;

        return $this;
    }

    /**
     * Get the value of _sexo
     */ 
    public function getSexo()
    {
        return $this->_sexo;
    }

    /**
     * Set the value of _sexo
     *
     * @return  self
     */ 
    public function setSexo($_sexo)
    {
        $this->_sexo = $_sexo;

        return $this;
    }

    /**
     * Get the value of _idade
     */ 
    public function getIdade()
    {
        return $this->_idade;
    }

    /**
     * Set the value of _idade
     *
     * @return  self
     */ 
    public function setIdade($_idade)
    {
        $this->_idade = $_idade;

        return $this;
    }




}
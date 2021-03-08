<?php



require_once './Pessoa.php';
require_once './Livro.php';
require_once './Publicacao.php';


class Livro extends Pessoa implements Publicacao 
{
    private $_Titulo;
    private $_Autor;
    private $_TotPaginas;
    private $_PagAtual;
    private $_Aberto;
    private $_Leitor;
    public $_Detalhes;


    /**
     * Get the value of _Titulo
     */ 
    public function get_Titulo()
    {
        return $this->_Titulo;
    }

    /**
     * Set the value of _Titulo
     *
     * @return  self
     */ 
    public function set_Titulo($_Titulo)
    {
        $this->_Titulo = $_Titulo;

        return $this;
    }

    /**
     * Get the value of _Autor
     */ 
    public function get_Autor()
    {
        return $this->_Autor;
    }

    /**
     * Set the value of _Autor
     *
     * @return  self
     */ 
    public function set_Autor($_Autor)
    {
        $this->_Autor = $_Autor;

        return $this;
    }

    /**
     * Get the value of _TotPaginas
     */ 
    public function get_TotPaginas()
    {
        return $this->_TotPaginas;
    }

    /**
     * Set the value of _TotPaginas
     *
     * @return  self
     */ 
    public function set_TotPaginas($_TotPaginas)
    {
        $this->_TotPaginas = $_TotPaginas;

        return $this;
    }

    /**
     * Get the value of _PagAtual
     */ 
    public function get_PagAtual()
    {
        return $this->_PagAtual;
    }

    /**
     * Set the value of _PagAtual
     *
     * @return  self
     */ 
    public function set_PagAtual($_PagAtual)
    {
        $this->_PagAtual = $_PagAtual;

        return $this;
    }

    /**
     * Get the value of _Aberto
     */ 
    public function get_Aberto()
    {
        return $this->_Aberto;
    }

    /**
     * Set the value of _Aberto
     *
     * @return  self
     */ 
    public function set_Aberto($_Aberto)
    {
        $this->_Aberto = $_Aberto;

        return $this;
    }

    /**
     * Get the value of _Leitor
     */ 
    public function get_Leitor()
    {
        return $this->_Leitor;
    }

    /**
     * Set the value of _Leitor
     *
     * @return  self
     */ 
    public function set_Leitor($_Leitor)
    {
        $this->_Leitor = $_Leitor;

        return $this;
    }


    /**
     * Get the value of _Detalhes
     */ 
    public function get_Detalhes()
    {
        return $this->_Detalhes;
    }

    /**
     * Set the value of _Detalhes
     *
     * @return  self
     */ 
    public function set_Detalhes($_Detalhes)
    {
        $this->_Detalhes = $_Detalhes;

        return $this;
    }








    // INTERFACE FUNCTIONS



    public function abrir() 
    {
        
        $leitorGetter = $this->get_Aberto();
        $leitorSetter = $this->set_Aberto();
        if ($leitorGetter !== true) 
        {
            return $leitorSetter = true;
        }
    }

    public function fechar() 
    {

        $leitorGetter = $this->get_Aberto();
        $leitorSetter = $this->set_Aberto();
        if ($leitorGetter == true)
        {
        
            return $leitorSetter = false;
        }
    }

    public function folhear() 
    {
        for ($i = 0; $i <= $this->get_TotPaginas(); $i++) 
        {
            echo $i;
        }
    }
    
    public function avancarPag()
    {
        $newPage = $this->get_PagAtual()+1;
        echo $newPage;
    }


    public function voltarPag() {
        {
            $lastPage = $this->get_PagAtual()-1;
            echo $lastPage;
        }
    }



}
<?php
class Admin extends Usuario
	{
	    public $senha;
	    // quando tem uma variavel em um "public" ela passa a ser chamada de atributo publico.
	    // E quando tem uma função "public" ela passa a ser chamada de método.


	    public function setSenha($senha)
	    {
	        $this->senha = $senha;
	    }

	    public function getSenha()
	    {
	        return $this->senha;
	    }
	}
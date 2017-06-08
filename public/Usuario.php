<?php
	class Usuario{
	    public $id;

		public $nome;

	    public $email;

	    public function setId($id){
	        $this->id = $id;
	    }

		public function setNome($nome){
	        $this->nome = $nome;
	        //Marvin
	    }

	    public function setEmail($email){
	        $this->email = $email;
	    }

	    public function getId(){
	        return $this->id;
	    }

		public function getNome(){
	        return $this->nome;
	    }

	    public function getEmail(){
	        return $this->email;
    }
}
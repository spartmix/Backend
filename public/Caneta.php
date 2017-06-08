<?php
	class Caneta
	{
		protected $modelo;
		public $cor;
		protected $ponta;
		protected $carga;
		public $tampada;

		public function __construct($color, $ponta, $mold)
		{
			$this->cor = $color;
			$this->ponta = $ponta;
			$this->modelo = $mold;
		}

		function rabiscar()
		{
			if($this->tampada){
				echo 'Erro! Não posso rabiscar';
			}else{
				echo 'Rabiscou';
			}
		}

		function tampar()
		{
			$this->tampada = true;
		}

		function destampar()
		{
			$this->tampada = false;
		}


		public function getModelo()
		{
			return $this->modelo;
		}

		public function setModelo($mold)
		{
			$this->modelo = $mold;
		}

		public function getCor()
		{
			return $this->cor;
		}

		public function setCor($color)
		{
			$this->cor = $color;
		}

		public function getPonta()
		{
			return $this->ponta;
		}

		public function setPonta($ponta)
		{
			$this->ponta = $ponta;
		}

		public function getCarga()
		{
			return $this->carga;
		}

		public function setCarga($carga)
		{
			$this->carga = $carga;
		}



	}
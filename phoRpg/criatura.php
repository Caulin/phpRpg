<?php
	include("generica.php");
	abstract class criatura implements generica{
		protected	$nome;
		protected	$classe;
		protected	$nivel;
		protected	$vida;
		protected	$magia;
		protected	$forca;
		protected	$agilidade;
		protected	$destreza;
		protected	$inteligencia;
		protected	$carisma;

		
		public function __construct($nome, $classe, $nivel, $vida, $magia, $forca, $agilidade, $destreza, $inteligencia, $carisma){
			$this-> $nome	 		=	$nome;
			$this-> $classe			=	$classe;
			$this-> $nivel			=	$nivel;
			$this-> $vida			=	$vida;
			$this-> $magia			=	$magia;
			$this-> $forca			=	$forca;
			$this-> $agilidade		=	$agilidade;
			$this->	$destreza	 	=	$destreza;
			$this->	$inteligencia	=	$inteligencia;
			$this->	$carisma		=	$carisma;

			
		}

		public function 	atacar($nivel,$forca,$agilidade, $magia){
			return(	($nivel	+	$forca	+	$agilidade	+	($magia*0.1))*	mt_rand(1.1, 1.6)	);	

		}

		public function 	defender(){

		}

		public function 	vivo(){

		}
		public function 	perdeVida(){

		}
		public function 	revitalizar(){

		}
		public abstract function descancar();

		public function __toString(){

		}

		public function __call(){
			
		}


	}
?>
<?php
	include("generica.php");
	abstract class criatura implements generica{
		protected	$nome;
		protected	$classe;
		protected	$nivel;
		protected	$vida = 100;
		protected	$magia;
		protected	$forca;
		protected	$agilidade;
		protected	$destreza;
		protected	$inteligencia;
		protected	$carisma;

		
		public function __construct($nome, $classe, $nivel, $vida, $magia, $forca, $agilidade, $destreza, $inteligencia, $carisma){
			$this->nome	 		=	$nome;
			$this->classe		=	$classe;
			$this->nivel		=	$nivel;
			$this->vida			=	$vida;
			$this->magia		=	$magia;
			$this->forca		=	$forca;
			$this->agilidade	=	$agilidade;
			$this->destreza	 	=	$destreza;
			$this->inteligencia	=	$inteligencia;
			$this->carisma		=	$carisma;

			
		}

		public function 	atacar(){
			return(	($this->nivel	+	$this->forca	+	$this->agilidade	+	($this->magia*0.1))*	mt_rand(1.1, 1.6)	);	

		}

		public function 	defender(){
			return(	(	$this->agilidade	+	($this->destreza	*	1.8)	+	$this->inteligencia)	*	mt_rand(1.1,1.6)	+	10);	

		}

		public function 	vivo(){
			if ( $this->vida > 0) {
				return "Vivo";
			}else{
				return "Morto";
			}

		}
		public function 	perdeVida(){
			return $this->vida = (	atacar() - defender() );

		}
		public function 	revitalizar(){

		}
		public abstract function descancar();

		//public function __toString(){}

		//public function __call(){}


	}
?>
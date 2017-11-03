<?php
include("criatura.php");
 class monstro extends criatura{
	
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

		public function descancar(){
			if (	(	($this->vida + $this->nivel)	*	mt_rand(1.1,1.6)	)	> 20) {
				return (	($this->vida + $this->nivel)	*	mt_rand(1.1,1.6));
			}
			else{
				return 0;
			}
		}
		
}
 
?>
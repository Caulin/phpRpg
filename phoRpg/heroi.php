<?php
include("criatura.php");

 class heroi extends criatura{
	protected $bencao;

	public function __construct($nome, $classe, $nivel, $vida, $magia, $forca, $agilidade, $destreza, $inteligencia, $carisma, $bencao){
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
			$this->bencao		=	$bencao;
			
		}

		public function descancar(){
			return null;
		}
}
?>
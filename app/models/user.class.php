<?php defined('BASEPATH') or exit ('No se permite acceso directo'); 

class User
{
	static $table = "usuaris";

	private $id;
	private $rol;

	private $nick
	private $email;
	private $clau;

	private $nom;
	private $cnom;
	private $adress;
	private $city;
	private $pais;



	public function __construct()
	{
		$total_args = func_num_args();
		$argumentos = func_get_args();

		switch ($total_args) 
		{
			//login
			case 2:
				$this->nick = $argumentos[0];
				$this->clau = $argumentos[1];
				break;
			//registre
			case 4:
				$this->nick = $argumentos[0];
				$this->email = $argumentos[1];
				$this->clau = $argumentos[2];
				$this->rol = 1;
				break;

			//usuari complet
			case 8:	
				$this->nick = $argumentos[0];
				$this->email = $argumentos[1];
				$this->clau = $argumentos[2];			
				$this->nom = $argumentos[3];
				$this->cnom = $argumentos[4];
				$this->$adress = $argumentos[5];
				$this->$city = $argumentos[6];
				$this->$pais = $argumentos[7];
				$this->rol = 2;				
				break;
		}
	}	

	public function check_nick()
	{

		//new instanceDB;

	}

	public function registre()
	{
		new instanceDB;		
		// $nou_ususari = $this->nick."|".$this->clau."|".$this->email."|";
		// Archivo::set_to_file($file,$nou_ususari);	
	}
}



?>
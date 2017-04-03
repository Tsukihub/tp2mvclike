<?php
namespace App\Entity;
use Core\Entity\Entity;
/**
* class pr stocker un enregistrement s'utilisateur
*/
class ClientEntity extends Entity
{
	public function getAge()
		{	
			return (int)((time()-strtotime($this->birthdate))/(60*60*24*365));
			
		}
	public function getIdentite(){
		return strtoupper($this->lastname). ', ' .ucfirst($this->firstname);
	}
	public function getAdresseComplete()
	{
		return $this->address. ' ' .$this->postalCode;
		# code...
	}

	public function getEndettement()
	 {
	 	return $this->body. ' ' .$this->amount;
	 }
}
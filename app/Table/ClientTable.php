<?php
namespace App\Table;
use Core\Table\Table;
/**
* class table client
*/
class ClientTable extends Table
{
	// public function lastAndFirstName()
	// {
	// 	return $this->query("SELECT clients.id, 
	// 		clients.lastname, 
	// 		clients.firstname, 
	// 		clients.address, 
	// 		clients.birthday, 
	// 		clients.postalCode, 
	// 		clients.phone, 
	// 		maritalStatus.maritalStatus AS marital
	// 		FROM clients 
	// 		LEFT JOIN maritalStatus
	// 		ON maritalStatusId= maritalStatus.id
			
	// 		");
	// }


	public function lastAndFirstName()
	{
		return $this->query("SELECT clients.*, maritals.*, credits.*
	FROM clients
    JOIN maritals
        ON clients.maritalStatusId = maritals.maritalid
    JOIN credits
        ON clients.idDuClient = credits.clients_id
		
			");
	}

	// 	public function allByService($id)
	// {
	// 	return $this->query("SELECT 
	// 		clients.idDuClient, 
	// 		clients.nom, 
	// 		clients.prenom, 
	// 		clients.prenom, 
	// 		clients.adresse, 
	// 		clients.date_de_naissance, 
	// 		clients.code_postal, 
	// 		clients.numero_de_telephone, 
	// 		services.nom_du_service AS service
	// 		FROM clients 
	// 		LEFT JOIN services
	// 		ON services_id= services.id
	// 		WHERE services.id = ?
	// 		", [$id]);
	// }


		public function deletebis($id)
	{
		return $this->query("DELETE FROM {$this->table} WHERE idDuClient = ?", [$id], true);
	}
}
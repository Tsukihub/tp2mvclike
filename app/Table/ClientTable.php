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
    LEFT JOIN maritals
        ON clients.maritalStatusId = maritals.maritalid
    LEFT JOIN credits
        ON clients.idDuClient = credits.clients_id
    ORDER BY clients.lastname ASC
		
			");
	}


	// public function findbis($id)
	// {
	// 	return $this->query("SELECT clients.*, maritals.*, credits.*
	// FROM clients
 //    LEFT JOIN maritals
 //        ON clients.maritalStatusId = maritals.maritalid
 //    LEFT JOIN credits
 //        ON clients.idDuClient = credits.clients_id
 //    WHERE clients.idDuClient = ?", [$id], true);
		
			
	// }


	// public function lastAndFirstName()
	// {
	// 	return $this->query("SELECT clients.*, maritals.*, credits.*
	// FROM clients
 //    JOIN maritals
 //        ON clients.maritalStatusId = maritals.maritalid
 //    JOIN credits
 //        ON clients.idDuClient = credits.clients_id
		
	// 		");
	// }

		public function findbis($id)
	{
		return $this->query("SELECT 
			clients.idDuClient, 
			clients.lastname, 
			clients.firstname, 
			clients.birthday, 
			clients.address, 
			clients.phone, 
			clients.postalCode,
			clients.maritalStatusId, 
			maritals.maritalStat,
			credits.body, 
			credits.amount
			FROM clients 
			LEFT JOIN maritals
			ON clients.maritalStatusId = maritals.maritalid
			LEFT JOIN credits
        	ON clients.idDuClient = credits.clients_id
			WHERE clients.idDuClient = ?
			", [$id]);
	}


		public function deletebis($id)
	{
		return $this->query("DELETE FROM {$this->table} WHERE idDuClient = ?", [$id], true);
	}




}
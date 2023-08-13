<?php
namespace App\Models;

use CodeIgniter\Model;

class Deckmodel extends Model
{
    function getDeckList()
	{
		$this->db = \Config\Database::connect();
        $query = $this->db->query('select deckid,
					deckname,
					(select
				count(*) from carddeckxc where deckid = deckin) as cardcount from 
			(select
			deckid deckin,
			deckid,
			deckname
			from decks)');
        return $query->getResultArray();
	}
	
	function saveToDeckList($inputData)
	{
		$data = [
				'DeckName' => $inputData
			];
		$this->db->table('decks')->insert($data);
        return $this->db->insertID();
	}
	
}
?>
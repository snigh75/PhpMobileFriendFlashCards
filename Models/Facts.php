<?php 

namespace App\Models;
use CodeIgniter\Model;

class Facts extends Model
{
	public function getTest()
	{
		$db = \Config\Database::connect();

		$query = $db->query("select * from facts");

		$results = $query->getResultArray();
		
		return $results;
	}
}
?>
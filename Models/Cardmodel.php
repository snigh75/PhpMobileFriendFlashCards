<?php
namespace App\Models;

use CodeIgniter\Model;

class Cardmodel extends Model
{
    function getCardList()
	{
		$this->db = \Config\Database::connect();
        $query = $this->db->query('select a.cardid, cardname, cardquestion, answertext from cards a join cardanswers b on a.cardid = b.cardid');
        return $query->getResultArray();
	}
	
	function saveToCardList($cardName,$cardQuestion,$cardAnswer,$deckId)
	{
		$data = [
				'cardname' => $cardName,
				'cardquestion' => $cardQuestion
			];
		$this->db->table('cards')->insert($data);
        $cardId = $this->db->insertID();
		$query = $this->db->query('select max(cardid) m_cardid from cards');
		$results = $query->getResultArray();
		$cardId = $results[0]['m_cardid'];
		$data1 = [
				'cardid' => $cardId,
				'deckid' => $deckId
			];
		$this->db->table('carddeckxc')->insert($data1);
		$data2 = [
				'cardid' => $cardId,
				'deckid' => $deckId,
				'answertext' => $cardAnswer
			];
		$this->db->table('cardanswers')->insert($data2);
	}
	
}
?>
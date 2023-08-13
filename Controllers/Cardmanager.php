<?php

namespace App\Controllers;

use App\Models\Deck;

class Cardmanager extends BaseController
{
	function Cardmanager()
	{
	  parent::Controller(); 
	   $this->load->helper('form');
	}


    public function index()
    {
        $model = model(Cardmodel::class);
		$modelDeck = model(Deckmodel::class);
		$data['cardList'] = $model->getCardList();
		$data['deckList'] = $modelDeck->getDeckList();
		$data['mode'] = "Card";
		return view('header', $data) . view('cardlist', $data);
	}
	
	public function addCard()
	{
		$model = model(Cardmodel::class);
		$modelDeck = model(Deckmodel::class);
		$deckId = addslashes($this->request->getVar('deckName'));
		$cardName = addslashes($this->request->getVar('card-name'));
		$cardQuestion = addslashes($this->request->getVar('card-question'));
		$cardAnswer = addslashes($this->request->getVar('card-answer'));
		$model->saveToCardList($cardName,$cardQuestion,$cardAnswer,$deckId);
		$data['deckList'] = $modelDeck->getDeckList();
		$data['cardList'] = $model->getCardList();
		$data['mode'] = "Card";
		return view('header', $data) . view('cardlist', $data);
	}
}
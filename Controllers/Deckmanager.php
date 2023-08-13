<?php

namespace App\Controllers;

use App\Models\Deck;

class Deckmanager extends BaseController
{
	function Deckmanager()
	 {
	  parent::Controller(); 
	   $this->load->helper('form');

	 }


    public function index()
    {
        $model = model(Deckmodel::class);
		$data['deckList'] = $model->getDeckList();
		$data['mode'] = "Deck";
		return view('header', $data) . view('decklist', $data);
	}
	
	public function addDeck()
	{
		$model = model(Deckmodel::class);
		$model->saveToDeckList($this->request->getVar('deck-name'));
		$data['deckList'] = $model->getDeckList();
		return view('header') . view('decklist', $data);
	}
}

<?php

namespace App\Controllers;

use App\Models\Facts;

class AddFacts extends BaseController
{
    public function index()
    {
        $model = model(Facts::class);
		return view('header') . view('add_facts');
	}
}
?>
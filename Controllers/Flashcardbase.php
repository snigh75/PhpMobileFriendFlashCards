<?php

namespace App\Controllers;

use App\Models\Facts;

class Flashcardbase extends BaseController
{
    public function index()
    {
        $model = model(Facts::class);
		$data['getstuff'] = $model->getTest();
		return view('test_page',$data);
    }
}

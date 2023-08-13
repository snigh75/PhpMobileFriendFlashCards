<?php

namespace App\Controllers;

class Studytools extends BaseController
{
	public function index()
    {
		$data['mode'] = "Card";
		return view('header',$data) . view('flipcard',$data);
	}
}
?>
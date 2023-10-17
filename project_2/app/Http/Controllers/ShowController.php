<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show(){
		return 'Kontroler ShowController';
	}

	public function showView(){
		$data = [
			'firstName' => 'Michał',
			'lastName' => 'Bajdalski',
			'city' => 'Poznań',
			'hobby' => [
				'siatkówka', 'żużel'
			],
		];
		return View('table', $data);
	}
}

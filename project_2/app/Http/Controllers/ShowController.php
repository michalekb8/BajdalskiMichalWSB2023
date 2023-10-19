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

	public function showData(){
		$data = [
			'firstName' => 'Jan',
			'lastName' => 'Nowak',
			'city' => 'Kołobrzeg',
			'hobby' => [
				'Piłka', 'Kosz'
			],
		];
		return View('data', $data);
	}

}

<?php

namespace App\Http\Controllers;
use App\Models\Centro;

use Illuminate\Http\Request;


class main extends Controller
{
    protected $centroModel;

	public function __construct(Centro $centro)
	{
		$this->centroModel = $centro;
	}

	public function index()
	{
		$centros = $this->centroModel->findAll();
		return view('centros.lista', ['centros' => $centros]);
	}
}

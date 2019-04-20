<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function index(Request $request)
	{
		return view('validation.index', ['msg'=>'フォームを入力: ']);
	}

	public function post(Request $request)
	{
		$validation_rules = [
		'name' => 'required',
		'mail' => 'email',
		'age' => 'numeric|between:0,150',
		];
		$this->validate($request, $validation_rules);
		return view('validation.index', ['msg'=>'正しく入力されました！']);
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function index(Request $request)
	{
		return view('validation.index', ['msg'=>'フォームを入力: ']);
	}

    public function index2(Request $request)
	{
		return view('validation.errorMessage', ['msg'=>'フォームを入力: ']);
	}

    public function index3(Request $request)
	{
		return view('validation.errorMessage2', ['msg'=>'フォームを入力: ']);
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

	public function post2(Request $request)
	{
		$validation_rules = [
		'name' => 'required',
		'mail' => 'email',
		'age' => 'numeric|between:0,150',
		];
		$this->validate($request, $validation_rules);
		return view('validation.errorMessage', ['msg'=>'正しく入力されました！']);
	}

	public function post3(Request $request)
	{
		$validation_rules = [
		'name' => 'required',
		'mail' => 'email',
		'age' => 'numeric|between:0,150',
		];
		$this->validate($request, $validation_rules);
		return view('validation.errorMessage2', ['msg'=>'正しく入力されました！']);
	}
}

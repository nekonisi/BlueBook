<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UseBladeController extends Controller
{
	public function index() {
		$data = [
			'msg' => 'これはBladeを使用したサンプルです。',
			];
		return view('Blade.index', $data);
	}

	public function form() {
		return view('Blade.form');
	}

	public function post(Request $request) {
		$msg = $request->msg;
		$data = [
			'msg'=>$msg,
			];
		return view('Blade.form', $data);
	}

	public function forSentence() {
		$array = [
		'one',
		'two',
		'three',
		'four',
		'five'
		];
		return view('Blade.forSentence', ['data'=>$array]);
	}
}

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
		$data = [
			'msg' => '名前を入力！',
			];
		return view('Blade.form', $data);
	}

	public function post(Request $request) {
		$msg = $request->msg;
		$data = [
			'msg'=>'こんにちは、' . $msg . 'さん！',
			];
		return view('Blade.form', $data);
	}
}

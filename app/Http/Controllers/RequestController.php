<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;

class RequestController extends Controller
{
	public function index()
	{
		return view('request.index', ['msg'=>'情報を入力']);
	}

	public function post(HelloRequest $request)
	{
		return view('request.errorMessage', ['msg'=>'正しく入力されました！']);
	}
}

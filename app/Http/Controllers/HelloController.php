<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
	// アクションの追加
	public function index(){
		return <<<EOF
			<html>
				<head>
					<title>Hello/Index</title>
					<style>
						body { font-size:16pt; color:#999; }
						h1{ font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
					</style>
				<head>
				<body>
					<h1>Index</h1>
					<p>これは、Helloコントローラのindexアクションです。</p>
				</body>
			</html>
EOF;
	}

	public function useMiddleware(Request $request){
		return view('Middleware.index', ['data'=>$request->data]);
	}

	public function useAfterMiddleware(Request $request){
		return view('Middleware.AfterMiddleware');
	}
}

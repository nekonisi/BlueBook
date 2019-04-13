<?php

/*
   |--------------------------------------------------------------------------
   | Web Routes
   |--------------------------------------------------------------------------
   |
   | Here is where you can register web routes for your application. These
   | routes are loaded by the RouteServiceProvider within a group which
   | contains the "web" middleware group. Now create something great!
   |
 */

/* 青本の内容をまとめる */

// デフォルトのルーティング
Route::get('/', function(){
		return view('welcome');
		}
	  );

/******************************
chapter2: ルーティングとコントローラ
******************************/
// sample2_3
Route::get('/sample2_3', function(){
		return '
		<html>
		<body>
		<h1>Hello!</h1>
		<p>This is Smaple page</p>
		</body>
		</html>';
		}
	  );

// sample2_4: ヒアドキュメントを使用した文字列の出力
$html = <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body {font-size:16pt; color:#999;}
h1 {font-size:100pt; text-align:right; color:#eee; margin: -40px 0px -50px 0px;}
</style>
</head>
<body>
<h1> Hello </h1>
<p> This is sample page</p>
<p> これはサンプルで作ったページです。 </p>
</body>
</html>
EOF;

Route::get('sample2_4',function()
		use($html){
		return $html;
		}
	  );

// sample2_5_1: パラメータを利用した表示
// 第一引数に、パラメータを組み込んだURLを用意してあげる。

Route::get('sample2_5_1/{msg}',function($msg){
		$html = <<<EOF
		<html>
		<head>
		<title>Hello</title>
		<style>
		body {font-size:16pt; color:#999;}
		h1 {font-size:100pt; text-align:right; color:#eee; margin: -40px 0px -50px 0px;}
		</style>
		</head>
		<body>
		<h1> Hello </h1>
		<p>{$msg}</p>
		<p> これはサンプルで作ったページです。 </p>
		</body>
		</html>
		EOF;

		return $html;
		}
	  );

// sample2_5_2: 任意パラメータを利用したサンプル

Route::get('hello2_5_2/{msg?}',function($msg = 'no message.'){
		$html = <<<EOF
		<html>
			<head>
				<title>Hello</title>
				<style>
					body {font-size:16pt; color:#999;}
					h1 {font-size:100pt; text-align:right; color:#eee; margin: -40px 0px -50px 0px;}
				</style>
			</head>
			<body>
				<h1> Hello </h1>
				<p>{$msg}</p>
				<p> これはサンプルで作ったページです。 </p>
			</body>
		</html>
		EOF;
		return $html;
		}
);

// sample2_7: コントローラを利用したサンプル
Route::get('sample2_7','HelloController@index');

// sample2_8: コントローラを利用したサンプル(デフォルト値を利用)
Route::get('sample2_8/{id?}/{pass?}','Hello2Controller@index');

// sample2_10: ルートパラメータの利用
Route::get('sample2_10/{id?}/{pass?}', 'Hello3Controller@index');

// sample2_11: 複数アクションの利用
Route::get('sample2_11', 'Hello4Controller@index');
Route::get('sample2_11/other', 'Hello4Controller@other');

// sample2_13: シングルアクションコントローラの利用(__invoke関数)
Route::get('sample2_13', 'SingleActionController');

// リクエストとレスポンスの取得
Route::get('BlueBook/hello2_15', 'Hello5Controller@index');


/******************************
chapter3: ビューとテンプレート
******************************/

// sample3_1: テンプレートの利用
Route::get('sample3_1', function() { return view('hello.index'); });

// sample3_3: コントローラを利用したViewの利用
//Route::get('sample3_3', 'UseTemplateController@index');
Route::get('sample3_3/{id?}', 'UseTemplateController@index');
Route::get('sample3_4', 'UseTemplateController@useRequest');

// sample3_9: Bladeを利用したviewの利用
Route::get('sample3_9', 'UseBladeController@index');

// sample3_15: フォームの作成
Route::get('sample3_15', 'UseBladeController@form');
Route::post('sample3_15', 'UseBladeController@post');

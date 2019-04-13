<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UseTemplateController extends Controller
{
    public function index($id='no ID'){
		$data = [ 'msg'=>'コントローラから渡されたメッセージ' ,
		'id'=>$id];
		return view('hello.index', $data);
	}

	public function useRequest(Request $request){
		$data = [ 'msg'=>'コントローラから渡されたメッセージ' ,
			'id'=>$request->id];
		return view('hello.index', $data);
	}
}

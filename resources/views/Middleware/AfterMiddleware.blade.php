@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
	@parent
	インデックスページ
@endsection

@section('content')
	<p>ここが本文のコンテンツです。</p>
	<p>これは、<hoge>google.com</hoge>へのリンクです。</p>
	<p>これは、<hoge>nekonisi.com</hoge>へのリンクです。</p>
@endsection

@section('footer')
copyright 2019 nekonisi
@endsection

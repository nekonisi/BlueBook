
@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
	@parent
	インデックスページ
@endsection

@section('content')
	<p>ここが本文のコンテンツです。</p>
	<p>{{$msg}}</p>
<table>
<form action="/sample4_16" method="post">
{{ csrf_field() }}
<tr><th>name: </th><td><input type="test" name="name"></td></tr>
<tr><th>mail: </th><td><input type="text" name="mail"></td></tr>
<tr><th>age: </th><td><input type="text" name="age"></td></tr>
<tr><th></tr><td><input type="submit" value="send"></td></tr>
</form>
</table>
@endsection

@section('footer')
copyright 2019 nekonisi
@endsection

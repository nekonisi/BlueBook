@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
	@parent
	エラーメッセージの出力テスト
@endsection

@section('content')
<p>{{$msg}}</p>
@if (count($errors) > 0)
<div>
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
</div>
@endif
<table>
<form action="/sample4_17" method="post">
{{ csrf_field() }}
<tr><th>name: </th><td><input type="test" name="name" value="{{ old('name') }}"></td></tr>
<tr><th>mail: </th><td><input type="text" name="mail" value="{{ old('mail') }}"></td></tr>
<tr><th>age: </th><td><input type="text" name="age" value="{{ old('age') }}"}></td></tr>
<tr><th></tr><td><input type="submit" value="send"></td></tr>
</form>
</table>
@endsection

@section('footer')
copyright 2019 nekonisi
@endsection

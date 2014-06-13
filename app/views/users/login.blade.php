@extends("layout")
@section("content")
	{{	Form::open(array("url" => "/login",
						 "autocomplete" => "off")) }}
		{{	Form::label("username", "Nombre") }}
		{{	Form::text("username", Input::get("username"), array("placeholder" => "jhon.smith")) }}
		{{	Form::label("password", "Password") }}
		{{	Form::password("password", array("placeholder" => "********")) }}
		@if ($error = $errors->first("password"))
			<div class="error">{{ $error }}</div>
		@endif
		{{	Form::submit("Entrar", array("id" => "login")) }}
	{{	Form::close() }}
@stop
@section("footer")
	@parent
		<script src="//polyfill.io"></script>
@stop
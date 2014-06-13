@extends('layout')

@section('content')

	<!-- CONTENT
	================= -->
	<hr class="featurette-divider">

	<!-- Filter section
	===================== -->
	<div class="container">
		<!-- <div class="navbar navbar-default" role="navigation">
			<ul class="pager">
				<li class="previous"><a href="#">&laquo;</a></li>
				<li class="next"><a href="#">&raquo;</a></li>
			</ul>
		</div> -->
		<div class="row">
			@if ($users->count())
				@foreach ($users as $user)
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
						<h2>{{ $user->name }} {{ $user->lastname}} @if (isset( $user->nickname )) {{ $user->nickname }} @endif</h5>
						<img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
						<div class="">{{ $user->mobile }}</div>
						<div class="">{{ $user->email }}</div>
						<a class="btn btn-default btn-lg" href="{{ URL::to('users/{'.$user->id.'}') }}" role="button">M&aacute;s informaci&oacute;n &raquo;</a>
					</div>
				@endforeach
			@else
				<p>No hay miembros registrados</p>
			@endif
		</div>
	</div>


@stop

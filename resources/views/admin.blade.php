@extends('layouts.app')
	@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">ADMIN Dashboard</div>
					<div class="panel-body">
					You are logged in as <strong>ADMIN</strong>!
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('logout')
	<a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
	Logout
	</a>
	<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
	</form>
@endsection
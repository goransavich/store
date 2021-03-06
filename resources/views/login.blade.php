@extends('layouts.master')

@section('content')
<div class="container">

	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">

			<h1>Log in</h1>
			<p>You not logged in. Please insert your login data to access schedule.</p>
			<form method="POST" action="/login">

			{{csrf_field()}}

				  <div class="form-group">
				    <label for="name">User name</label>
				    <input type="text" class="form-control" name="name" required>
				  </div>

				  <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" class="form-control" name="password" required>
				  </div>
				  
				  
				  <div class="form-group">
				  	<button type="submit" class="btn btn-primary" name="submit">Login</button>
				  </div>

				  <div class="form-group">
				  	@include('layouts.errors')
				  </div>

			</form>
		</div>
	</div>


</div>
@endsection
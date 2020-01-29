@extends("shop/index")


@section("navigation")

@endsection

@section("slider")
	
@endsection

@section("home")

<div class="section">
<!-- container -->
	<div class="container">

		<div class="row">
			
			<form id="form_submit" method="POST" action="{{ url('login') }}">
					
					@csrf()

					<div class="form-group">
						<label>Username</label>
					<input class="form-control" value="{{ old('username') }}" name="username" type="text"/>
					@error('username')
					    <div class="alert alert-danger">{{ $message }}</div>
					@enderror
					
					</div>

					<div class="form-group">
						<label>Password</label>
						<input  class="form-control" name="password" type="password" />
						@error("password")
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
					</div>

					<div class="form-group">	
							<input  class="form-control" type="submit" value="Login"/>
					</div>

			</form>						
				
	</div>
	</div>
</div>

@endsection

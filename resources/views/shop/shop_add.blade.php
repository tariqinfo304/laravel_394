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
			@php //print_r($errors); @endphp

			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif

			<form method="POST" action="{{ url('shop_add') }}">
					
					@csrf()
					<div class="form-group">
						<label>Name</label>
					<input class="form-control" name="name" type="text"/>
					@error('name')
					    <div class="alert alert-danger">{{ $message }}</div>
					@enderror
					
					</div>

					<div class="form-group">
						<label>Owner Name</label>
						<input  class="form-control" name="owner_name" type="text" />
					</div>

					<div class="form-group">
						<label>Address</label>
						<input  class="form-control" name="address" type="text"/>
					</div>

					<div class="form-group">
						<label>Opening Time</label>
						<input  class="form-control" name="opening_time" type="Time"/>
					</div>

					<div class="form-group">
						<label>Closing Time</label>
						<input  class="form-control" name="closing_time" type="Time"/>
					</div>

					

					<div class="form-group">	
							<input  class="form-control" type="submit" value="Add Shop"/>
					</div>


			</form>						
				
	</div>
	</div>
</div>

@endsection

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
			
			<form method="POST" action="{{ url('shop_edit') }}">
					
					@csrf()
					<div class="form-group">
						<label>Name</label>
					<input class="form-control" name="name" type="text" value="{{ $shop->name }}"/>
					</div>

					<div class="form-group">
						<label>Owner Name</label>
						<input  class="form-control" name="owner_name" type="text" value="{{ $shop->owner_name }}"/>
					</div>

					<input type="hidden" name="id" value="{{ $shop->id }}"/>

					<div class="form-group">	
							<input  class="form-control" type="submit" value="Update"/>
					</div>


			</form>						
				
	</div>
	</div>
</div>

@endsection

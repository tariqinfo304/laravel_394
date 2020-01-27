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


			@php

//			echo  $errors->first('address');

			//print_r($errors->get("name"));

			//print_r($errors->all());

			if($errors->has('name'))
			{
				//echo "YEs Error";
			}


			@endphp

			<form id="form_submit" enctype="multipart/form-data" method="POST" action="{{ url('shop_add') }}">
					
					@csrf()
					<div class="form-group">
						<label>Name</label>
					<input class="form-control" value="{{ old('name') }}" name="name" type="text"/>
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
						<input  class="form-control" name="address_temp" type="text"/>
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
						<label>Attach Files</label>
						<input  class="form-control" name="file_attach" type="file"/>
					</div>

					
					<div class="form-group">	
							<input  class="form-control" type="submit" value="Add Shop"/>
					</div>

			</form>						
				
	</div>
	</div>
</div>

<script>

					/*

				use in case of FormData Object
				processData: false,
				contentType: false,
				*/

				/*

	$("#form_submit").submit(function(e){

			e.preventDefault();
			
			var name = $("input[name=name]").val();

		//file will be added in case of FormData
			var data = $(this).serialize() ;//new FormData(this);

		//	var csrf =  $("input[name=_token]").val();

			$.ajax({
				type:"POST",
				url : "{{ URL('shop_add') }}",
				data : data,
//data will receive in form of json in laravel validation
				success:function(data)
				{
					console.log(data);
				},
				error:function(err)
				{
					console.log(err);
				}
			});
	});	
	*/
</script>

@endsection

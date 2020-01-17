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
		<div class="col-md-12">
						<div class="section-title">
							<h2 class="title">Shop List</h2>
							<div class="pull-right">
								<div class="product-slick-dots-1 custom-dots"></div>
							</div>
						</div>
					</div>
		<table class="table">
			<thead>
					<tr>
						<th>Shop Name</th>
						<th>Owner  Name</th>
						<th>Opening Time</th>
						<th>Closing Time</th>
						<th>Edit Shop</th>
						<th>Delete Shop</th>
					</tr>
			</thead>
			<tbody>
				@foreach( $shop_list as $row)

					<tr>
						<td>{{ $row->name }}</td>
						<td>{{ $row->owner_name }}</td>
						<td>{{ $row->opening_time }}</td>
						<td>{{ $row->closing_time }}</td>
						<td><a class="btn btn-info btn-lg" href="{{ url('shop_edit',['id' => $row->id]) }}"> <span class="	glyphicon glyphicon-pencil"></span></a></td>
						<td><a class="btn btn-info btn-lg" href="{{ url('shop_delete',['id' => $row->id]) }}"> <span class="	glyphicon glyphicon-trash"></span></a></td>
						
					</tr>

				@endforeach
			</tbody>
			
		</table>
	</div>
	</div>
</div>

@endsection

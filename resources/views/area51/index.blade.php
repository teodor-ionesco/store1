@extends('area51.global')
@section('title') Dashboard @endsection
@section('css')
	textarea
	{
		height: 100px;
	}
@endsection
@section('main')
	<div class="container">
		<ul class="collapsible">
		  <li>
			<div class="collapsible-header flow-text"> Add pic from here </div>
			<div class="collapsible-body">
				<form method="POST" enctype="multipart/form-data" action="/area51/dash">
					{{csrf_field()}}
					<div>
						<span>Title:&nbsp;</span>
						<input type="text" name="title">
					</div>
					<div>
						<span>Price (RON):&nbsp;</span>
						<input type="text" name="price">
					</div>
					<div>
						<span>Description:&nbsp;</span>
						<textarea name="description"></textarea>
					</div>
					<br>
					<div>
						<span>File:&nbsp;</span>
						<input type="file" name="file">
					</div>
					<br>
					<button class="btn green waves-effect">Submit</button>
				</form>
			</div>
		  </li>
		</ul>

		<ul class="collapsible">
			<li>
				<div class="collapsible-header flow-text">
					<a href="/area51/orders/all">Orders</a>
				</div>
			</li>
		</ul>
		<div class="row">
			@foreach($PRODUCTS as $object)
				<div class="col l4 m6 s12">
					<div class="card">
						<div class="card-image">
							<img src="/static/{{ $object -> fname}}">
							
						</div>
						<div class="card-content">
							<span class="card-title">{{ $object -> title }} ({{$object -> price}})</span>
						</div>
						<div class="card-action">
							<a href="/area51/dash/edit/{{ $object -> id }}">Edit</a>
							<a class="red-text" href="#!" onclick="__del({{ $object -> id }});">Delete</a>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection

		@section('js')
			var __del = function (id)
			{
				if(confirm('Are you sure you want to delete this product?'))
					window.location = '/area51/dash/delete/'+id;
			}

			$(document).ready(function() {
				$('.collapsible').collapsible();
			});
		@endsection
	</body>
</html>
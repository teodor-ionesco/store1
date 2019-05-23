<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	</head>
	<body>
		<header>
		  <nav>
		    <div class="nav-wrapper">
		      <a href="/" class="brand-logo">Homepage</a>
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		        <li><a href="logout">Logout</a></li>
		      </ul>
		    </div>
		  </nav>
		</header>
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
							<span>Price:&nbsp;</span>
							<input type="text" name="price">
						</div>
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
			<div class="row">
				@foreach($PRODUCTS as $object)
						<div class="col l4 m6 s12">
							<div class="card">
								<div class="card-image">
									<img src="/static/{{ $object -> fname}}">
									<span class="card-title">{{ $object -> title }}</span>
								</div>
								<div class="card-action">
									<a href="/area51/dash/edit/{{ $object -> id }}">Edit</a>
								</div>
							</div>
						</div>
				@endforeach
			</div>

		</div>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.collapsible').collapsible();

				@if(!empty($MESSAGE))
					M.Toast($MESSAGE);
				@endif
			});
		</script>
	</body>
</html>
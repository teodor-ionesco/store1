@extends('global')

@section('title') Title here @endsection
@section('style')
	.__wall2 .__welcome {
		font-weight: 100;
		font-size: 60px;
		color: white;
		margin-top: 15px;
	}

	.__wall2 .__welcome_med 
	{
		font-weight: 100;
		font-size: 54px;
		color: white;
		margin-top: 15px;
	}

	.__wall2 .__welcome_small
	{
		font-weight: 100;
		font-size: 45px;
		color: white;
		margin-top: 15px;
	}

	.__facebook {
		width: 100%;
		background-color: #0b0b96b3;
		color: white;
		text-align: center;
		cursor: pointer;
		font-weight: 100;
		height: 30px;
		margin: 7px;
	}

	.__facebook span {
		top: 10%;
		position: relative;
	}

	.__mywork {
		margin: 11px;
		margin-right: 13px;
		margin-bottom: 55px;
	}

	.__mywork .btn-floating {
		background-color: #c5005a;
	}

	.__mywork_mobile .btn-floating {
		background-color: #c5005a;
	}

	.__mywork .__my_work 
	{
		font-weight: 100;
		font-size: 50px;
		margin-top: -10px;
		margin-left: 8px;
		margin-bottom: 20px;
	}

	.__mywork_mobile .__my_work {
		font-size: 40px;
		font-weight: 100;
		text-align: center;
	}

	.__contact 
	{
		text-align: center; 
		font-size: 50px;
		margin-top: 20px;
	}

	.__contact a
	{
		color: inherit !important;
		margin: 5px;
	}

	.__contact a:hover
	{
		color: grey !important;
	}

	.__contact a:active {
		color: grey !important;
	}
@endsection

@section('main')
	<!-- giant cover -->
	@section('cover')
		<div class="__welcome hide-on-med-and-down">
			Hi! 
			<br>
			Check out my paintings!
		</div>
		<div class="__welcome_med hide-on-small-only hide-on-large-only">
			Hi! 
			<br>
			Check out my paintings!
		</div>
		<div class="__welcome_small hide-on-med-and-up">
			Hi! 
			<br>
			Check out my paintings!
		</div>
	@endsection

	<div class="container">
		<!-- welcome -->
		<div class="row" style="margin-top: 40px;">
			<!-- about me -->
			<div id="about_me" name="about_me"></div>
			<div class="col l6 m6 s12">
				<!-- desktop -->
		        <div style="margin-right: 20px;" class="card-panel grey lighten-5 z-depth-1 hoverable hide-on-small-only">
		          <div class="row valign-wrapper">
		            <div class="col s12">
		            	<div style="font-size: 29px; font-weight: 100">About me</div>
		            	<br>
		            	<div style="font-size: 22px; font-weight: 100">
		            		Hi! I'm Ioana. 
		            		I recently discovered painting is my meditation, 
		            		it would mean a lot if you apreciated my work and wanted to have it ❤
		            		<br>
		            		<br>
		            		If you want to, I can also paint on order.
		            		Simply hop to <a href="#footer">contact section</a> and send me a message.
		            	</div>
		            </div>
		          </div>
		        </div>
		        <!-- mobile -->
		     	<div class="card-panel grey lighten-5 z-depth-1 hoverable hide-on-med-and-up">
		          <div class="row valign-wrapper">
		            <div class="col s12">
		            	<div style="font-size: 29px; font-weight: 100">About me</div>
		            	<br>
		            	<div style="font-size: 22px; font-weight: 100">
		            		Hi! I'm Ioana. 
		            		I recently discovered painting is my meditation, 
		            		it would mean a lot if you apreciated my work and wanted to have it ❤
		            		<br>
		            		<br>
		            		If you want to, I can also paint on order.
		            		Simply hop to <a href="#footer">contact section</a> and send me a message.
		            	</div>
		            </div>
		          </div>
		        </div>
			</div>


			<!-- contact -->
			<div class="col l6 m6 s12">
				<!-- desktop -->
		        <div style="margin-left: 20px;" class="card-panel grey lighten-5 z-depth-1 hoverable hide-on-small-only">
			        <div class="row">
			        	<div class="col">
			        		<div style="font-size: 29px; font-weight: 100; margin-bottom: 25px;">My latest painting</div>
							<img style="max-height: 200px;" class="responsive-img materialboxed" src="/static/{{$PRODUCTS -> last() -> fname }}">
			        	</div>
			        </div>
		    	</div>
		    	<!-- mobile -->
		        <div class="card-panel grey lighten-5 z-depth-1 hoverable hide-on-med-and-up">
			        <div class="row">
			        	<div class="col">
			        		<div style="font-size: 29px; font-weight: 100; margin-bottom: 25px;">My latest painting</div>
							<img style="max-height: 200px;" class="responsive-img materialboxed" src="/static/{{$PRODUCTS -> last() -> fname }}">
			        	</div>
			        </div>
		    	</div>
			</div>
		</div>

		<!-- products card-->
		<div id="my_work" name="my_work"></div>
		<div class="__mywork card-panel grey lighten-5 z-depth-1 hide-on-small-only">
			<div class="__my_work">My work</div>
			<div class="row">
				@foreach($PRODUCTS as $object)
				    <div class="col s12 m4 l4 ">
				      <div class="card hoverable">
				        <div class="card-image ">
				          <img class="responsive-img materialboxed" src="/static/{{$object -> fname }}">
				          <a class="btn-floating halfway-fab waves-effect waves-light" title="Add this product to your cart">
				          	<i class="material-icons">add_shopping_cart</i>
				          </a>
				        </div>
				        <div class="card-content">
				        	<span class="card-title">{{$object -> title}}</span>
				        	({{ $object -> price }})
				        </div>
				      </div>
				    </div>
				@endforeach
			</div>
		</div>

		<div class="__mywork_mobile hide-on-med-and-up">
			<div class="row">
				<div class="__my_work">My work</div>
				@foreach($PRODUCTS as $object)
				    <div class="col s12 m4 l4 ">
				      <div class="card hoverable">
				        <div class="card-image ">
				          <img class="responsive-img materialboxed" src="/static/{{$object -> fname }}">
				          <a class="btn-floating halfway-fab waves-effect waves-light" title="Add this product to your cart">
				          	<i class="material-icons">add_shopping_cart</i>
				          </a>
				        </div>
				        <div class="card-content">
				        	<span class="card-title">{{$object -> title}}</span>
				        	({{ $object -> price }})
				        </div>
				      </div>
				    </div>
				@endforeach
			</div>
		</div>
	</div>
@endsection
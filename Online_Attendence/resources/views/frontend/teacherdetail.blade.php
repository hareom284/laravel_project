@extends('frontendtemplate')
@section('content')
	<div class="container">
		<div class="card detail">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						
						  <div class="tab-pane active" id="pic-1"><img src="{{asset($teachers->profile)}}" /></div>
						 <!--  <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div> -->
						</div>
												
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">teacher detail</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<!-- <span class="review-no">41 reviews</span> -->
						</div>
						<p class="product-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam nisi possimus quod sunt unde vitae minus illum perspiciatis ratione incidunt atque voluptatum, animi! Iusto, deleniti voluptatum quos eius minus veniam?</p>
						<h4 class="price">Name: <span>{{$teachers->user->name}}</span></h4>
						<h5 class="price">Phone: <span>{{$teachers->phone_no}}</span></h5>
						<h5 class="price">Phone: <span>{{$teachers->user->email}}</span></h5>
						<h5 class="price">Degree: <span>{{$teachers->degree}}</span></h5>
						<h5 class="price">Gender: <span>{{$teachers->gender}}</span></h5>

						<!-- <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						<h5 class="sizes">sizes:
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5>
						<h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
						<div class="action">
							<button class="add-to-cart btn btn-default" type="button">add to cart</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
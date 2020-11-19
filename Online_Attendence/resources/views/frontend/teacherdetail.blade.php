@extends('frontendtemplate')
@section('content')

	<div class="container">
		<div class="card detail">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						
						  <div class="tab-pane active" id="pic-1"><img src="{{asset($teachers->profile)}}" /></div>
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
						<p class="product-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam nisi possimus quod sunt unde vitae minus illum perspiciatis ratione incidunt atque voluptatum, animi! Iusto, deleniti voluptatum quos eius minus veniam?</p>
						<h4 class="price">Name: <span>{{$teachers->user->name}}</span></h4>
						<h5 class="price">Phone: <span>{{$teachers->phone_no}}</span></h5>
						<h5 class="price">Phone: <span>{{$teachers->user->email}}</span></h5>
						<h5 class="price">Degree: <span>{{$teachers->degree}}</span></h5>
						<h5 class="price">Gender: <span>{{$teachers->gender}}</span></h5>

					
				</div>					

					</div>
											
				</div>
				
			</div>
		</div>
	</div>


@endsection
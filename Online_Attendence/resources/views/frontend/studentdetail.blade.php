@extends('frontendtemplate')
@section('content')
	<div class="container">
		<div class="card detail">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="{{asset('my_asset/images/t1.jpg')}}" /></div>
						</div>
												
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">student info</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p class="product-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam nisi possimus quod sunt unde vitae minus illum perspiciatis ratione incidunt atque voluptatum, animi! Iusto, deleniti voluptatum quos eius minus veniam?</p>
						<h4 class="price">Name: <span>Mrs.Kyaw Zin</span></h4>
						<h5 class="price">Phone: <span>09787788471</span></h5>
						<h5 class="price">Degree: <span>BE.IT</span></h5>
						<h5 class="price">Gender: <span>Male</span></h5>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

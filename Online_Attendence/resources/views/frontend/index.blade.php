@extends('frontendtemplate')
@section('content')

<div class="container-fluid">
	<h3 class="text-center mt-5">Available Course</h3>
	<hr class="hr">
		<div class="row mx-3 my-5">
			<div class="col-lg-3 col-md-6 col-sm-12 mt-5">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="{{asset('my_asset/images/php.png')}}">
					<div class="card-body">
						<h5 class="card-title">PHP Developer Training</h5>
						<p class="card-text">A hamburger is a sandwich consisting of one or more cooked patties of ground meat, usually beef, placed inside a sliced bread.</p>
						<a href="#" class="btn btn-success mt-3 mx-5">Find More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mt-5">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="{{asset('my_asset/images/android.png')}}">
					<div class="card-body">
						<h5 class="card-title">Android Developer Training</h5>
						<p class="card-text">Potato chips, or crisps, are thin slices of potato that have been either deep fried or baked until crunchy. They are commonly.</p>
						<a href="#" class="btn btn-success mt-3 mx-5">Find More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mt-5">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="{{asset('my_asset/images/network.jpg')}}">
					<div class="card-body">
						<h5 class="card-title">Networking Engineer Training</h5>
						<p class="card-text">Southern fried chicken, also known simply as fried chicken, is a dish consisting of chicken pieces</p>
						<a href="#" class="btn btn-success mt-3 mx-5">Find More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mt-5">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="{{asset('my_asset/images/java.png')}}">
					<div class="card-body">
						<h5 class="card-title">Java Programming Training</h5>
						<p class="card-text">Pizza is a savory dish of Italian origin consisting of a usually round, flattened base of leavened wheat-based dough topped with.</p>
						<a href="#" class="btn btn-success mt-3 mx-5">Find More</a>
					</div>
				</div>
			</div>
		</div>
</div>
<!-- <div class="container">
	<h3 class="text-center">Our Teachers</h3>
	<hr class="hr">
		<div class="row teacher my-1">
			<div class="col-lg-4 col-md-6">
				<a href=""><img class="" src="{{asset('my_asset/images/t1.jpg')}}"></a>
			</div>
			<div class="overlay">
				 <div class="text">Hello World</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<a href=""><img src="{{asset('my_asset/images/t2.jpg')}}"></a>
			</div>
			<div class="col-lg-4 col-md-6">
				<a href=""><img src="{{asset('my_asset/images/t3.jpg')}}"></a>
			</div>
			<div class="col-lg-4 col-md-6">
				<a href=""><img src="{{asset('my_asset/images/t4.jpg')}}"></a>
			</div>
		</div>
</div> -->
<div class="container">
  <img src="{{asset('my_asset/images/t1.jpg')}}" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Hello World</div>
  </div>
</div>

@endsection
@extends('frontendtemplate')
@section('content')

<div class="container-fluid">
	<h3 class="text-center mt-5">Available Course</h3>
	<hr class="hr">
		<div class="row mx-3 my-5">
			@foreach($courses as $course)
			<div class="col-lg-3 col-md-6 col-sm-12 mt-5">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="{{asset($course->photo)}}" width="200px" height="170px">
					<div class="card-body">
						<h5 class="card-title">{{$course->name}}</h5>
						<p class="card-text">{{$course->description}}</p>
						<a href="#" class="btn btn-success mt-3 mx-5">Find More</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
</div>
<!--header-->
<div class="content">
	<!--team-->
	<div class="team">
		<div class="container-fluid" style="background-color: #64FFDA;">
			<h3 class="text-center">Our Teachers</h3>
			<hr class="hr">
			<ul class="ch-grid">
			@foreach($teachers as $teacher)
				<li>
					<div class="ch-item">				
						<div class="ch-info">

							<div class="ch-info-front ch-img-1"><img src="{{asset($teacher->profile)}}"></div>

							<div class="ch-info-front ch-img-1"><img src="{{asset($teacher->profile)}}" alt=""></div>

							<div class="ch-info-back">
								<h4>{{$teacher->user->name}}</h4>
								<p>by {{$teacher->user->name}} <a href="{{route('teacherdetail',$teacher->id)}}">View Profile</a></p>
							</div>	
						</div>
					</div>
				</li>
			@endforeach
			</ul>
		
		</div>
	</div>
</div>
@endsection
@extends('base')
<link rel="stylesheet" type="text/css" href="css/style.css">
@section('sec1')
<div class="sec1">
	<div class="overlay"></div>
		<div class="circle">
			<img src="img/me.jpg">
		</div>
		<div class="majid">
		<h1 class="text-center">Luthfullah hil Majid</h1>
		<h5 class="text-light mb-4">Expert on HTML, CSS, Bootstrap,PHP, Laravel & Wordpress</h5>
		<a class="col-md text-danger font-weight-bold btn btn-warning" href=" {{url('https://www.linkedin.com/in/luthfullah-hil-majid-963993203/')}} ">Contact me</a>
	</div>
	
	
</div>
@endsection

@section('sec2')
<div class="container mt-5 p-3 mb-4">
	<div class="row">
		<div class="col-sm-6" >
			<div class="bdr">
				<img src="img/about.png" >
			</div>
		</div>

		<div class="col-sm-6 ">
			<h3>About Me</h3>
			<div class="underline mt-2"></div>
			
		<p class="mt-3 justify-content center">I'm a creative Web Designer and have completed my graduation in computer science. I came to this profession out of interest in web design. I am proficient in Wordpress. Also specializes in HTML/HTML5, CSS, Bootstrap, Elementor, Elementor Pro and Woocommerce. Generally, I have huge interested of web design. So, I feel enjoy making of web site. Client satisfaction is my main goal. </p>
				
			
		</div>
</div>
</div>
@endsection

@section('sec3')
<div class="container-fluid mb-4" id="sec3">
	<div class="container">
		<h3 class="text-center pt-3">Designing Skills</h3>
	<div class="row text-center p-3">
		<div class="col-sm-4 p-3">
			<div class="card bg-dark">
				<i class="fas fa-laptop-code text-warning"></i>
				<h5 class="text-warning">Web design</h5>
				<p class="text-light p-4">
					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
				</p>
			</div>
		</div>
		<div class="col-sm-4 p-3">
			<div class="card bg-dark">
				<i class="fab fa-laravel text-warning"></i>
				<h5 class="text-warning">Web develop</h5>
				<p class="text-light p-4">
					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
				</p>
			</div>
		</div>
		<div class="col-sm-4 p-3">
			<div class="card bg-dark">
				<i class="fab fa-wordpress-simple text-warning"></i>
				<h5 class="text-warning">Wordpress</h5>
				<p class="text-light p-4">
					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
				</p>
			</div>
		</div>
	</div>
	</div>
</div>
@endsection

@section('sec4')
<div class="sec4 bg-dark p-5 mb-4">
	<h4 class="text-center text-light">If you have any project, you can contact me</h4>
	<a href="#" class="btn btn-warning text-center mt-2"> Click it</a>
	
</div>
@endsection

@section('sec5')
<div class="container mt-5 mb-5">
	<h3 class="text-center mb-5">Projects</h3>
	<div class="divider text-center"></div>
	<div class="row">
		<div class="col-sm-4">
			<img src="img/project3.png" alt="Wordpress" style="width:350px; height:450px">
		</div>

		<div class="col-sm-4">
			<img src="img/projec1.png" alt="esms" style="width: 350px; height: 450px;">
		</div>

		<div class="col-sm-4">
			<img src="img/project2.png" alt="medifall" style="width:350px; height:450px;">
		</div>
		
	</div>
	
</div>
@endsection

@section('footer')
<div class="container-fluid bg-dark p-4">
	<h6 class="text-center text-warning">Majid's Portfolio &copy;2021</h6>
</div>
@endsection
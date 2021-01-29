{{--
  Template Name: front page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
<!--     @include('partials.content-page') -->
<style>
.hero-home {
	background: #052649;
	height: 70vh;
	clear: both;
	padding-top: 3rem;
}
.hero-home-r {
	width: 35%;
	float: left;
	margin-left: 10%;
}
.hero-home-r h1 {
	color: #1F487D;
	text-transform: uppercase;
	font-size: 2rem;
	padding-top: 2rem;
	padding-bottom: 2rem;
}
.hero-home-l {
	width: 55%;
	float: right;
	padding: 5rem;
}
.hero-home-l h2 {
	color: #fff;
	text-align: right;
	font-size: 3rem;
}
.hm-section-5 img {
    max-height: 260px;
    margin-top: -15px;
}
.hm-section-4 h5 {
	font-size: 2rem;
}
.hm-section-6 {
	color: #fff;
}
main {
	background: #fff;
}
</style>
<div class="hero-home">
	<div class="hero-home-r">
		<h1>A well-oiled, <br />healthcare-centered,<br /> digitally-calibrated,<br/>data-fueled,<br />performance-driven, <br />marketing machine.</h1>
		<img class="img-fluid" src="http://localhost:8888/hss/wp-content/uploads/2021/01/home-hero-bg2.jpg" />
	</div>
	<div class="hero-home-l" style="background: url('http://localhost:8888/hss/wp-content/uploads/2021/01/home-hero-bg1-copy.jpg'); background-size: cover; background-repeat: no-repeat;">
		<h2>
				Set Your<br /> Marketing to<br /> Performance <br />Mode 
				</h2>
					<p class="text-left">Founded in 2006, Healthcare Success is a respected brand performance marketing agency focused on healthcare and recognized as a thought-leader in the industry. Our clients trust us to develop and build their brands while planning, creating, managing and optimizing campaigns to scale new customer acquisition, enhance relationships and retention, and maximize media efficiencies. </p>
					<p class="text-left"><strong>We work across all healthcare verticals.</strong></p>
	</div>
</div>
<div style="clear: both; height: 10vh;"></div>
<!--
<div class="home-hero">
	<div class="container-fluid pt-5">
		<div class="row d-flex justify-content-end">			
			<div class="col-12 col-lg-5 mr-0 pr-0 hero-left">
				<h1>A well-oiled, <br />healthcare-centered,<br /> digitally-calibrated,<br/>data-fueled,<br />performance-driven, <br />marketing machine.</h1>
				<img class="img-fluid" src="http://localhost:8888/hss/wp-content/uploads/2021/01/home-hero-bg2.jpg" />
			</div>
			<div class="col-12 col-lg-6 text-right p-5 hero-right" style="background: url('http://localhost:8888/hss/wp-content/uploads/2021/01/home-hero-bg1-copy.jpg'); background-size: contain; background-repeat: no-repeat;">
				<h2>
				Set Your<br /> Marketing to<br /> Performance <br />Mode 
				</h2>
					<p class="text-left">Founded in 2006, Healthcare Success is a respected brand performance marketing agency focused on healthcare and recognized as a thought-leader in the industry. Our clients trust us to develop and build their brands while planning, creating, managing and optimizing campaigns to scale new customer acquisition, enhance relationships and retention, and maximize media efficiencies. </p>
					<p class="text-left"><strong>We work across all healthcare verticals.</strong></p>
			</div>	
		</div>
	</div>			
</div>	
-->
<main>
	<div class="container mb-5">	
		<div class="row text-center hm-section-1">
			<div class="col-12">
				<h2>We have what you’re looking for. And more.</h2>
			</div>
		</div>
		<div class="row mt-4 hm-section-2">
			<div class="col">
				<img class="img-fluid" src="/wp-content/uploads/2021/01/plus-1.svg" />
				<p>Digital<br />Marketing</p>
			</div>
			<div class="col">
				<img class="img-fluid" src="/wp-content/uploads/2021/01/plus-1.svg" />
				<p>Branding</p>
			</div>
			<div class="col">
				<img class="img-fluid" src="/wp-content/uploads/2021/01/plus-1.svg" />
				<p>Advertising</p>
			</div>
			<div class="col">
				<img class="img-fluid" src="/wp-content/uploads/2021/01/plus-1.svg" />
				<p>Doctor Referral<br />Marketing</p>
			</div>
			<div class="col">
				<img class="img-fluid" src="/wp-content/uploads/2021/01/plus-1.svg" />
				<p>Staff Training<br />& Consultation</p>
			</div>												
		</div>
	</div>
	<div class="container-fluid">
		<div class="row text-left hm-section-3 align-items-center">
			<div class="col-12 col-lg-4 px-5 left-box">
				<h4>Marketing <br />that sets <br />us apart. <br />And you.</h4>
				<a class="btn btn-b-green">
					Learn More >
				</a>
			</div>
			<div class="col-12 col-lg-8 px-5 right-box">
				<ul>
					<li>Digital-first marketing expertise</li>
					<li>Deep healthcare knowledge</li>
					<li>Performance-driven, results-focused</li>
					<li>B2B marketing to doctors</li>
					<li>B2C marketing to patients and consumers</li>
					<li>Integrated creative, branding, and content studio</li>
					<li>Media strategy, planning and buying</li>
				</ul>
			</div>			
		</div>	
		<div class="row text-center align-items-center pt-5 pb-5 hm-section-4">
			<div class="col-12 col-lg-10 offset-lg-1">
				<h5>Expertise-forward.</h5>
				<p>We have a deeper expertise than you’d expect from most partners with experience spanning the healthcare ecosystem across highly regulated and controlled industries. Plus, we understand the media landscape, with its restrictions and opportunities. There isn’t a healthcare acronym we haven’t seen or a specialty too complicated that we can’t simplify and market effectively. <strong>WE WORK WITH:</strong></p>
			</div>	
		</div>
		<div class="row text-center align-items-center pb-5 hm-section-5">
			<div class="col-2">
				<img class="img-responsive" src="http://localhost:8888/hss/wp-content/uploads/2021/01/left-bracket.svg" />
			</div>
			<div class="col-4">
				<ul>
					<li>Multi-location Practices</li>
					<li>Hospitals</li>
					<li>Health Systems</li>
					<li>Addiction Centers</li>
					<li>Long-term Care</li>
					<li>Vein Clinics</li>
					<li>Fertility Centers</li> 
				</ul>
			</div>
			<div class="col-4">
				<ul>
					<li>Health Plans</li>
					<li>Pharma</li>
					<li>Nutraceuticals</li>
					<li>Medical Device</li>
					<li>Healthcare Associations</li>
					<li>Consumer Wellness</li>
				</ul> 
			</div>				
			<div class="col-2">
				<img class="img-responsive" src="http://localhost:8888/hss/wp-content/uploads/2021/01/right-bracket.svg" />			
			</div>			
		</div>
		<div class="row text-left hm-section-6">
			<div class="col-12 col-lg-6">
				<p>“We can talk to a nephrology group, orthopedic group, addiction center, and psychologists in the same day. Our depth of healthcare and digital knowledge is unique. It delivers results for our clients.” - SG</p>
			</div>
			<div class="col-12 col-lg-6">
				
			</div>			
		</div>						
	</div>
</main>
  @endwhile
@endsection
<style>
	body.blog {
		background: #efefed;
	}
	@media (min-width: 1200px) {
		.container {
		    max-width: 1275px;
		}		
	}
	main {
		background: #efefed;		
		padding: 2rem 0;
	}
	h1 {
		color: #54544C;
	}
	.blog-post-container {
		margin-bottom: 100px;
	}
	@media (min-width: 992px) {
		.blog-post-container {
			margin-bottom: 0;
		}	
	}
	.blog-post-container a {
		color: #212529;
	}
	.blog-bg {
		width: 100%;
		height: 550px;
		position: relative;
/* 		height: 100%; */
		z-index: 5;
		background-repeat: no-repeat !important;
		background-size: cover !important;		
	}
	.blog-content {
	    background: rgb(255, 255, 255); /* Fallback for older browsers without RGBA-support */
	    background: rgba(255, 255, 255, 0.85);
		padding: 5%;
		width: 75%;		
		z-index: 10;
		margin: 0 auto;		
		min-height: 350px;
	    position: absolute;
	    bottom: -5px;
		left: 0; 
		right: 0; 
		margin-left: auto; 
		margin-right: auto;  		
	}
	.blog-content h2 {
	    font-size: 1.3rem;
	    font-weight: 600;
	    color: #54544C;
	    line-height: 1.5;
	}	
	.blog-content p {
		font-weight: 300;
		line-height: 1.5;
		font-size: 1rem;
		color: #54544C;
	}		
	.blog-content p.blog-cat-title {
		text-align: center;
	}
	a.btn.blog-btn {
		color: #D1E234;
	    text-transform: uppercase;
	    font-weight: 500;
	    padding: 0.5rem 2.5rem;
	    border-radius: 0;
		background: #99998F;
	}
	.blog-hero {
		background: #fff;
	}
	.blog-content-cat {
		background: #fff;
		width: 100%;
	    position: absolute;
	    bottom: -60px;
		left: 0; 
		right: 0; 
		margin-left: auto; 
		margin-right: auto;  
		text-align: center;	
		width: 75%;
		z-index: 12;
		padding: 1rem 0;
/* 		margin-bottom: 100px; */
	}
	p.blog-cat-title {
		margin-bottom: 0;
		color: #54544C;
		font-weight: 800;
	}
	.blog-hero h1 {
		color: #1F487D;
		font-size: 3.8rem;		
	}
	.blog-hero p {
		font-size: 1.2rem;
		color: #54544C;
		font-weight: 300;
		line-height: 1.8;
	}
	.second-blog-row {
		margin-top: 0;
	}
	@media (min-width: 992px) { 
		.second-blog-row {
			margin-top: 150px;
		}		
	}
	.blog-cta {
		margin-top: 0;
	}
	@media (min-width: 992px) {
		.blog-cta {
		    margin-top: 100px;
		    margin-bottom: 50px;
		}		
	}
	.blog-cta img {
		max-height: 150px;
	}	
	.blog-cta h2 {
		color: #54544C;
		font-weight: 600;
	}
	
	/* Blog page single styles */
	h1.entry-title {
		color: #1F487D;
		font-size: 4rem;
		text-align: right;
	}
	time.updated {
		display: none;
	}
	p.byline.author.vcard {
	    text-align: right;
	}
</style>
@if (is_home( ))
<div class="blog-hero">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-md-4">
				<img class="img-fluid" src="/wp-content/uploads/2021/01/a85f98c312973642e580c6131f875a6a.png" />
			</div>
			<div class="col-12 col-md-8 px-5">
				<p class="blog-cat-title">PODCAST</p>
				<h1>The Art of Human Care</h1>
				<p>I recently had the pleasure of speaking with Dr. Hassan Tetteh, a US navy captain, associate professor of surgery of the uniformed services at the University of Health Sciences and adjunct faculty of Howard University College of Medicine. He was also a Robert Wood Johnson Health Policy Fellow from 2012 to 2013 and a visiting […]</p>
				<br />
				<a class="btn blog-btn">Read More</a>
			</div>			
		</div>
	</div>
</div>	  
@elseif (is_single())
<style>
main {
	background: #fff;		
	padding: 2rem 0;
}
header {
	background: #fff;
}
header nav ul li a {
	color: #052649;
}
@media (min-width: 1200px) {
	.container {
	    max-width: 1275px;
	    width: 75%;
	}	
}
</style>
@endif
@extends('frontpage')
@section('content')

	<div class="top-header">
		<div class="container">
			<div class="top-header-left">
				<ul>
					<li><a href="myaccount.html">My Account</a></li>
					<li><a href="checkout.html">Checkout</a></li>
					<div class="clearfix"> </div>
				</ul>
			</div>
			<div class="top-header-center">
				<p><span class="cart"> </span>Cart<label>$5256</label></p>
			</div>
			<div class="top-header-right">
				<ul>
					<li>
						<form>
							<input type="text">
							<input type="submit" value="" />
						</form>
						
					</li>
					<li><a href="login.html">Login</a></li>
					<li><a href="register.html">Register</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
		<!-- /top-header -->
		<!-- main-menu -->
	<div class="main-menu">
		<div class="container">
			<div class="head-nav">
				<span class="menu"> </span>
				<ul>
					<li class="active"><a href="index.html">Home</a></li>
					<li><a href="products.html">products</a></li>
					<li><a href="about.html">about</a></li>
					<li><a href="contact.html">Contact</a></li>
					<div class="clearfix"> </div>
				</ul>
			</div>	
			<!-- script-for-nav -->
			<script>
				$( "span.menu" ).click(function() {
				  $( ".head-nav ul" ).slideToggle(300, function() {
					// Animation complete.
				  });
				});
			</script>
			<!-- script-for-nav -->

			<!-- logo -->
			<div class="logo">
				<a href="index.html"><img class="align-middle" src="{{asset('cake/images/logo.png')}}" title="Sweetcake" /></a>
			</div>
				<!-- logo -->
		</div>
	</div>
	<!-- /main-menu -->
		<!-- banner -->
	<div class="container">
		<div class="img-slider">
				<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			    <div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img  src="images/slide.jpg" class="img-responsive" alt="">
			          <div class="slider-caption">
			          	 <div class="slider-caption-left text-center">
			          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
			          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
			          	 	<a class="buy-btn" href="#">Buy Now</a>
			          	 </div>
			          	  <div class="slider-caption-right">
			          	  	<a href="#"><img src="images/iteam.png" class="img-responsive" title="name" /></a>
			          	  </div>
			          	  <div class="clearfix"> </div>
			          </div>
			           <!-- share-on -->
			          <div class="share-on">
			          	<div class="share-on-grid">
			          		<div class="share-on-grid-left">
			          			<h3>Share On</h3>
			          		</div>
			          		<div class="share-on-grid-right">
			          			<a href="#"><span class="facebook"> </span></a>
			          			<a href="#"><span class="twitter"> </span></a>
			          			<div class="clearfix"> </div>
			          		</div>
			          		<div class="clearfix"> </div>
			          	</div>
			          	<div class="clearfix"> </div>
			          </div>
			          <!-- share-on -->
			        </li>
			         <li>
			          <img  src="images/slide.jpg" class="img-responsive" alt="">
			          <div class="slider-caption">
			          	 <div class="slider-caption-left text-center">
			          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
			          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
			          	 	<a class="buy-btn" href="#">Buy Now</a>
			          	 </div>
			          	  <div class="slider-caption-right">
			          	  	<a href="#"><img src="images/iteam.png" class="img-responsive" title="name" /></a>
			          	  </div>
			          	  <div class="clearfix"> </div>
			          </div>
			          <!-- share-on -->
			          <div class="share-on">
			          	<div class="share-on-grid">
			          		<div class="share-on-grid-left">
			          			<h3>Share On</h3>
			          		</div>
			          		<div class="share-on-grid-right">
			          			<a href="#"><span class="facebook"> </span></a>
			          			<a href="#"><span class="twitter"> </span></a>
			          			<div class="clearfix"> </div>
			          		</div>
			          		<div class="clearfix"> </div>
			          	</div>
			          	<div class="clearfix"> </div>
			          </div>
			          <!-- share-on -->
			        </li>
			        <li>
			          <img src="images/slide.jpg" class="img-responsive" alt="">
			           <div class="slider-caption">
			          	 <div class="slider-caption-left text-center">
			          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
			          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
			          	 	<a class="buy-btn" href="#">Buy Now</a>
			          	 </div>
			          	  <div class="slider-caption-right">
			          	  	<a href="#"><img src="images/iteam.png" class="img-responsive" title="name" /></a>
			          	  </div>
			          	  <div class="clearfix"> </div>
			          </div>
			           <!-- share-on -->
			          <div class="share-on">
			          	<div class="share-on-grid">
			          		<div class="share-on-grid-left">
			          			<h3>Share On</h3>
			          		</div>
			          		<div class="share-on-grid-right">
			          			<a href="#"><span class="facebook"> </span></a>
			          			<a href="#"><span class="twitter"> </span></a>
			          			<div class="clearfix"> </div>
			          		</div>
			          		<div class="clearfix"> </div>
			          	</div>
			          	<div class="clearfix"> </div>
			          </div>
			          <!-- share-on -->
			        </li>
			        <li>
			          <img src="images/slide.jpg" class="img-responsive" alt="">
			           <div class="slider-caption">
			            <div class="slider-caption-left text-center">
			          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
			          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
			          	 	<a class="buy-btn" href="#">Buy Now</a>
			          	 </div>
			          	  <div class="slider-caption-right">
			          	  	<a href="#"><img src="images/iteam.png" class="img-responsive" title="name" /></a>
			          	  </div>
			          	  <div class="clearfix"> </div>
			          </div>
			           <!-- share-on -->
			          <div class="share-on">
			          	<div class="share-on-grid">
			          		<div class="share-on-grid-left">
			          			<h3>Share On</h3>
			          		</div>
			          		<div class="share-on-grid-right">
			          			<a href="#"><span class="facebook"> </span></a>
			          			<a href="#"><span class="twitter"> </span></a>
			          			<div class="clearfix"> </div>
			          		</div>
			          		<div class="clearfix"> </div>
			          	</div>
			          	<div class="clearfix"> </div>
			          </div>
			          <!-- share-on -->
			        </li>
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
			</div>
	<!-- /banner -->
	</div>
	<!-- top-grids -->
	<div class="top-grids">
		<div class="container">
			<div class="col-md-4 top-grid">
				<div class="top-grid-head">
					<h3>OUR CAKES</h3>
				</div>
				<div class="top-grid-info">
					<img src="images/img1.jpg" class="img-responsive" title="name"/>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
					<span>$60</span>
					<div class="clearfix"> </div>
					<a class="btn" href="#">Buy Now</a>
				</div>
			</div>
			<div class="col-md-4 top-grid">
				<div class="top-grid-head">
					<h3>OUR CAKES</h3>
				</div>
				<div class="top-grid-info">
					<img src="images/img2.jpg" class="img-responsive" title="name"/>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
					<span>$80</span>
					<div class="clearfix"> </div>
					<a class="btn" href="#">Buy Now</a>
				</div>
			</div>
			<div class="col-md-4 top-grid">
				<div class="top-grid-head">
					<h3>OUR CAKES</h3>
				</div>
				<div class="top-grid-info">
					<img src="images/img3.jpg" class="img-responsive" title="name"/>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
					<span>$120</span>
					<div class="clearfix"> </div>
					<a class="btn" href="#">Buy Now</a>
				</div>
			</div>
		</div>
		<!-- top-grids-bg -->
		<div class="top-grids-bg">
			<span> </span>
		</div>
		<!-- top-grids-bg -->
	</div>
	<!-- top-grids -->
	<!-- bottom-grids -->
	<div class="bottom-grids">
		<div class="container">
			<div class="col-md-8 bottom-grid-left">
				<div class="col-md-3 bottom-grid-left-grid text-center">
					<img src="images/pic2.jpg" title="name"/>
					<h4>kids birthday cake</h4>
					<p>$40</p>
				</div>
				<div class="col-md-3 bottom-grid-left-grid text-center">
					<img src="images/pic1.jpg" title="name"/>
					<h4>kids birthday cake</h4>
					<p>$40</p>
				</div>
				<div class="col-md-3 bottom-grid-left-grid text-center">
					<img src="images/pic3.jpg" title="name"/>
					<h4>kids birthday cake</h4>
					<p>$40</p>
				</div>
				<div class="col-md-3 bottom-grid-left-grid text-center">
					<img src="images/pic4.jpg" title="name"/>
					<h4>kids birthday cake</h4>
					<p>$40</p>
				</div>
				<div class="clearfix"> </div>
				<span class="best-sale">Best sellers</span>
				<a href="#" class="order"> </a>
			</div>
			<div class="col-md-4 bottom-grid-right">
				<h3><span class="tweet"> </span> latest tweet</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
				<label>1 day ago</label>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
@endsection
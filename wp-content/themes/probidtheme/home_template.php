<?php 
/*
Template Name: Home Template
*/
get_header(); ?>
		<div class="row">
			<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#this-carousel-id" data-slide-to="0" class="active"></li>
					<li data-target="#this-carousel-id" data-slide-to="1"></li>
					<li data-target="#this-carousel-id" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
				    <div class="item active">
						<img src="<?php echo get_template_directory_uri(); ?>/images/slider1.jpg" width="1200" height="400" alt="" />
						<!--<div class="carousel-caption">
					    	<p>sample 1</p>
					    </div>-->
					</div>
					<div class="item">
					    <img src="<?php echo get_template_directory_uri(); ?>/images/slider2.jpg" width="1200" height="400" alt="" />
						<!--<div class="carousel-caption">
					        <p>sample 2</p>
					    </div>-->
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/slider3.jpg" width="1200" height="400" alt="" />
						<!--<div class="carousel-caption">
                            <p>sample 3</p>
                        </div>-->
                    </div>
                </div><!-- /.carousel-inner -->
				 <!--  Next and Previous controls below
				       href values must reference the id for this carousel
				<a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>-->
			</div><!-- /.carousel -->
		</div>
	<div class="formhome">
		<div class="formhomeinner">
			<form class="form-horizontal">
				<div class="formhomeinnertop">
					<div class="form-group">
						<div class="col-sm-12">
							<h3>be Apart of the</h3>
							<h2>revolution</h2>
						</div>
					</div>
				</div>
				<div class="formhomeinnerbottom">
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" id="firstname" placeholder="First name">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" id="lastname" placeholder="Last name">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" id="dealership" placeholder="Dealership">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="number" class="form-control" id="phonenumber" placeholder="Phone Number">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="email" class="form-control" id="emailaddress" placeholder="Email Address">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" id="address" placeholder="Address">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" id="city" placeholder="City">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" id="state" placeholder="State">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="number" class="form-control" id="zip" placeholder="Zip">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<div class="checkbox">
								<label>
									<input type="checkbox"> Accept Terms And Conditions
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12 text-center">
							<button type="submit" class="btn btn-primary btn-lg">submit</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="revolution">
			<div class="revolutionleft">
				<div class="revologo">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo-probidauto-revolution.png">
				</div>
				<div class="revocurve">
					<img src="<?php echo get_template_directory_uri(); ?>/images/arrow-leftcurve-revolution.png">
				</div>
				<div class="revoinfo">
					<h2>WE PUT DEALERSHIPS IN THE DRIVER'S SEAT WITH OUR NEW MILLENNIUM MARKETING METHODOLOGY</h2>
				</div>
				<div class="revocarman">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo-man-revolution.png">
				</div>
			</div>
			<div class="revolutionright">
				<div class="revoinfo1 pull-right">
					<h2>Get incredible benefits by getting in early<br> and securing your spot before we <span>ABOSLUTELY BLOW THE DOORS OFF.</span></h2>
				</div>
				<div class="revomobile">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo-mobile-revolution.png">
				</div>
				<div class="revoinfo2 pull-right">
					<h2>Our <span>Smart Bid Dealer Platform</span> radically changes the dealer's marketing methodologies, cost to depreciating overhead, speed to sale and other critical  improvements their far-less effective traditional marketing methologies. </h2>
				</div>
			</div>
			<div class="revolutionbottom text-center">
				<h3>This is the <span>Revolution</span> of the Car Buying Process That Your consumers Have Been Waiting For!</h3>
			</div>
	</div>
	<div class="clearfix"></div>
	<div class="benefit">
		<div class="benefittop">
			<h2>The benefits you will gain through ProBidAuto.com are UNHEARD OF and are ground breaking new methods in marketing:</h2>
		</div>
		<div class="benefitbottom">
			<ul class="double">
				<li>Increase speed to market by 100% on auction purchased cars</li>
				<li>Appeal to a more modern “instant | more choice” younger consumer	</li>
				<li>Avoid costly inventory depreciation on cars sitting on your lot</li>
				<li>Gain tools to sell to customers even if they leave your lot without buying</li>
				<li>Take advantage of incredible new and cost effective marketing methods</li>
				<li>Save thousands of dollars by collapsing the value chain like never experienced before</li>
			</ul>
			<div class="clearfix"></div>
			<div class="prerolldealer">
				<h2>Pre-Enrolled Dealers will get HUGE ADVANTAGES the minute we go LIVE!</h2>
			</div>
			<div class="clearfix"></div>
			<ul>
				<li>You will receive your 3 Months on ProBidAuto.com at no cost, plus get the advantage of being able to prepare your dealership for the big shift!</li>
				<li>We are reaching out to over 10 million car buyers with guaranteed good credit to come to ProBidAuto.com and pick their dealer! Become a	“Dealer of Choice” for consumers that are signing up through	our Intentional Marketing Campaign!	</li>
				<li>Get the advantage of our “<span class="textcapital">New Millennium Marketing Method</span>” <span>LIVE</span> Webinar series that will be ran directly by the founders to give your team an <span>UNBELIEVABLE EDGE</span> once we launch! </li>
			</ul>
			<div class="imggallery">
				<img src="<?php echo get_template_directory_uri(); ?>/images/img-gallery-1.jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/images/img-gallery-2.jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/images/img-gallery-3.jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/images/img-gallery-1.jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/images/img-gallery-2.jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/images/img-gallery-3.jpg">
			</div>
		</div>
	</div>
<?php get_footer(); ?>
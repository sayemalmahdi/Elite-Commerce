<footer class="footer footer-dark">
        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget widget-about">
	            				<img src="{{ asset('frontend')}}/assets/images/custom-logo/1-logo.png" class="footer-logo" alt="Footer Logo" width="125" height="25">

	            				<!-- <p>Learn more about our company, its mission, vision, and values. Discover how we started, our journey so far, and our commitment to providing high-quality products and exceptional customer service. </p> -->

	            				<p>Our commitment to providing high-quality products and exceptional customer service. </p>

	            				<div class="social-icons">
	            					<a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
	            					<a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
	            					<a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
	            					<a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
	            					<a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
	            				</div>
	            			</div>
	            		</div>

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">Useful Links</h4>

	            				<ul class="widget-list">	            					
	            					<li><a href="#">How to shop on Elite-Commerce</a></li>
									<li><a href="#">About Elite-Commerce</a></li>
									<li><a href="#">Contact us</a></li>	            						            					
	            					<li><a href="{{ route('register') }}">Register</a></li>
									<li><a href="#">FAQ</a></li>
	            				</ul>
	            			</div>
	            		</div>

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">Customer Service</h4>

	            				<ul class="widget-list">
	            					<li><a href="#">Payment Methods</a></li>
	            					<li><a href="#">Money-back guarantee!</a></li>
	            					<li><a href="#">Returns</a></li>
	            					<li><a href="#">Shipping</a></li>
	            					<li><a href="#">Terms and conditions</a></li>
	            					<li><a href="#">Privacy Policy</a></li>
	            				</ul>
	            			</div>
	            		</div>

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">My Account</h4>

	            				<ul class="widget-list">
	            					<li><a href="{{ route('login') }}">Sign In</a></li>
	            					<li><a href="#">View Cart</a></li>
	            					<li><a href="#">My Wishlist</a></li>
	            					<li><a href="#">Track My Order</a></li>
	            					<li><a href="#">Help</a></li>
	            				</ul>
	            			</div>
	            		</div>
	            	</div>
	            </div>
	        </div>

	        <div class="footer-bottom">
	        	<div class="container">
					<p class="footer-copyright">
						<?php
							$year = date('Y');
							$storeName = "Elite-Commerce Store. All Rights Reserved.";

							echo "Copyright © $year $storeName";
						?>
					</p>	
	        		<!-- <p class="footer-copyright">Copyright © 2023 Elite-Commerce Store. All Rights Reserved.</p> -->
					
	        		<figure class="footer-payments">
	        			<img src="{{ asset('frontend')}}/assets/images/payments.png" alt="Payment methods" width="272" height="20">
	        		</figure>
	        	</div>
	        </div>
        </footer>
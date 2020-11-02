<!-- PIZZA BANNE DETAILS -->
<section class="home_piza_banner">
	<img class="img-fluid" alt="banner" src="<?php echo base_url("assets/images/sub_banner_piza_kade.jpg"); ?>">
</section>

<section class="bright py-5">
	<div class="container">
		<div class="text-center mb-4">
			<h1>Order Details</h1>
			<p class="font-weight-light">Enter your order details & Checkout your order</p>
		</div>
		<div class="row">
			<div class="row justify-content-center">
				<div class="panel col-6">
					<section class="my-2 mx-2">
						<div class="pt-4">
							<div class="row">
								<div class="col-12">

									<form action="<?php echo base_url("checkout"); ?>" method="post">
										<div class="row mx-4">
											<div class="col-12">
												<label class="order-confirm-form-label">Name</label>
											</div>
											<div class="col-12 col-sm-6">
												<input id="first-name" name="first-name"
													   class="order-confirm-form-input" placeholder="First Name">
												<span class="error-messages mt-3"><?php echo form_error('first-name'); ?></span>
											</div>
											<div class="col-12 col-sm-6 mt-2 mt-sm-0">
												<input id="last-name" name="last-name" class="order-confirm-form-input"
													   placeholder="Last Name">
												<span class="error-messages"><?php echo form_error('last-name'); ?></span>
											</div>

										</div>

										<div class="row mt-3 mx-4">
											<div class="col-12">
												<label class="order-confirm-form-label">Telephone</label>
											</div>
											<div class="col-12">
												<input id="mobile" name="mobile"
													   class="order-confirm-form-input datepicker"
													   placeholder="Enter mobile number" type="text">
												<span class="error-messages mt-3"><?php echo form_error('mobile'); ?></span>
											</div>
										</div>

										<div class="row mt-3 mx-4">
											<div class="col-12">
												<label class="order-confirm-form-label">Deliver Address</label>
											</div>
											<div class="col-12">
												<input id="address-line-one" name="address-line-one"
													   class="order-confirm-form-input" placeholder="Address Line 1">
												<span class="error-messages mt-3"><?php echo form_error('address-line-one'); ?></span>
											</div>
											<div class="col-12 mt-2">
												<input id="address-line-two" name="address-line-two"
													   class="order-confirm-form-input" placeholder="Address Line 2">
											</div>
											<div class="col-12 col-sm-6 mt-2 pr-sm-2">
												<input id="city" name="city" class="order-confirm-form-input"
													   placeholder="City">
												<span class="error-messages mt-3"><?php echo form_error('city'); ?></span>
											</div>
											<div class="col-12 col-sm-6 mt-2 pl-sm-0">
												<input id="region" name="region" class="order-confirm-form-input"
													   placeholder="Region">
												<span class="error-messages mt-3"><?php echo form_error('region'); ?></span>
											</div>
										</div>

										<div class="col-12 mt-5 mb-3 d-flex justify-content-center">
											<button type="submit" class="btn btn-outline-success btn-lg checkout-btn">
												CHECKOUT
											</button>
										</div>
									</form>

								</div>
							</div>
						</div>
					</section>
				</div>
				<div class="col-4">

					<div class="panel summary-box">
						<div class="mt-5 mb-4 text-center">
							<h4>Order Summary</h4>
						</div>
						<section class="my-4 mx-4">

							<div class="row">
								<div class="col-md-12">
									<strong>Number of Items</strong>
									<div class="price float-right"><span><?php echo $cartCount ?></span></div>
								</div>
								<div class="col-md-12">
									<strong>Subtotal</strong>
									<div class="price float-right">
										<span>LKR </span><span><?php echo sprintf('%0.2f', $subTotal) ?></span></div>
								</div>
								<div class="col-md-12">
									<strong>Tax</strong>
									<div class="price float-right"><span>LKR </span><span>0.00</span></div>
								</div>
								<div class="col-md-12">
									<small>Deliver Charge</small>
									<div class="price float-right">
										<span><small>LKR <?php echo sprintf('%0.2f', $deliverCharge) ?></small></span>
									</div>
									<hr>
								</div>
								<div class="col-md-12">
									<strong>Total</strong>
									<div class="price float-right">
										<span>LKR </span><span><?php echo sprintf('%0.2f', $total) ?></span></div>
									<hr>
								</div>
								<div class="col-md-12 text-center mt-3 mb-4">
									<a href="<?php echo base_url(); ?>cart">
										<button type="button" class="btn btn-outline-danger btn-sm">VIEW ORDER</button>
									</a>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<!-- PIZZA BANNE DETAILS -->
<section class="home_piza_banner">
	<img class="img-fluid" alt="banner" src="<?php echo base_url("assets/images/sub_banner_piza_kade.jpg"); ?>">
</section>

<section class="bright py-5">
	<div class="container">
		<div class="text-center">
			<h1>Order Details</h1>
			<p class="font-weight-light">Enter your order details</p>
		</div>
		<div class="row">
			<div class="row justify-content-center">
				<div class="panel col-6">
					<section class="my-2 mx-2">
						<div class="pt-4">
							<div class="row">
								<div class="col-12">
									<div class="row mx-4">
										<div class="col-12">
											<label class="order-confirm-form-label">Name</label>
										</div>
										<div class="col-12 col-sm-6">
											<input class="order-confirm-form-input" placeholder="First Name">
										</div>
										<div class="col-12 col-sm-6 mt-2 mt-sm-0">
											<input class="order-confirm-form-input" placeholder="Last Name">
										</div>
									</div>

									<div class="row mt-3 mx-4">
										<div class="col-12">
											<label class="order-confirm-form-label">Telephone</label>
										</div>
										<div class="col-12">
											<input class="order-confirm-form-input datepicker"
												   placeholder="Enter mobile number" type="text"
												   id="date-picker-example">
										</div>
									</div>

									<div class="row mt-3 mx-4">
										<div class="col-12">
											<label class="order-confirm-form-label">Deliver Address</label>
										</div>
										<div class="col-12">
											<input class="order-confirm-form-input" placeholder="Address Line 1">
										</div>
										<div class="col-12 mt-2">
											<input class="order-confirm-form-input" placeholder="Address Line 2">
										</div>
										<div class="col-12 col-sm-6 mt-2 pr-sm-2">
											<input class="order-confirm-form-input" placeholder="City">
										</div>
										<div class="col-12 col-sm-6 mt-2 pl-sm-0">
											<input class="order-confirm-form-input" placeholder="Region">
										</div>
									</div>

									<div class="col-12 mt-5 mb-3 d-flex justify-content-center">
										<button type="button" class="btn btn-outline-success btn-lg checkout-btn">PLACE
											ORDER
										</button>

									</div>

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
									<strong>Subtotal</strong>
									<div class="price float-right"><span>LKR </span><span>200.00</span></div>
								</div>
								<div class="col-md-12">
									<strong>Tax</strong>
									<div class="price float-right"><span>LKR </span><span>200.00</span></div>
								</div>
								<div class="col-md-12">
									<small>Deliver Charge</small>
									<div class="price float-right"><span>-</span></div>
									<hr>
								</div>
								<div class="col-md-12">
									<strong>Total</strong>
									<div class="price float-right"><span>LKR </span><span>400.00</span></div>
									<hr>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

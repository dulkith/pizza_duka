<!-- PIZZA BANNER DETAILS -->
<section class="home_piza_banner">
	<img class="img-fluid" alt="banner" src="<?php echo base_url("assets/images/sub_banner_piza_kade.jpg"); ?>">
</section>

<section class="bright py-5">
	<div class="container">
		<div class="justify-content-center row">
			<div class="row">
				<div class="text-center">
					<div class="justify-content-center">
						<div class="thank-you-img">
							<h1 class="display-3">Thank You!</h1>
							<img class="party-image" src="<?php echo base_url("assets/images/party.png"); ?>"
								 alt="party">
						</div>
					</div>

					<p class="lead"><strong>Your order placed successfully!</strong> foods will be delivered within,</p>
					<hr>

					<div class="py-5 deliver-timer">
						<div class="col-lg-9 mx-auto">
							<div class="text-white bg-deliver-timer-gradient p-2 text-center mb-4">
								<div id="clock"></div>
							</div>
						</div>
					</div>

					<p>
						Having trouble? <a href="">Contact us</a>
					</p>
					<p class="lead">
						<a class="btn btn-success btn-sm" href="<?php echo base_url(); ?>menu" role="button">Continue
							to Menu</a>
					</p>
				</div>
			</div>
		</div>

	</div>
</section>

<script>

	// get order data
	const orderCreateDateTime = <?php echo json_encode($orderData); ?>;
	const deliverTime = new Date(orderCreateDateTime.created);
	deliverTime.setMinutes(deliverTime.getMinutes() + 30);
	// display contdown
	$('#clock').countdown(deliverTime).on('update.countdown', function (event) {
		$(this).html(event.strftime('<div class="row thank-you-img">' +
				'<div><span class="clock-numbers">%M</span> Min</div>'
				+ '<div><span class="clock-numbers  ml-4">%S</span> Sec</div></div>'));
	});

</script>

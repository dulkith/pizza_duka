<!-- PIZZA BANNE DETAILS -->
<section class="home_piza_banner">
	<img class="img-fluid" alt="banner" src="<?php echo base_url("assets/images/sub_banner_piza_kade.jpg"); ?>">
</section>

<section class="bright py-5">
	<div class="container">
		<div class="text-center">
			<h1>Menu</h1>
			<p class="font-weight-light">Select your favourite one</p>
		</div>

		<section>
			<div class="container d-flex justify-content-center">
				<div class="row mt-3 text-center">
					<figure class="kade_types">
						<a href="#pizza">
							<img src="<?php echo base_url("assets/images/kade_icons/pizza.png"); ?>" width="100"
								 height="100"
								 alt="my img"/>
						</a>
						<figcaption class="kade_types_captions"> PIZZA</figcaption>
					</figure>
					<figure class="kade_types">
						<a href="#pasta">
							<img src="<?php echo base_url("assets/images/kade_icons/noodlse.png"); ?>" width="100"
								 height="100"
								 alt="my img"/>
						</a>
						<figcaption class="kade_types_captions"> PASTA</figcaption>
					</figure>
					<figure class="kade_types">
						<a href="#sides">
							<img src="<?php echo base_url("assets/images/kade_icons/sides.png"); ?>" width="100"
								 height="100"
								 alt="my img"/>
						</a>
						<figcaption class="kade_types_captions"> SIDES</figcaption>
					</figure>
					<figure class="kade_types">
						<a href="#desserts">
							<img src="<?php echo base_url("assets/images/kade_icons/desserts.png"); ?>" width="100"
								 height="100"
								 alt="my img"/>
						</a>
						<figcaption class="kade_types_captions"> DESSERTS</figcaption>
					</figure>
				</div>
			</div>
		</section>

		<!-- ITEMS MENU HOME-->
		<section class="bright py-2" id="pizza">
			<div class="container mx-auto">
				<h2 class="section_heading">LOADED <span>PIZZA</span> RANGE</h2>
				<div class="row mt-3">

					<?php foreach ($items as $pizza): ?>
						<?php if ($pizza['category'] == "PIZZA"): ?>
							<article class="col-lg-4">
								<div class="pizza-box m-3 shadow">
									<div class="row">
										<div class="">
											<div class="d-flex h-1">
												<div class="mx-auto">
													<h5><?php echo $pizza['title'] ?></h5>
													<?php if ($pizza['is_new'] == 1): ?>
														<div class="newitem"><img alt=""
																				  src="<?php echo base_url("assets/images/new.png"); ?>">
														</div>
													<?php endif; ?>
													<div>
														<img class="pizza-image"
															 src="<?php echo base_url('assets/images/items_samples/' . $pizza['image']) ?>"
															 alt="a"/>
													</div>
												</div>
											</div>
											<div clas="col-sm-9">
												<div class="p-3">
													<div class="text-center">
														<p><?php echo $pizza['description'] ?></p>
														<p class="menu-price">
															R: <?php echo sprintf('%0.2f', $pizza['price'] * ($sizes[0]['price_percentage'] / 100) + $pizza['price']) ?>
															&nbsp;&nbsp;
															M: <?php echo sprintf('%0.2f', $pizza['price'] * ($sizes[1]['price_percentage'] / 100) + $pizza['price']) ?>
															&nbsp;&nbsp;
															L: <?php echo sprintf('%0.2f', $pizza['price'] * ($sizes[2]['price_percentage'] / 100) + $pizza['price']) ?>
														</p>
														<a class="order-button btn btn-main mt-1"
														   href="<?php echo site_url('/customize/' . $pizza['id']); ?>"><i
																	class="mr-2 fas fa-pizza-slice"></i>
															CUSTOMISE NOW</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</article>
						<?php endif; ?>
					<?php endforeach; ?>

				</div>
			</div>

		</section>

		<section class="bright py-3" id="pasta">
			<div class="container">
				<div class="container">
					<h2 class="section_heading">PASTA</h2>
					<div class="row mt-3">

						<?php foreach ($items as $item): ?>
							<?php if ($item['category'] == "PASTA"): ?>
								<article class="col-lg-4">
									<div class="pizza-box m-3 shadow">
										<div class="row">
											<div clas="col-sm-3">
												<div class="d-flex h-1">
													<div class="mx-auto">
														<h5><?php echo $item['title'] ?></h5>
														<?php if ($item['is_new'] == 1): ?>
															<div class="newitem"><img alt=""
																					  src="<?php echo base_url("assets/images/new.png"); ?>">
															</div>
														<?php endif; ?>
														<div>
															<img class="pizza-image"
																 src="<?php echo base_url('assets/images/items_samples/' . $item['image']) ?>"
																 alt="a"/>
														</div>
													</div>
												</div>
												<div clas="col-sm-9">
													<div class="p-3">
														<div class="text-center">
															<p><?php echo $item['description'] ?></p>
															<h3>LKR <?php echo sprintf('%0.2f', $item['price']) ?></h3>
															<a class="order-button btn btn-main mt-1"
															   href="<?php echo base_url('add-to-cart/' . $item['id']); ?>">
																<i
																		class="fas fa-shopping-basket fa-1x"></i>
																ADD TO CART</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</article>
							<?php endif; ?>
						<?php endforeach; ?>

					</div>
				</div>
		</section>


		<section class="bright py-3" id="sides">
			<div class="container">
				<div class="container">
					<h2 class="section_heading">SIDES</h2>
					<div class="row mt-3">

						<?php foreach ($items as $item): ?>
							<?php if ($item['category'] == "SIDES"): ?>
								<article class="col-lg-4">
									<div class="pizza-box m-3 shadow">
										<div class="row">
											<div clas="col-sm-3">
												<div class="d-flex h-1">
													<div class="mx-auto">
														<h5><?php echo $item['title'] ?></h5>
														<?php if ($item['is_new'] == 1): ?>
															<div class="newitem"><img alt=""
																					  src="<?php echo base_url("assets/images/new.png"); ?>">
															</div>
														<?php endif; ?>
														<div>
															<img class="pizza-image"
																 src="<?php echo base_url('assets/images/items_samples/' . $item['image']) ?>"
																 alt="a"/>
														</div>
													</div>
												</div>
												<div clas="col-sm-9">
													<div class="p-3">
														<div class="text-center">
															<p><?php echo $item['description'] ?></p>
															<h3>LKR <?php echo sprintf('%0.2f', $item['price']) ?></h3>
															<a class="order-button btn btn-main mt-1"
															   href="<?php echo base_url('add-to-cart/' . $item['id']); ?>">
																<i
																		class="fas fa-shopping-basket fa-1x"></i>
																ADD TO CART</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</article>
							<?php endif; ?>
						<?php endforeach; ?>

					</div>
				</div>
		</section>


		<section class="bright py-3" id="desserts">
			<div class="container">
				<div class="container">
					<h2 class="section_heading">DESSERTS</h2>
					<div class="row mt-3">

						<?php foreach ($items as $item): ?>
							<?php if ($item['category'] == "DESSERTS"): ?>
								<article class="col-lg-4">
									<div class="pizza-box m-3 shadow">
										<div class="row">
											<div clas="col-sm-3">
												<div class="d-flex h-1">
													<div class="mx-auto">
														<h5><?php echo $item['title'] ?></h5>
														<?php if ($item['is_new'] == 1): ?>
															<div class="newitem"><img alt=""
																					  src="<?php echo base_url("assets/images/new.png"); ?>">
															</div>
														<?php endif; ?>
														<div>
															<img class="pizza-image"
																 src="<?php echo base_url('assets/images/items_samples/' . $item['image']) ?>"
																 alt="a"/>
														</div>
													</div>
												</div>
												<div clas="col-sm-9">
													<div class="p-3">
														<div class="text-center">
															<p><?php echo $item['description'] ?></p>
															<h3>LKR <?php echo sprintf('%0.2f', $item['price']) ?></h3>
															<a class="order-button btn btn-main mt-1"
															   href="<?php echo base_url('add-to-cart/' . $item['id']); ?>">
																<i
																		class="fas fa-shopping-basket fa-1x"></i>
																ADD TO CART</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</article>
							<?php endif; ?>
						<?php endforeach; ?>

					</div>
				</div>
		</section>


		<section class="bright py-3">
			<div class="container">
				<div class="container">
					<h2 class="section_heading">BEVERAGES</h2>
					<div class="row mt-3">

						<?php foreach ($items as $item): ?>
							<?php if ($item['category'] == "BEVERAGES"): ?>
								<article class="col-lg-4">
									<div class="pizza-box m-3 shadow">
										<div class="row">
											<div clas="col-sm-3">
												<div class="d-flex h-1">
													<div class="mx-auto">
														<h5><?php echo $item['title'] ?></h5>
														<?php if ($item['is_new'] == 1): ?>
															<div class="newitem"><img alt=""
																					  src="<?php echo base_url("assets/images/new.png"); ?>">
															</div>
														<?php endif; ?>
														<div>
															<img class="pizza-image"
																 src="<?php echo base_url('assets/images/items_samples/' . $item['image']) ?>"
																 alt="a"/>
														</div>
													</div>
												</div>
												<div clas="col-sm-9">
													<div class="p-3">
														<div class="text-center">
															<p><?php echo $item['description'] ?></p>
															<h3>LKR <?php echo sprintf('%0.2f', $item['price']) ?></h3>
															<a class="order-button btn btn-main mt-1"
															   href="<?php echo base_url('add-to-cart/' . $item['id']); ?>">
																<i
																		class="fas fa-shopping-basket fa-1x"></i>
																ADD TO CART</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</article>
							<?php endif; ?>
						<?php endforeach; ?>

					</div>
				</div>
		</section>

	</div>
</section>

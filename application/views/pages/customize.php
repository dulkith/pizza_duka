<!-- PIZZA BANNE DETAILS -->
<section class="home_piza_banner">
	<img class="img-fluid" alt="banner" src="<?php echo base_url("assets/images/sub_banner_piza_kade.jpg"); ?>">
</section>

<section class="bright py-5">
	<div class="container">
		<!-- PIZZA MENU HOME-->
		<section class="bright">
			<div class="container">
				<div class="row mt-3">


					<div class="container">
						<div class="row">
							<div class="col">
								<div>
									<div class="pizzaBox text-center">
										<h4><?php echo $item['title'] ?></h4>
										<div class="customisePizzaLeftMobile">
											<div class="pizzaImg">
												<figure>
													<img class="pizza-main-customizer"
														 src="<?php echo base_url('assets/images/items_samples/' . $item['image']) ?>"
														 alt="TandooriChicken.jpg">
													<div id="upperImages">
														<!-- Load Toppings images-->
														<?php foreach ($toppings as $topping): ?>
															<img class="topins"
																 src="<?php echo base_url('assets/images/pizza_topping/topping/' . $topping['image']) ?>"
																 alt="customise-pizza-<?php echo $topping['slug'] ?>"
																 id="<?php echo $topping['slug'] ?>">
														<?php endforeach; ?>

													</div>
												</figure>
											</div>

										</div>
									</div>
								</div>
								<div class="pizzaContent text-center">
									<p><?php echo $item['description'] ?></p>
									<h5 id="pizza-prices-display"></h5>
								</div>

								<div class="panel selectToppingsBox d-flex justify-content-center">
									<div class="m-4">
										<div class="input-group">
											<div class="row text-center">
												<div class="col-xs-4 ">
													<button class="my-button plus-minus-btn"
															onclick="decrementItemCount()"><i
																class="fas fa-minus"></i></button>
													<input class="itemCounter" id="inputItemCount" disabled="disabled"
														   type=number min=1 max=20>
													<button class="my-button plus-minus-btn"
															onclick="incrementItemCount()"><i
																class="fas fa-plus"></i></button>
												</div>
												<div class="col-xs-4">
													<span id="pizza-price" class="cusPrice"></span>
												</div>

												<div class="col-xs-4 text-center ml-4">
													<a href="<?php echo base_url('add-to-cart/' . $item['id']); ?>">
														<button type="button" class="btn btn-success btn-lg">ADD TO
															CART
														</button>
													</a>
												</div>

											</div>
										</div>
									</div>
								</div>
								<p id="selectedToppings" class="mt-2"></p>

							</div>

							<div class="col">

								<div class="panel selectToppingsBox selectSizeBox">
									<div class="panelHeading text-center mt-4 mb-3">
										<h4>Select size</h4>
									</div>
									<div class="panelBody col-6 ml-3">
										<ul class="selectToppingsList">

											<div class="d-flex flex-row">
												<div class="d-flex flex-column">
													<div class="sizeCode menu-modifier" id="smallpz">
														<span class="icon-check"></span>
														<div class="row">
															<div class="col-xs-1 col-sm-4">
																<a
																		href="javascript:showhidePizzaSize('#smallpz','#mediumpz','#largepz',0);">
																	<img src="<?php echo base_url("assets/images/pizza_topping/sizes/smallpz.jpg"); ?>"
																		 width=" 40px" alt="Regular">
																</a>
															</div>
															<div class="p-2 ">
																<span>Regular</span>
															</div>
														</div>
													</div>
												</div>
												<div class="d-flex flex-column">
													<div class="sizeCode menu-modifier" id="mediumpz">
														<span class="icon-check"></span>
														<div class="row">
															<div class="col-xs-12 col-sm-4">
																<a
																		href="javascript:showhidePizzaSize('#mediumpz','#smallpz','#largepz',1);">
																	<img src="<?php echo base_url("assets/images/pizza_topping/sizes/mediumpz.jpg"); ?>"
																		 width="40px" alt="Medium">
																</a>
															</div>
															<div class="p-2 ">
																<span>Medium</span>
															</div>
														</div>
													</div>
												</div>

												<div class="d-flex flex-column">
													<div class="sizeCode menu-modifier" id="largepz">
														<span class="icon-check"></span>
														<div class="row">
															<div class="col-xs-12 col-sm-4">
																<a
																		href="javascript:showhidePizzaSize('#largepz','#smallpz','#mediumpz',2);">
																	<img src="<?php echo base_url("assets/images/pizza_topping/sizes/largepz.jpg"); ?>"
																		 width="40px" alt="Large">
																</a>
															</div>
															<div class="p-2 ">
																<span>Large</span>
															</div>
														</div>
														</a>
													</div>
												</div>
											</div>
										</ul>
									</div>
								</div>

								<div class="panel selectToppingsBox">
									<div class="panelHeading text-center mt-4 mb-3">
										<h4>Add extra toppings</h4>
									</div>
									<div class="panelBody col-6">
										<ul class="selectToppingsList">
											<div class="d-flex flex-row">

												<!-- Toppings selector icon-->
												<?php foreach ($toppings as $index => $topping): ?>
													<?php if ($index % 5 == 0): ?>
														<div class="d-flex flex-column">
													<?php endif; ?>
													<div class="p-2">
														<li id='b<?php echo $index + 1 ?>'>
															<a href="javascript:showHide('#<?php echo $topping['slug'] ?>','#b<?php echo $index + 1 ?>','<?php echo $topping['price'] ?>');">
																<img alt=""
																	 src="<?php echo base_url('assets/images/pizza_topping/icons/' . $topping['icon']) ?>">
																<span><?php echo $topping['title'] ?></span>
															</a>
														</li>
													</div>
													<?php if ($index % 5 == 4): ?>
														</div>
													<?php endif; ?>
												<?php endforeach; ?>

											</div>
										</ul>
									</div>
								</div>


							</div>
						</div>

					</div>


				</div>
			</div>

		</section>


	</div>
</section>

<!-- TOPPING BUTTON ACTIONS  -->
<script>
	// select default values
	$('#mediumpz').addClass('selected');
	$('#inputItemCount').val('1');

	// get sizes prices and item price
	const pizzaPrice = +"<?php echo $item['price'] ?>";
	const sizePrices = <?php echo json_encode($sizes); ?>;
	// get toppings data
	const allToppings = <?php echo json_encode($toppings); ?>;

	// calculate sizes price
	const regularPrice = pizzaPrice * (sizePrices[0].price_percentage / 100);
	const mediumPrice = pizzaPrice * (sizePrices[1].price_percentage / 100);
	const largePrice = pizzaPrice * (sizePrices[2].price_percentage / 100);

	// selected size and toppings
	let itemCount = 1;
	let selectedSizePrice = mediumPrice;
	let selectedSize = sizePrices[0].title;
	let appliedToppingsSlugs = [];
	let appliedToppings = '';

	// final global total
	let finalTotal = mediumPrice + pizzaPrice;
	// set prices to view
	document.getElementById("pizza-prices-display").innerHTML =
			`R: ${(regularPrice + pizzaPrice).toFixed(2)} &nbsp;&nbsp; M: ${(mediumPrice + pizzaPrice).toFixed(2)} &nbsp;&nbsp;L: ${(largePrice + pizzaPrice).toFixed(2)}`;
	// set default total
	document.getElementById("pizza-price").innerHTML = `${finalTotal.toFixed(2)}`;

	function showHide(toppingName, toppingButton, price) {
		// selection control
		$(toppingName).toggle();
		$(toppingButton).find('a').toggleClass('selected');
		// price calculation
		const slug = toppingName.substring(1);
		if (appliedToppingsSlugs.indexOf(slug) > -1) {
			// remove topping
			finalTotal = (finalTotal - Number(price));
			appliedToppingsSlugs = appliedToppingsSlugs.filter(topping => topping !== slug)
		} else {
			// add topping
			finalTotal = (finalTotal + Number(price));
			appliedToppingsSlugs.push(slug);
		}
		// set price to view
		document.getElementById("pizza-price").innerHTML = (finalTotal * itemCount).toFixed(2);
		// display selected toppings
		let selectedToppings = '';
		appliedToppingsSlugs.forEach(topping => {
			selectedToppings += topping.replace(/([A-Z])/g, " $1").split(' ').slice(1).join(' ') + '<b>(' + Number(price).toFixed(2) + ')</b>, ';
		});
		appliedToppings = selectedToppings.slice(0, -2);
		document.getElementById("selectedToppings").innerHTML = `<h6>Selected Toppings: </h6>${appliedToppings}`;
		if (appliedToppingsSlugs.length === 0)
			document.getElementById("selectedToppings").innerHTML = '';
	}

	function showhidePizzaSize(select, unselect1, unselect2, sizeIndex) {
		// button border control
		$(select).toggleClass('selected');
		$(unselect1).removeClass('selected');
		$(unselect2).removeClass('selected');
		// price calculation on change
		let pricePercentage = sizePrices[sizeIndex].price_percentage;
		const calculatedPrice = pizzaPrice * (pricePercentage / 100);

		// set view
		finalTotal = (finalTotal - selectedSizePrice) + calculatedPrice;
		selectedSize = sizePrices[sizeIndex].title;
		selectedSizePrice = calculatedPrice;
		document.getElementById("pizza-price").innerHTML = (finalTotal * itemCount).toFixed(2);
	}

	function incrementItemCount() {
		// increment item count
		document.getElementById('inputItemCount').stepUp();
		// calculate total with item count
		itemCount = document.getElementById("inputItemCount").value;
		document.getElementById("pizza-price").innerHTML = (finalTotal * itemCount).toFixed(2);

	}

	function decrementItemCount() {
		// decrement item count
		document.getElementById('inputItemCount').stepDown();
		// calculate total with item count
		itemCount = document.getElementById("inputItemCount").value;
		document.getElementById("pizza-price").innerHTML = (finalTotal * itemCount).toFixed(2);
	}
</script>

<section>
    <div class="container d-flex justify-content-center">
        <div class="row mt-3 text-center">
            <figure class="kade_types">
                <img src="<?php echo base_url("assets/images/kade_icons/pizza.png"); ?>" width="100" height="100"
                    alt="my img" />
                <figcaption class="kade_types_captions"> PIZZA </figcaption>
            </figure>
            <figure class="kade_types">
                <img src="<?php echo base_url("assets/images/kade_icons/noodlse.png"); ?>" width="100" height="100"
                    alt="my img" />
                <figcaption class="kade_types_captions"> PASTA </figcaption>
            </figure>
            <figure class="kade_types">
                <img src="<?php echo base_url("assets/images/kade_icons/sides.png"); ?>" width="100" height="100"
                    alt="my img" />
                <figcaption class="kade_types_captions"> SIDES </figcaption>
            </figure>
            <figure class="kade_types">
                <img src="<?php echo base_url("assets/images/kade_icons/desserts.png"); ?>" width="100" height="100"
                    alt="my img" />
                <figcaption class="kade_types_captions"> DESSERTS </figcaption>
            </figure>
        </div>
    </div>
</section>

<!-- PIZZA MENU HOME-->
<section class="bright py-2">
    <div class="container mx-auto">
        <h2 class="section_heading">LOADED <span>PIZZA</span> RANGE</h2>
        <div class="row mt-3">

			<?php foreach ($items as $pizza): ?>
				<article class="col-lg-4">
					<div class="pizza-box m-3 shadow">
						<div class="row">
							<div class="">
								<div class="d-flex h-1">
									<div class="mx-auto">
										<h5><?php echo $pizza['title']?></h5>
										<div class="newitem"><img alt=""
																  src="<?php echo base_url("assets/images/new.png"); ?>"></div>
										<div>
											<img class="pizza-image"
												 src="<?php echo base_url('assets/images/pizza_samples/'.$pizza['image']) ?>"
												 alt="a" />
										</div>
									</div>
								</div>
								<div clas="col-sm-9">
									<div class="p-3">
										<div class="text-center">
											<p><?php echo $pizza['description']?></p>
											<p class="menu-price">
												R: 589.00 M: 1189.00 L: 2099.00
											</p>
											<a class="order-button btn btn-main mt-1" href="<?php echo site_url('/customize/'.$pizza['id']); ?>"><i
														class="mr-2 fas fa-pizza-slice"></i>
												CUSTOMISE NOW</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
			<?php endforeach; ?>

        </div>
    </div>

</section>

<section class="bright py-3">
    <div class="container">
        <div class="container">
            <h2 class="section_heading">PASTA</h2>
            <div class="row mt-3">
                <article class="col-lg-4">
                    <div class="pizza-box m-3 shadow">
                        <div class="row">
                            <div clas="col-sm-3">
                                <div class="d-flex h-1">
                                    <div class="mx-auto">
                                        <h5>GARDEN FRESH DELIGHT</h5>
                                        <div class="newitem"><img alt=""
                                                src="<?php echo base_url("assets/images/new.png"); ?>"></div>
                                        <div>
                                            <img class="pizza-image"
                                                src="<?php echo base_url("assets/images/pasta_sample_images/Fussili_Con_Papaliana.jpg"); ?>"
                                                alt="a" />
                                        </div>
                                    </div>
                                </div>
                                <div clas="col-sm-9">
                                    <div class="p-3">
                                        <div class="text-center">
                                            <p>
                                                Onions I bell peppers I mushrooms I jalapenos I golden corn and
                                                olives-
                                                the
                                                ultimate treat to all veggie lover
                                            </p>
                                            <h3>LKR 450.00</h3>
                                            <a class="order-button btn btn-main mt-1" href=""> <i
                                                    class="fas fa-shopping-basket fa-1x"></i>
                                                ADD TO CART</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-lg-4">
                    <div class="pizza-box m-3 shadow">
                        <div class="row">
                            <div clas="col-sm-3">
                                <div class="d-flex h-1">
                                    <div class="mx-auto">
                                        <h5>GARDEN FRESH DELIGHT</h5>
                                        <div class="newitem"><img alt=""
                                                src="<?php echo base_url("assets/images/new.png"); ?>"></div>
                                        <div>
                                            <img class="pizza-image"
                                                src="<?php echo base_url("assets/images/pasta_sample_images/Spaghetti_Agliolio_E_Peperonico_rosse.jpg"); ?>"
                                                alt="a" />
                                        </div>
                                    </div>
                                </div>
                                <div clas="col-sm-9">
                                    <div class="p-3">
                                        <div class="text-center">
                                            <p>
                                                Onions I bell peppers I mushrooms I jalapenos I golden corn and
                                                olives-
                                                the
                                                ultimate treat to all veggie lover
                                            </p>
                                            <h3>LKR 450.00</h3>
                                            <a class="order-button btn btn-main mt-1" href=""> <i
                                                    class="fas fa-shopping-basket fa-1x"></i>
                                                ADD TO CART</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-lg-4">
                    <div class="pizza-box m-3 shadow">
                        <div class="row">
                            <div clas="col-sm-3">
                                <div class="d-flex h-1">
                                    <div class="mx-auto">
                                        <h5>GARDEN FRESH DELIGHT</h5>
                                        <div class="newitem"><img alt=""
                                                src="<?php echo base_url("assets/images/new.png"); ?>"></div>
                                        <div>
                                            <img class="pizza-image"
                                                src="<?php echo base_url("assets/images/pasta_sample_images/Spaghetti_Orientale_Con_Pollo.jpg"); ?>"
                                                alt="a" />
                                        </div>
                                    </div>
                                </div>
                                <div clas="col-sm-9">
                                    <div class="p-3">
                                        <div class="text-center">
                                            <p>
                                                Onions I bell peppers I mushrooms I jalapenos I golden corn and
                                                olives-
                                                the
                                                ultimate treat to all veggie lover
                                            </p>
                                            <h3>LKR 450.00</h3>
                                            <a class="order-button btn btn-main mt-1" href=""> <i
                                                    class="fas fa-shopping-basket fa-1x"></i>
                                                ADD TO CART</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>


        </div>
</section>

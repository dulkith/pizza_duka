<!-- PIZZA BANNE DETAILS -->
<section class="home_piza_banner">
    <img class="img-fluid" alt="banner" src="<?php echo base_url("assets/images/sub_banner_piza_kade.jpg"); ?>">
</section>

<section class="bright py-5">
    <div class="container">
        <!-- <div class="text-center  mb-5">
            <h1>Customize your pizza</h1>
            <p class="font-weight-light">Select your favourite toppings</p>
        </div> -->
        <!-- PIZZA MENU HOME-->
        <section class="bright">
            <div class="container">
                <div class="row mt-3">


                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div>
                                    <div class="pizzaBox text-center">
                                        <h4><?php echo $item['title']?></h4>
                                        <div class="customisePizzaLeftMobile">
                                            <div class="pizzaImg">
                                                <figure>
                                                    <img class="pizza-main-customizer"
                                                        src="<?php echo base_url('assets/images/pizza_samples/'.$item['image']) ?>"
                                                        alt="TandooriChicken.jpg">
                                                    <div id="upperImages">
                                                        <img class="topins"
                                                            src="<?php echo base_url("assets/images/pizza_topping/topping/customise-pizza-barbeque.png"); ?>"
                                                            alt="customise-pizza-barbeque" id="toppingsBbqChicken">
                                                        <img class="topins"
                                                            src="<?php echo base_url("assets/images/pizza_topping/topping/customise-pizza-spicy.png"); ?>"
                                                            alt="customise-pizza-spicy" id="toppingsDevilsChicken">
                                                        <img class="topins"
                                                            src="<?php echo base_url("assets/images/pizza_topping/topping/customise-mutton-keemas.png"); ?>"
                                                            alt="customise-pizza-barbeque" id="toppingsMuttonKeema">
                                                        <img class="topins"
                                                            src="<?php echo base_url("assets/images/pizza_topping/topping/customise-pizza-greenOlives.png"); ?>"
                                                            alt="customise-pizza-barbeque" id="toppingsBlackOlives">
                                                        <img class="topins"
                                                            src="<?php echo base_url("assets/images/pizza_topping/topping/customise-pizza-capsicum.png"); ?>"
                                                            alt="customise-pizza-barbeque" id="toppingsCrispCapsicum">
                                                        <img class="topins"
                                                            src="<?php echo base_url("assets/images/pizza_topping/topping/customise-pizza-mushroom.png"); ?>"
                                                            alt="customise-pizza-barbeque" id="toppingsMushroom">
                                                        <img class="topins"
                                                            src="<?php echo base_url("assets/images/pizza_topping/topping/customise-pizza-goldenCorn.png"); ?>"
                                                            alt="customise-pizza-barbeque" id="toppingsGoldenCorn">
                                                        <img class="topins"
                                                            src="<?php echo base_url("assets/images/pizza_topping/topping/customise-pizza-tomato.png"); ?>"
                                                            alt="customise-pizza-barbeque" id="toppingsFreshTomato">
                                                        <img class="topins"
                                                            src="<?php echo base_url("assets/images/pizza_topping/topping/customise-pizza-jalapeno.png"); ?>"
                                                            alt="customise-pizza-barbeque" id="toppingsJalapeno">
                                                        <img class="topins"
                                                            src="<?php echo base_url("assets/images/pizza_topping/topping/customise-tandoori-chicken.png"); ?>"
                                                            alt="customise-pizza-barbeque" id="toppingsTandooriChickens">
                                                        <img class="topins"
                                                            src="<?php echo base_url("assets/images/pizza_topping/topping/customise-pizza-paprika.png"); ?>"
                                                            alt="customise-pizza-barbeque" id="toppingsPaprika">
                                                        <img class="topins"
                                                            src="<?php echo base_url("assets/images/pizza_topping/topping/customise-chicken-sausage.png"); ?>"
                                                            alt="customise-pizza-barbeque" id="toppingsChickenSausage">
                                                        <img class="topins"
                                                            src="<?php echo base_url("assets/images/pizza_topping/topping/customise-pizza-onion.png"); ?>"
                                                            alt="customise-pizza-barbeque" id="toppingsOnions">
                                                        <img class="topins"
                                                            src="<?php echo base_url("assets/images/pizza_topping/topping/customise-pizza-bell-pepper.png"); ?>"
                                                            alt="customise-pizza-barbeque" id="toppingsBellPepper">
                                                    </div>
                                                </figure>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="pizzaContent text-center">
                                    <p><?php echo $item['description']?><br><h5>R: 589.00   M: 1189.00   L: 2099.00</h5>
                                    </p>
                                </div>


                                <div class="panel selectToppingsBox d-flex justify-content-center">
                                    <div class="m-4">
                                        <div class="input-group">
                                            <div class="row text-center">
                                                <div class="col-xs-4 ">
                                                    <button class="my-button plus-minus-btn"
                                                        onclick="decrementItemCount()"><i
                                                            class="fas fa-minus"></i></button>
                                                    <input class="itemCounter" id=inputItemCount disabled="disabled" de
                                                        type=number min=1 max=20>
                                                    <button class="my-button plus-minus-btn"
                                                        onclick="incrementItemCount()"><i
                                                            class="fas fa-plus"></i></button>
                                                </div>
                                                <div class="col-xs-4">
                                                    <span class="cusPrice"><?php echo $item['price']?></span>
                                                </div>

                                                <div class="col-xs-4 text-center ml-4">
                                                    <button type="button" class="btn btn-success btn-lg">ADD TO
                                                        CART</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                                                    href="javascript:showhidePizzaSize('#smallpz','#mediumpz','#largepz');">
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
                                                                    href="javascript:showhidePizzaSize('#mediumpz','#smallpz','#largepz');">
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
                                                                    href="javascript:showhidePizzaSize('#largepz','#smallpz','#mediumpz');">
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
                                                <div class="d-flex flex-column">
                                                    <div class="p-2">
                                                        <li id='b1'><a
                                                                href="javascript:showhide('#toppingsBbqChicken','#b1');"
                                                                class="black--olives "><img alt=""
                                                                    src="<?php echo base_url("assets/images/pizza_topping/icons/toppingsBarbeque.jpg"); ?>"><span>Bbq
                                                                    Chicken</span></a><input name="hidden_attributes"
                                                                type="hidden" value="267247"><input name="hidden_price"
                                                                type="hidden" value="125.00"></li>
                                                    </div>
                                                    <div class="p-2">
                                                        <li id='b2'><a
                                                                href="javascript:showhide('#toppingsDevilsChicken','#b2');"
                                                                class="onion "><img alt=""
                                                                    src="<?php echo base_url("assets/images/pizza_topping/icons/toppingsSpicyChicken.jpg"); ?>"><span>Devils
                                                                    Chicken</span></a><input name="hidden_attributes"
                                                                type="hidden" value="267250"><input name="hidden_price"
                                                                type="hidden" value="125.00"></li>
                                                    </div>
                                                    <div class="p-2">
                                                        <li id='b3'><a
                                                                href="javascript:showhide('#toppingsMuttonKeema','#b3');"
                                                                class="crisp--capsicum "><img alt=""
                                                                    src="<?php echo base_url("assets/images/pizza_topping/icons/toppingsMuttonKeemas.jpg"); ?>"><span>Mutton
                                                                    Keema</span></a><input name="hidden_attributes"
                                                                type="hidden" value="267253"><input name="hidden_price"
                                                                type="hidden" value="125.00"></li>
                                                    </div>
                                                    <div class="p-2">
                                                        <li id='b4'><a
                                                                href="javascript:showhide('#toppingsBlackOlives','#b4');"
                                                                class="mushroom"><img alt=""
                                                                    src="<?php echo base_url("assets/images/pizza_topping/icons/toppingsOlives.jpg"); ?>"><span>Black
                                                                    Olives</span></a><input name="hidden_attributes"
                                                                type="hidden" value="267259"><input name="hidden_price"
                                                                type="hidden" value="125.00"></li>
                                                    </div>
                                                    <div class="p-2">
                                                        <li id='b5'><a
                                                                href="javascript:showhide('#toppingsCrispCapsicum','#b5');"
                                                                class="golden--corn "><img alt=""
                                                                    src="<?php echo base_url("assets/images/pizza_topping/icons/toppingsCapsicum.jpg"); ?>"><span>Crisp
                                                                    Capsicum</span></a><input name="hidden_attributes"
                                                                type="hidden" value="267262"><input name="hidden_price"
                                                                type="hidden" value="125.00"></li>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <div class="p-2">
                                                        <li id='b6'><a
                                                                href="javascript:showhide('#toppingsMushroom','#b6');"
                                                                class="pineapple "><img alt=""
                                                                    src="<?php echo base_url("assets/images/pizza_topping/icons/toppingsMushroom.jpg"); ?>"><span>Mushroom</span></a><input
                                                                name="hidden_attributes" type="hidden"
                                                                value="267265"><input name="hidden_price" type="hidden"
                                                                value="125.00"></li>
                                                    </div>
                                                    <div class="p-2">
                                                        <li id='b7'><a
                                                                href="javascript:showhide('#toppingsGoldenCorn','#b7');"
                                                                class="fresh-tomato "><img alt=""
                                                                    src="<?php echo base_url("assets/images/pizza_topping/icons/toppingsGoldenCorn.jpg"); ?>"><span>Golden
                                                                    Corn</span></a><input name="hidden_attributes"
                                                                type="hidden" value="267268"><input name="hidden_price"
                                                                type="hidden" value="125.00"></li>
                                                    </div>
                                                    <div class="p-2">
                                                        <li id='b8'><a
                                                                href="javascript:showhide('#toppingsFreshTomato','#b8');"
                                                                class="jalapeno "><img alt=""
                                                                    src="<?php echo base_url("assets/images/pizza_topping/icons/toppingsTomato.jpg"); ?>"><span>Fresh
                                                                    Tomato</span></a><input name="hidden_attributes"
                                                                type="hidden" value="267271"><input name="hidden_price"
                                                                type="hidden" value="125.00"></li>
                                                    </div>
                                                    <div class="p-2">
                                                        <li id='b9'><a
                                                                href="javascript:showhide('#toppingsJalapeno','#b9');"
                                                                class="paprika "><img alt=""
                                                                    src="<?php echo base_url("assets/images/pizza_topping/icons/toppingsJalapeno.jpg"); ?>"><span>Jalapeno</span></a><input
                                                                name="hidden_attributes" type="hidden"
                                                                value="267350"><input name="hidden_price" type="hidden"
                                                                value="125.00"></li>
                                                    </div>
                                                    <div class="p-2">
                                                        <li id='b10'><a
                                                                href="javascript:showhide('#toppingsTandooriChickens','#b10');"
                                                                class="bell-pepper "><img alt=""
                                                                    src="<?php echo base_url("assets/images/pizza_topping/icons/toppingsTandooriChicken.jpg"); ?>"><span>Tandoori
                                                                    Chicken</span></a><input name="hidden_attributes"
                                                                type="hidden" value="267386"><input name="hidden_price"
                                                                type="hidden" value="125.00"></li>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-column">
                                                    <div class="p-2">
                                                        <li id='b11'><a
                                                                href="javascript:showhide('#toppingsPaprika','#b11');"
                                                                class="pineapple "><img alt=""
                                                                    src="<?php echo base_url("assets/images/pizza_topping/icons/toppingsPaprika.jpg"); ?>"><span>Paprika</span></a><input
                                                                name="hidden_attributes" type="hidden"
                                                                value="267265"><input name="hidden_price" type="hidden"
                                                                value="125.00"></li>
                                                    </div>
                                                    <div class="p-2">
                                                        <li id='b12'><a
                                                                href="javascript:showhide('#toppingsChickenSausage','#b12');"
                                                                class="fresh-tomato "><img alt=""
                                                                    src="<?php echo base_url("assets/images/pizza_topping/icons/toppingsChickenSausage.jpg"); ?>"><span>Chicken
                                                                    Sausage</span></a><input name="hidden_attributes"
                                                                type="hidden" value="267268"><input name="hidden_price"
                                                                type="hidden" value="125.00"></li>
                                                    </div>
                                                    <div class="p-2">
                                                        <li id='b13'><a
                                                                href="javascript:showhide('#toppingsBellPepper','#b13');"
                                                                class="jalapeno "><img alt=""
                                                                    src="<?php echo base_url("assets/images/pizza_topping/icons/toppingsBellPepper.jpg"); ?>"><span>Bell
                                                                    Pepper</span></a><input name="hidden_attributes"
                                                                type="hidden" value="267271"><input name="hidden_price"
                                                                type="hidden" value="125.00"></li>
                                                    </div>
                                                    <div class="p-2">
                                                        <li id='b14'><a
                                                                href="javascript:showhide('#toppingsOnions','#b14');"
                                                                class="paprika "><img alt=""
                                                                    src="<?php echo base_url("assets/images/pizza_topping/icons/toppingsOnion.jpg"); ?>"><span>Onion</span></a><input
                                                                name="hidden_attributes" type="hidden"
                                                                value="267350"><input name="hidden_price" type="hidden"
                                                                value="125.00"></li>
                                                    </div>
                                                </div>
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
$('#mediumpz').addClass('selected');
$('#inputItemCount').val('1');

function showhide(topinName, topinButton) {
    $(topinName).toggle();
    $(topinButton).find('a').toggleClass('selected');
}

function sayHi() {
    alert("Hi There! sayHi() function executed successfully!");
}

function showhidePizzaSize(select, unselect1, unselect2) {
    $(select).toggleClass('selected');
    $(unselect1).removeClass('selected');
    $(unselect2).removeClass('selected');
}

function incrementItemCount() {
    document.getElementById('inputItemCount').stepUp();
}

function decrementItemCount() {
    document.getElementById('inputItemCount').stepDown();
}
</script>

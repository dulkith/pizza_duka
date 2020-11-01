<!-- PIZZA BANNE DETAILS -->
<section class="home_piza_banner">
    <img class="img-fluid" alt="banner" src="<?php echo base_url("assets/images/sub_banner_piza_kade.jpg"); ?>">
</section>

<section class="bright py-5">
    <div class="container">
        <div class="text-center">
            <h1>Cart</h1>
            <p class="font-weight-light">Checkout your food items</p>
        </div>
        <div class="row justify-content-center">

            <table class="table cartTable">
                <thead>
                    <tr>
                        <th style="width:10%">Item</th>
                        <th>Title</th>
                        <th style="width:18%">Qty</th>
                        <th style="width:13%">Price</th>
                        <th style="width:13%">Total</th>
                        <th style="width:1%">#</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="<?php echo base_url("assets/images/pizza_sample_images/Non-Veg_Extravaganza.png.jpg"); ?>"
                                class="img-cart"></td>
                        <td><strong>TANDOORI CHICKEN</strong>
                            <p>Size : Regular</p>
                        </td>
                        <td>
                            <div class="col-xs-4 ">
                                <button class="my-button plus-minus-btn" onclick="decrementItemCount()"><i
                                        class="fas fa-minus"></i></button>
                                <input class="itemCounter" id=inputItemCount disabled="disabled" de type=number min=1
                                    max=20>
                                <button class="my-button plus-minus-btn" onclick="incrementItemCount()"><i
                                        class="fas fa-plus"></i></button>
                            </div>
                        </td>
                        <td>LKR 54.00</td>
                        <td>LKR 54.00</td>
                        <td>
                            <button class="my-button delete-btn"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>


                    <tr>
                        <td><img src="<?php echo base_url("assets/images/pizza_sample_images/sri_lankan_meaty.jpg"); ?>"
                                class="img-cart"></td>
                        <td><strong>TANDOORI MASALA</strong>
                            <p>Size : Regular</p>
                        </td>
                        </td>
                        <td>
                            <div class="col-xs-4 ">
                                <button class="my-button plus-minus-btn" onclick="decrementItemCount()"><i
                                        class="fas fa-minus"></i></button>
                                <input class="itemCounter" id=inputItemCount disabled="disabled" de type=number min=1
                                    max=20>
                                <button class="my-button plus-minus-btn" onclick="incrementItemCount()"><i
                                        class="fas fa-plus"></i></button>
                            </div>
                        </td>
                        <td>LKR 16.00</td>
                        <td>LKR 32.00</td>
                        <td>
                            <button class="my-button delete-btn"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td colspan="6">&nbsp;</td>
                    </tr> -->
                    <tr>
                        <td colspan="4" class="text-right"><strong>Sub Total</strong></td>
                        <td>LKR 86.00</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-right"><strong>Deliver Charge</strong></td>
                        <td>LKR 2.00</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-right">
                            <h3>Total</h3>
                        </td>
                        <td>LKR 88.00</td>
                    </tr>
                </tbody>
            </table>

            <button type="button" class="btn btn-outline-success btn-lg checkout-btn">CONTINUE</button>
        </div>

    </div>
</section>

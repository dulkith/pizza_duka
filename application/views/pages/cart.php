<!-- PIZZA BANNE DETAILS -->
<section class="home_piza_banner">
	<img class="img-fluid" alt="banner" src="<?php echo base_url("assets/images/sub_banner_piza_kade.jpg"); ?>">
</section>

<section class="bright py-5">
	<div class="container">
		<div class="text-center">
			<h1>Cart</h1>
			<p class="font-weight-light mb-5">Checkout your food items</p>
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

				<?php foreach ($cartDataArray as $item): ?>
					<tr>
						<td><img src="<?php echo base_url('assets/images/items_samples/' . $item->image) ?>"
								 class="img-cart"></td>
						<td><strong><?php echo $item->title ?></strong>
							<p><?php echo $item->cartDescription ?></p>
						</td>
						<td>
							<div class="col-xs-4 ">
								<a href="<?php echo base_url('update-cart-item-qty/' . $item->id . '/-1'); ?>">
									<button class="my-button plus-minus-btn"><i class="fas fa-minus"></i></button>
								</a>
								<input class="itemCounter" id=inputItemCount disabled="disabled" de type=number min=1
									   max=20 value="<?php echo $item->qty ?>">
								<a href="<?php echo base_url('update-cart-item-qty/' . $item->id . '/1'); ?>">
									<button class="my-button plus-minus-btn"><i class="fas fa-plus"></i></button>
								</a>
							</div>
						</td>
						<td><?php echo sprintf('%0.2f', $item->price) ?> <small>X <?php echo $item->qty ?></small></td>
						<td><?php echo sprintf('%0.2f', $item->total) ?></td>
						<td>
							<a href="<?php echo base_url('remove-from-cart/' . $item->id); ?>">
								<button class="my-button delete-btn"><i class="fas fa-trash-alt"></i></button>
							</a>
						</td>
					</tr>
				<?php endforeach; ?>


				<!-- <tr>
					<td colspan="6">&nbsp;</td>
				</tr> -->
				<tr>
					<td colspan="4" class="text-right"><strong>Sub Total</strong></td>
					<td>LKR <?php echo sprintf('%0.2f', $subTotal) ?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right"><strong>Deliver Charge</strong></td>
					<td>LKR <?php echo sprintf('%0.2f', $deliverCharge) ?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right">
						<h3>Total</h3>
					</td>
					<td>LKR <?php echo sprintf('%0.2f', $total) ?></td>
				</tr>
				</tbody>
			</table>

			<a href="<?php echo base_url(); ?>order">
				<button type="button" class="btn btn-outline-success btn-lg checkout-btn">CONTINUE</button>
			</a>
		</div>

	</div>
</section>

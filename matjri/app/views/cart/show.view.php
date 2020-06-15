

<main style="padding-top: 100px; padding-bottom: 100px">

	<!--start of container-->
	<div class="container">

		<div class="order-information">
			<!--start info-wrap-->
			<div class="info-wrap">
				<div class="info">
					<span><strong>Name:</strong>&nbsp;Hamza Alshanti</span>
				</div>
				
				<div class="info">
					<span><strong>Location:</strong>&nbsp;Gaza/Palestine</span>
				</div>



			</div>
			<!--end info-wrap-->

			<!--start info-wrap-->
			<div class="info-wrap">
				<div class="info">
					<span><strong>Number-Of-Items:</strong>&nbsp;<?= $total_qty ?></span>
				</div>
				<div class="info">
					<span><strong>Total-Price:</strong>&nbsp;$<?= $total_price ?></span>
				</div>
			</div>
			<!--end info-wrap-->
		</div>
	
<?php
 if(mysqli_num_rows($items) < 1){
 	echo 'No Items In The Cart';
 }else{



 while($item = mysqli_fetch_assoc($items)){ ?>
 	
 		<div class="cart-wrap">
 			<h2 class="mb-2"><?= $item['item_name'] ?></h2>
 			<div class="cart-item-info">
 				<span>
 					<strong>Qty: </strong>
 					<select name="qty">
 						<?php
 							for($i = 1; $i<=33 ; ++$i){?>
						<option value="<?= $i ?>"><?= $i ?></option>
 						<?php
 						}
 						?>
 					</select> 
 				</span>,&nbsp;
 				<span><strong>Price:</strong> $<?= $item['item_price'] ?></span>
 			</div>
 			<p><?= $item['item_desc'] ?></p>
 			<a href="http://localhost/commerce/matjri/public/cart/delete/<?= $item['id'] ?>" class="remove-item-cart" onclick="confirm('Are You Sure?')">Remove</a>
 		</div>


<?php }} ?>
	</div>
	<!--end of container -->
</main>

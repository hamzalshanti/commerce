
<?php

	$item_array = mysqli_fetch_assoc($item);


?>

<main style="padding-top: 100px; padding-bottom: 100px">
	
	<!--start of container-->
	<div class="container">
		
		<!--start of row-->
		<div class="row">
			
			<!--start of col-->
			<div class="col-md-6">
				<div class="item-img-show">
					<img src="http://localhost/commerce/dashboard/app/uploads/items/<?= $item_array['item_img']?>" alt="" class='w-100 h-100'>
				</div>
			</div>
			<!--end of col-->

			<!--start of col-->
			<div class="col-md-6">
				<!--start of item-info-->
				<div class="item-info">
					<h1>
						<span><?= $item_array['item_name'] ?></span>
					</h1>
					<span>Category: <?= $item_array['cat_name'] ?></span>,&nbsp;
					<span class="price-wrap">Price: <span>$<?= $item_array['item_price'] ?></span></span>
					<hr>
					<p><?= $item_array['item_desc'] ?></p>

					<a href="http://localhost/commerce/matjri/public/item/addtocart/<?= $item_array['item_id'] ?>" class="add-to-cart-btn"><i class="fas fa-cart-plus"></i>&nbsp; Add To Cart</a>
					
				</div>
				<!--end of item-info-->
			</div>
			<!--end of col-->


		</div>
		<!--end of row-->

	</div>
	<!--end of container-->

</main>

<main style="padding-top: 100px; padding-bottom: 100px">
	<!--start of container-->
	<div class="container">

		<?php  $cat = mysqli_fetch_assoc($category); ?>
		<!--start of cat-info-->
		<div class="cat-info">
		
			<div class="cat-title">
				<h2><?= $cat['cat_name'] ?> Category</h2>
			</div>

			<div class="cat-img">
				<img src="http://localhost/commerce/dashboard/app/uploads/categories/<?= $cat['cat_img']; ?>" alt="">
			</div>

			<div class="cat-desc mt-3">
				<p><?= $cat['cat_desc'] ?></p>
			</div>
		
		</div>
		<!--end of cat-info-->

		<div class="item-title mb-3">
				<h4>Products of <?= $cat['cat_name'] ?> Category</h4>
		</div>

		<div class="row products-display">
						<!--start of col-->
						<?php 
						if(mysqli_num_rows($item) < 1){
							echo '>>>>>>No Items<<<<<';
						}
						else{

						while($it = mysqli_fetch_assoc($item)){

						 ?>
						<div class="col-6 col-lg-4 card-wrapper">
							<div class="card">
								<div class="img-container">							  
							  		<img src="http://localhost/commerce/dashboard/app/uploads/items/<?php echo $it['item_img'] ?>" class="card-img-top" alt="...">
							  	<div class="card-option">
							  		<ul>
							  			<li><a href="#"><i class="fas fa-heart"></i></a></li>
							  			<li><a href="http://localhost/commerce/matjri/public/item/addtocart/<?= $it['id'] ?>"><i class="fas fa-shopping-cart"></i></a></li>
							  			<li><a href="http://localhost/commerce/matjri/public/item/id/<?= $it['id'] ?>"><i class="fas fa-search"></i></a></li>
							  		</ul>
							  	</div>
							  	</div>
								<div class="card-body text-center">
							    	<h6 class="card-title"><?php echo $it['item_name']; ?></h6>
							    	<span class="card-price"><?php echo '$'. $it['item_price'] ?></span>
							    	<ul class="card-rate">
							    		<li><i class="fas fa-star"></i></li>
							    		<li><i class="fas fa-star"></i></li>
							    		<li><i class="fas fa-star"></i></li>
							    		<li><i class="fas fa-star"></i></li>
							    		<li><i class="fas fa-star"></i></li>
							    	</ul>
								</div>	
							<a href="http://localhost/commerce/matjri/public/item/addtocart/<?= $it['id'] ?>" class="add-cart">Add to Cart</a>
						</div>
						</div>
						<!--end of col-->
						<?php 
							}}
						 ?>
					</div>
					<!--end of row-->

	</div>
	<!--end of container-->
</main>
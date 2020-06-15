

    <main>
    
			<!--start of hero-section-->
			<div class="hero-section">
				<div class="hero-section-content">
					<h2>Look For Specific Item?</h2>
					<form action="" class="search">
						<input type="text" name="s" placeholder="Search for item example: Tv, Headphone">
						<button type="submit"><i class="fas fa-search"></i></button>
					</form>
				</div>
				<div class="statistics">
					<div class="statistics-inner">
						<i class="fas fa-user"></i>&nbsp;
						<span><?= $user_counts ?>&nbsp;Customer</span>
					</div>
					<div class="statistics-inner">
						<i class="fas fa-align-left"></i>&nbsp;
						<span><?= $category_counts ?>&nbsp;Category</span>
					</div>
					<div class="statistics-inner">
						<i class="fas fa-box"></i>&nbsp;
						<span><?= $item_counts ?>&nbsp;Product</span>
					</div>
					<div class="statistics-inner">
						<i class="fas fa-shopping-cart"></i>&nbsp;
						<span>500&nbsp;Order</span>
					</div>
				</div>
			</div>
			<!--end of hero-section-->
				<!--start of container-->
		<div class="container">
			<!--start of row-->
			<div class="row main-row">
				<!--start of col-->
				<div class="col-12 col-lg-3 filter">
					<div class="filter-res">
						<div class="filter-res-title">
							<h5>Filter BY</h5>
						</div>
						<div class="filter-res-icon">
							<span><i class="fas fa-filter"></i></span>
						</div>
					</div>
					<div class="filter-options">
					<!--start of filter-by-category-->
					<div class="filter-by-category mb-3">
						<ul>
							<li><a href="http://localhost/commerce/matjri/public/category">Categories</a></li>
							<?php while($cat = mysqli_fetch_assoc($category)){ ?>
							<li><a href="http://localhost/commerce/matjri/public/category/show/<?= $cat['id']; ?>"><?= $cat['cat_name'] ?></a></li>
							<?php } ?>
						</ul>
					</div>
					<!--end of filter-by-category-->
					
					<!--start of filter-by-price-->
					<div class="filter-by-price mb-3">
						<h6>FILTER BY PRICE</h6>
						<input type="text" name="start_price">
						To
						<input type="text" name="end_price">
						<input type="submit" value="FILTER">
					</div>
					<!--end of filter-by-price-->
					
					<!--start of filter-by-color-->
					<div class="filter-by-color mb-3">
						<h6>FILTER BY COLORS</h6>
						<ul>
							<li><a href="">BLACK</a></li>
							<li><a href="">WHITE</a></li>
							<li><a href="">RED</a></li>
							<li><a href="">YALLOW</a></li>
							<li><a href="">GREEN</a></li>
							<li><a href="">BLUE</a></li>
						</ul>
					</div>
					<!--end of filter-by-color-->

					<!--start of product-tags-->
					<div class="product-tags">
						<h5>PRODUCT TAGS</h5>
						<ul class="tags">
							<li><a href="">sport</a></li>
							<li><a href="">games</a></li>
							<li><a href="">discount</a></li>
							<li><a href="">accobarete</a></li>
							<li><a href="">nice</a></li>
							<li><a href="">easy_to_use</a></li>
							<li><a href="">love</a></li>
						</ul>
					</div>
					<!--end of product-tags-->
					</div>
				</div>
				<!--end of col-->

				<!--start of col-->
				<div class="col-12 col-lg-9 products-view">
					<!--start of row-->
					<div class="row products-display">
						<!--start of col-->
						<?php 


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
							}
						 ?>
					</div>
					<!--end of row-->

					<!--start of featuers-->
					<div class="pagination">
						<ul>
							<li><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">4</a></li>
							<li><a href="">></a></li>
						</ul>
					</div>
					<!--end of pagination-->

				</div>
				<!--end of col-->
			</div>
			<!--end of row-->
		</div>
    	<!--end of container-->
    </main>
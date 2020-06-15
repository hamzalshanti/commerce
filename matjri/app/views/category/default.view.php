


<main style="padding-top: 100px; padding-bottom: 100px">

	<div class="container">
		<div class="cat-title">
			<h2>All Categories</h2>
		</div>
	
		<!--start of row-->
		<div class="row">
			<?php 
				while($cat = mysqli_fetch_assoc($category))
				{
			 ?>
			<!--start of col-->
			<div class=" col-12 col-sm-6 col-lg-3 mb-5">
				<!-- start of card -->
				<div class="my-card">
					<a href="http://localhost/commerce/matjri/public/category/show/<?= $cat['id']?>" class="my-card-link">
					<!-- start of upper -->
					<div class="upper">
						<div class="img-wrap">
							<img src="http://localhost/commerce/dashboard/app/uploads/categories/<?= $cat['cat_img']; ?>" alt="">
						</div>
					</div>
					<!-- end of upper -->

					<!-- start of lower -->
					<div class="lower">
						<div class="u-content">
							<h3><?php echo $cat['cat_name'] ?></h3>
						</div>
						<div class="l-content">
							<p class="m-0 p-3"><?php echo substr($cat['cat_desc'], 0, 80) . ' [etc..]' ?></p>
						</div>	
					</div>
					<!-- end of lower -->
				</a>
				</div>
				<!-- end of card-->
			</div>
			<!--end of col-->
			<?php 
				}
			 ?>
		</div>

		<!--end of row-->

	</div>
</main>
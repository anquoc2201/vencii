<?php include 'header.php' ?>	
		
		<?php 
			$topproduct = mysqli_query($conn,"SELECT * FROM  product WHERE status = 1 Order By id ");
	 ?>
		
		<!-- Begin Main -->
		
<div role="main" class="main">

	<!-- Begin page top -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
			<div class="col-lg-3 order-2 order-lg-1">
					<div class="filter-widget">
						<h2 class="fw-title">Sản phẩm</h2>
						<ul class="category-menu">
							<li><a href="category.php?id=5">Bomber</a></li>
							<li><a href="category.php?id=7">Hoodie</a></li>								
							<li><a href="category.php?id=4">Jackets</a></li>
							<li><a href="category.php?id=8">Pants</a></li>
							<li><a href="category.php?id=6">Snapback</a></li>
							<li><a href="category.php?id=9">Sweaters</a></li>
						</ul>
					</div>
					
					
					<div class="filter-widget">
						<h2 class="fw-title">Brand</h2>
						<ul class="category-menu">
							<li><a href="#">Champions <span>(2)</span></a></li>
							<li><a href="#">Dickies<span>(56)</span></a></li>
							<li><a href="#">Stussy<span>(36)</span></a></li>
							<li><a href="#">Reebok<span>(27)</span></a></li>
							<li><a href="#">Kappa<span>(19)</span></a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
					<?php foreach($topproduct as $top) : ?>
						<div class="col-lg-4 col-sm-6">
						<div class="product">
						<div class="product_image">
							<img src="public/uploads/<?php echo $top['image'];?>" alt="">
						</div>						
						<div class="product_content clearfix">
							<div class="product_info">
								<div class="product_name"><a href="product-detail.php?id=<?php echo $top['id'] ?>"><?php echo $top['name'] ?></a></div>
								<div class="product_price"><?php echo number_format($top['price']) ?> VND</div>
							</div>
							<div class="product_options">
							<a href="product-detail.php?id=<?php echo $top['id'] ?>" ng-click="quick_view(<?php echo $top['id'] ?>)" class="view-product">
								<span><i class="fa fa-external-link"></i></span>
							</a>
							<a href="shop-cart.php?id=<?php echo $top['id'] ?>" class="add-to-cart-product">
												<span><i class="fa fa-shopping-cart"></i></span>
											</a>
							</div>
						</div>
					</div>
						</div>
					<?php endforeach; ?>						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Main -->
		

<?php include 'footer.php' ?>
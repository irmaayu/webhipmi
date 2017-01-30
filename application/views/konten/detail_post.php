					<div class="container">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-12">
							<div class="view-product">
								<h2><?php echo $post->judul_berita; ?></h2>
								<img src="<?php echo base_url();?>assets/images/post/<?php echo $post->foto_berita; ?>" alt="" />
								<h3>ZOOM</h3>
							</div>
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="tab-pane fade active in" id="reviews" >
							<div class="col-sm-12">
								
								<p><?php echo $post->isi_lengkap_berita;?></p>
								
							</div>
						</div>
							
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<?php
								if ($recommended != NULL) {
							echo "<div class='carousel-inner'>";
							echo "<div class='item active'>";
									$i = 1;
									$max = count($recommended);
									foreach ($recommended as $value) {
							?>
										<div class="col-sm-4">
											<div class="product-image-wrapper">
												<div class="single-products">
													<div class="productinfo text-center">
														<img src="<?php echo base_url();?>assets/images/post/<?php echo $post->foto_berita; ?>" alt="" />
														
														<p><?php echo $post->judul_berita; ?></p>
														
													</div>
												</div>
											</div>
										</div>
							<?php
										if ($i % 3 == 0) {
											echo "</div>";
											echo "<div class='item'>";
										}
										$i++;
									}
							echo "</div>";
								}
							?>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
				</div>
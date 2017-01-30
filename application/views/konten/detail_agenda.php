					<div class="container">
					<div class="product-details"><!--product-details-->
						<div class="col-md-12">
							<div class="view-product">
								<img class="background-size: cover;" src="<?php echo base_url();?>assets/images/agenda/<?php echo $post->foto_agenda; ?>" alt="" />
								<h3>ZOOM</h3>
							</div>
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="tab-pane fade active in" id="reviews" >
							<div class="col-sm-12">
								<h2 align="center"><?php echo $post->judul_agenda; ?></h2>
								<h5 align="center"><?php echo $post->tanggal_agenda; ?></h5>
								<br/><br/><br/>
								<p><?php echo $post->isi_agenda;?></p>
								
							</div>
						</div>
							
						</div>
					</div><!--/category-tab-->
					
				
					</div><!--/recommended_items-->
				</div>
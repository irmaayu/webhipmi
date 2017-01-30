				<div class="container">
					<div class="product-details">
							
						
						<?php
							if ($list_galeri != NULL) {
								
								foreach ($list_galeri as $value) {
						?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url(); ?>assets/images/galeri/<?php echo $value->foto_galeri; ?>" alt="" />
													<p><?php echo $value->keterangan_galeri; ?></p>
													
													<div class="clearfix">
														<br><br> <br>
													</div>
												</div>
												
											</div>
										</div>
									</div>
						<?php }
							}?>
							</div><!--detail-->
						<div class="clearfix">
						
					</div>
					

					</div>
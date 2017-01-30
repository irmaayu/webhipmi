				<div class="container">
					<div class="product-details">
							 <?php
				            	if ($list_pengurus != NULL) {
				            		
				            		 
				            		foreach ($list_pengurus as $value) {
				            			if($value->jabatan==1){

				            ?>
						
							<div class="col-sm-2">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													
								</div>
							</div>
							</div>
							</div>
							<div class="col-sm-8">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="tes text-center">
													<img src="<?php echo base_url(); ?>assets/images/pengurus/<?php echo $value->foto; ?>" alt="" />
														<h2><?php echo $value->nama; ?></h2>
														<h3><?php echo $value->usaha; ?></h3>
														<h3><?php echo $value->kontak; ?></h3>
														
														<h4><?php echo "Presiden Direktur"; ?></h4>
													
								</div>
							</div>
							</div>
							</div>
							<div class="col-sm-2">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													
								</div>
							</div>
							</div>
							</div>
							
							


							<?php } else if($value->jabatan==2){?>
							<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="tes text-center">
													<img src="<?php echo base_url(); ?>assets/images/pengurus/<?php echo $value->foto; ?>" alt="" />
														<h2><?php echo $value->nama; ?></h2>
														<p><?php echo $value->usaha; ?><br><?php echo $value->kontak; ?></p>
														<p><?php echo "Sekretaris Umum"; ?></p>
													
										</div>
									</div>
								</div>
							</div>
							<?php } else if($value->jabatan==3){ ?>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="tes text-center">
											<img src="<?php echo base_url(); ?>assets/images/pengurus/<?php echo $value->foto; ?>" alt="" />
												<h2><?php echo $value->nama; ?></h2>
												<p><?php echo $value->usaha; ?><br><?php echo $value->kontak; ?></p>
												<p><?php echo "Sekretaris 2"; ?></p>

													
									</div>
								</div>
								</div>
							</div>
								<?php	} else if($value->jabatan==4){ ?>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="tes text-center">
											<img src="<?php echo base_url(); ?>assets/images/pengurus/<?php echo $value->foto; ?>" alt="" />
												<h2><?php echo $value->nama; ?></h2>
												<p><?php echo $value->usaha; ?><br><?php echo $value->kontak; ?></p>
												<p><?php echo "Bendahara Umum"; ?></p>

													
									</div>
								</div>
								</div>
							</div>
							<?php } else if($value->jabatan==5){ ?>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="tes text-center">
											<img src="<?php echo base_url(); ?>assets/images/pengurus/<?php echo $value->foto; ?>" alt="" />
												<h2><?php echo $value->nama; ?></h2>
												<p><?php echo $value->usaha; ?><br><?php echo $value->kontak; ?></p>
												<p><?php echo "Bendahara 2"; ?></p>

													
									</div>
								</div>
								</div>
							</div> 
							<?php  } else if($value->jabatan==6){ ?>
							<hr/>
								<div class="col-sm-2">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="tes text-center">
													
								</div>
							</div>
							</div>
							</div>
							<div class="col-sm-8">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="tes text-center">
											<img src="<?php echo base_url(); ?>assets/images/pengurus/<?php echo $value->foto; ?>" alt="" />
												<h2><?php echo $value->nama; ?></h2>
												<p><?php echo $value->usaha; ?><br><?php echo $value->kontak; ?></p>
												<p><?php echo "Direktur Public Relation"; ?></p>

													
									</div>
								</div>
								</div>
							</div>
								<div class="col-sm-2">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="tes text-center">
													
								</div>
							</div>
							</div>
							</div> 
							<?php  } else if($value->jabatan==7){ ?>
							
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="tes text-center">
											<img src="<?php echo base_url(); ?>assets/images/pengurus/<?php echo $value->foto; ?>" alt="" />
												<h2><?php echo $value->nama; ?></h2>
												<p><?php echo $value->usaha; ?><br><?php echo $value->kontak; ?></p>
												<p><?php echo "Staff Public Relation"; ?></p>

													
									</div>
								</div>
								</div>
							</div> 
							<?php  } else if($value->jabatan==8){ ?>
							<hr/>
								<div class="col-sm-2">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="tes text-center">
													
								</div>
							</div>
							</div>
							</div>
							<div class="col-sm-8">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="tes text-center">
											<img src="<?php echo base_url(); ?>assets/images/pengurus/<?php echo $value->foto; ?>" alt="" />
												<h2><?php echo $value->nama; ?></h2>
												<p><?php echo $value->usaha; ?><br><?php echo $value->kontak; ?></p>
												<p><?php echo "Direktur Bussiness Development"; ?></p>

													
									</div>
								</div>
								</div>
							</div>
								<div class="col-sm-2">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="tes text-center">
													
								</div>
							</div>
							</div>
							</div> 
							<?php } else if($value->jabatan==9){ ?>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="tes text-center">
											<img src="<?php echo base_url(); ?>assets/images/pengurus/<?php echo $value->foto; ?>" alt="" />
												<h2><?php echo $value->nama; ?></h2>
												<p><?php echo $value->usaha; ?><br><?php echo $value->kontak; ?></p>
												<p><?php echo "Staff Bussiness Development"; ?></p>

													
									</div>
								</div>
								</div>
							</div> 
							<?php } else if($value->jabatan==10){ ?>
							<hr/>
								<div class="col-sm-2">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="tes text-center">
													
								</div>
							</div>
							</div>
							</div>
							<div class="col-sm-8">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="tes text-center">
											<img src="<?php echo base_url(); ?>assets/images/pengurus/<?php echo $value->foto; ?>" alt="" />
												<h2><?php echo $value->nama; ?></h2>
												<p><?php echo $value->usaha; ?><br><?php echo $value->kontak; ?></p>
												<p><?php echo "Direktur Human Resource Development"; ?></p>

													
									</div>
								</div>
								</div>
							</div>
								<div class="col-sm-2">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="tes text-center">
													
								</div>
							</div>
							</div>
							</div> 
						
							<?php } else if($value->jabatan==11){ ?>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="tes text-center">
											<img src="<?php echo base_url(); ?>assets/images/pengurus/<?php echo $value->foto; ?>" alt="" />
												<h2><?php echo $value->nama; ?></h2>
												<p><?php echo $value->usaha; ?><br><?php echo $value->kontak; ?></p>
												<p><?php echo "Staff Human Resource Development"; ?></p>

													
									</div>
								</div>
								</div>
							</div> 
							
							<?php } else if($value->jabatan==12){ ?>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="tes text-center">
											<img src="<?php echo base_url(); ?>assets/images/pengurus/<?php echo $value->foto; ?>" alt="" />
												<h2><?php echo $value->nama; ?></h2>
												<p><?php echo $value->usaha; ?><br><?php echo $value->kontak; ?></p>
												<p><?php echo "M. Eksternal"; ?></p>

													
									</div>
								</div>
								</div>
							</div> 
						
							
							<?php } else if($value->jabatan==13){ ?>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="tes text-center">
											<img src="<?php echo base_url(); ?>assets/images/pengurus/<?php echo $value->foto; ?>" alt="" />
												<h2><?php echo $value->nama; ?></h2>
												<p><?php echo $value->usaha; ?><br><?php echo $value->kontak; ?></p>
												<p><?php echo "M. Internal"; ?></p>

													
									</div>
								</div>
								</div>
							</div> 
						
							<?php } else if($value->jabatan==14){ ?>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="tes text-center">
											<img src="<?php echo base_url(); ?>assets/images/pengurus/<?php echo $value->foto; ?>" alt="" />
												<h2><?php echo $value->nama; ?></h2>
												<p><?php echo $value->usaha; ?><br><?php echo $value->kontak; ?></p>
												<p><?php echo "M. Lifestyle"; ?></p>

													
									</div>
								</div>
								</div>
							</div> 
							<?php } else if($value->jabatan==15){ ?>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="tes text-center">
											<img src="<?php echo base_url(); ?>assets/images/pengurus/<?php echo $value->foto; ?>" alt="" />
												<h2><?php echo $value->nama; ?></h2>
												<p><?php echo $value->usaha; ?><br><?php echo $value->kontak; ?></p>
												<p><?php echo "M. Jasa"; ?></p>

													
									</div>
								</div>
								</div>
							</div> 
							<?php } else if($value->jabatan==16){ ?>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="tes text-center">
											<img src="<?php echo base_url(); ?>assets/images/pengurus/<?php echo $value->foto; ?>" alt="" />
												<h2><?php echo $value->nama; ?></h2>
												<p><?php echo $value->usaha; ?><br><?php echo $value->kontak; ?></p>
												<p><?php echo "M. SD"; ?></p>

													
									</div>
								</div>
								</div>
							</div> 
							<?php } else if($value->jabatan==17){ ?>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="tes text-center">
											<img src="<?php echo base_url(); ?>assets/images/pengurus/<?php echo $value->foto; ?>" alt="" />
												<h2><?php echo $value->nama; ?></h2>
												<p><?php echo $value->usaha; ?><br><?php echo $value->kontak; ?></p>
												<p><?php echo "M. Kader"; ?></p>

													
									</div>
								</div>
								</div>
							</div> 
							<?php } else { ?>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="tes text-center">
											<img src="<?php echo base_url(); ?>assets/images/pengurus/<?php echo $value->foto; ?>" alt="" />
												<h2><?php echo $value->nama; ?></h2>
												<p><?php echo $value->usaha; ?><br><?php echo $value->kontak; ?></p>
												<p><?php echo "M. Kuliner"; ?></p>

													
									</div>
								</div>
								</div>
							</div> 
							<?php }
								}
							}
							?>
						
					</div><!--detail-->
					<div class="clearfix">
						
					</div>
					<div align="center">
						<?php //echo $pagination; ?>
					</div>

</div>